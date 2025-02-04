<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="icon" href="images/mainlogo.webp">
    <title>SkillAssist - IT Training Institute</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <!-- custom css link -->
    <link rel="stylesheet" href="./assets/style.css">
</head>
<style>

</style>
<body>
<header class="header">
        <img class="mainlogo" src="./images/mainlogo.webp" alt="">
                <a href="#" class="logo">SkillAssist</a>
                <nav class="navbar">
                    <a href="index.php" class="hover-underline">Home</a>
                    <a href="about.php" class="hover-underline">About</a>
                    <a href="courses.php" class="hover-underline">Courses</a>
                    <a href="teacher.php" class="hover-underline">Teacher</a>
                    <a href="review.php" class="hover-underline">Review</a>
                    <a href="contact.php" class="hover-underline">Contact</a>
                </nav>
                <div class="idwrapper">
                <div>
                <button class="clickable" onclick="">
                <a href=""><img src="images/avatar.webp" class="avatar"></a>
                </button>
                </div>
                 <div class="logoinfo">
                    <ul><h2 id="name">Welcome! User</h2></ul>
                    <div class="container">
                    <ul><a href="./login/logout.php" class="log">Logout</a></ul>
                </li>
                </div>
                </div>
            </div>
            </header>
<section class="contact" id="contact">

    <h1 class="heading" id="contact">contact us</h1>

    <div class="row">
        <div class="image">
            <img src="images/contact.png" alt="">
        </div>
        <?php
        // Configuration
        $db_host = 'localhost';
        $db_username = 'root';
        $db_password = '';
        $db_name = 'internship';

        // Create connection
        $conn = new mysqli($db_host, $db_username, $db_password, $db_name);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: ". $conn->connect_error);
        }

        // Handle form submission
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = $_POST["name"];
            $email = $_POST["email"];
            $phone_number = $_POST["phone_number"];
            $message = $_POST["message"];

            // Validate input
            if (empty($name) || empty($email) || empty($phone_number) || empty($message)) {
                $error = "Please fill in all fields";
            } else {
                // Insert into database
                $sql = "INSERT INTO contact_form_submissions (name, email, phone_number, message) VALUES (?,?,?,?)";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("ssss", $name, $email, $phone_number, $message);
                $stmt->execute();

                // Send email (optional)
                // $to = "your_email@example.com";
                // $subject = "New contact form submission";
                // $body = "Name: $name\nEmail: $email\nPhone Number: $phone_number\nMessage: $message";
                // mail($to, $subject, $body);

                $success = "Thank you for contacting us! We will get back to you soon.";
            }
        }

        // Close connection
        $conn->close();
        ?>
        <form onsubmit="sendEmail(); reset(); return false;" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
<h3>send us a message</h3>
            <?php if (isset($error)): ?>
                <p><?php echo $error; ?></p>
            <?php endif; ?>
            <?php if (isset($success)): ?>
                <p><?php echo $success; ?></p>
            <?php endif; ?>
            <input type="text" onkeypress="onlyCharacters(event)" placeholder="name" class="box" name="name" required>

            <input type="email" placeholder="email"   class="box" name="email" required>
            <input type="tel" onkeypress="onlyPhoneNumber(event)" maxlength="10" placeholder="phone number" class="box" name="phone_number" required>
            <textarea placeholder="message" class="box" cols="30" rows="10" name="message" required></textarea>
            <input type="submit" class="cosub" name="send message">
        </form>
    </div>

</section>
<script src="script.js"></script>
</body>
</html>