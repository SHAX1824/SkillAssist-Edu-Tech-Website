<?php
session_start();
if (!isset($_SESSION["user"])) {
   header("Location: login.php");
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="./assets/style.css">

</head>
<body>
    
    <!-- header section starts -->

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
    <img src="images/tech.jpg" alt="" class="mainpic">
    <section class="home" id="home">
        <div class="content">
            <h3>We Help you in Getting your Dream Job !!!</h3>
            <p>SkillAssist is IT Training Institute. which sets the right path for Graduates. by training them the tech or demand which present IT/NON-IT companies expect from Graduates.</p>
            <a href="about.php" class="btn">
                <span class="text text-1">Know more</span>
                <span class="text text-2" aria-hidden="true">For more Info</span>
            </a>    
        </div>

    </section>


    <section class="footer">

        <div class="box-container">

            <div class="box">
                <h3>find us here</h3>
                <p>You can DM our Social Media Handles for More Info.</p>
                <div class="share">
                    <a href="https://www.facebook.com/profile.php?id=100008998180737&mibextid=rS40aB7S9Ucbxw6v" class="fab fa-facebook-f"></a>
                    <a href="https://www.instagram.com/name_is_shashu?igsh=Y3ducThnZjdmeGI5&utm_source=qr" class="fab fa-twitter"></a>
                    <a href="https://www.instagram.com/name_is_shashu?igsh=Y3ducThnZjdmeGI5&utm_source=qr" class="fab fa-instagram"></a>
                    <a href="https://www.linkedin.com/in/shashank-m-aradhya-569714260?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=ios_app" class="fab fa-linkedin"></a>
                </div>
            </div>

            <div class="box">
                <h3>contact us</h3>
                <p>1234567891</p>
                <a href="#" class="link">skillAssistEdu@gmail.com</a>
            </div>

            <div class="box">
                <h3>Location</h3>
                <p>AMC College,<br>Bannerugatta,<br>Bengaluru</p>
            </div>

        </div>
        <div class="credit">created by <span>Shashank M Aradhya </span>| all rights are reserved!</div>
    </section>

    <!-- footer section ends -->












    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <!-- custom js -->
    <script src="./assets/script.js"></script>
</body>
</html>