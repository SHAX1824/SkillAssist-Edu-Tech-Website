<?php
session_start();
if (isset($_SESSION["user"])) {
   header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/mainlogo.webp">
    <title>SkillAssist - IT Training Institute</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/style1.css">
</head>
<style>
  .heading{
  background-color:red;
  color:white;
}
.container{
background-color:skyblue;
}
body{
    background-color:lightslategray;
}
#image1{
    width:300px;
    margin-top:-430px;
    
}

#image2{
    width:250px;
    margin-left:78%;  
    margin-top:-440px;
    
}
form{
    margin-bottom:20px;
}

</style>
<body>
    
 
  
    <div class="container">
        <img src="" alt="">
        <?php
        if (isset($_POST["login"])) {
           $email = $_POST["email"];
           $password = $_POST["password"];
            require_once "../database/database.php";
            $sql = "SELECT * FROM users WHERE email = '$email'";
            $result = mysqli_query($conn, $sql);
            $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
            if ($user) {
                if (password_verify($password, $user["password"])) {
                    session_start();
                    $_SESSION["user"] = "yes";
                    header("Location: ../index.php");
                    die();
                }else{
                    echo "<div class='alert alert-danger'>Password does not match</div>";
                }
            }else{
                echo "<div class='alert alert-danger'>Email does not match</div>";
            }
        }
        ?>
<div class="moveform">
      <form action="login.php" method="post">
        <h2 align="center" class="heading">STUDENT LOGIN</h2><br>
        <div class="form-group">
            <input type="email" placeholder="Enter Email:" name="email" class="form-control">
        </div>
        <div class="form-group">
            <input type="password" placeholder="Enter Password:" name="password" class="form-control">
        </div>
        <div class="form-btn">
            <input type="submit" value="Login" name="login" class="btn btn-primary">
        </div>
      </form>
     <div><p>Not registered yet <a href="../login/registration.php">Register Here</a></p></div>
    </div>
    </div>
    <div>
    <img src="images/coding.jpg" id="image1" alt="">
    </div>
    <div>
    <img src="images/coding2.jpg" id="image2" alt="">
    </div>
</body>
</html>