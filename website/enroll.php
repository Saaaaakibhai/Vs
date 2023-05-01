<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <!-- swiper css link  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />

    <!-- font -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css ">

    <!-- custom css file link -->
    <link rel="stylesheet" href="css/style.css">


</head>

<body>
    <!-- header section starts  -->
    <section class="header">

        <a href="home.php" class="logo">Ant.Tech</a>

        <nav class="navbar">
            <a href="home.php">home</a>
            <a href="about.php">about</a>
            <a href="course.php">course</a>
            <a href="enroll.php">enroll</a>
        </nav>
        <!-- it shows the bar  -->
        <div id="menu-btn" class="fas fa-bars"></div>

    </section>
    
    <!-- header section ends  -->
    
    <!-- Backgroup Picture -->
    <div class="heading" style="background:url(images/heading-enroll-background.jpg) no-repeat">
        <h1>Enroll Now</h1>
    </div>


<!-- enroll section starts -->
<section class="enrolling">
    <h1 class="heading-title">Enroll your corse!!!</h1>
    <form action="enroll_form.php" method="post" class="enrollform">
        <div class="flex">
            <div class="inputBox">
                <span>Name :</span>
                <input type="text" placeholder="Enter your name" name="name">
            </div>

            <div class="inputBox">
                <span>Email :</span>
                <input type="email" placeholder="Enter your email" name="email">
            </div>

            <div class="inputBox">
                <span>Phone :</span>
                <input type="number" placeholder="Enter your number" name="phone">
            </div>

            <div class="inputBox">
                <span>Address :</span>
                <input type="text" placeholder="Enter your address" name="address">
            </div>

            <div class="inputBox">
                <span>Which Course :</span>
                <input type="text" placeholder="Chose your course" name="name">
            </div>

            <div class="inputBox">
                <span>How many course :</span>
                <input type="number" placeholder="Number of courses" name="courses">
            </div>
        </div>

        <input type="submit" value="submit" class="btn" name="send">

    </form>

</section>

<!-- enroll section ends -->








    <!-- footer section starts -->
    <section class="footer">
        <div class="box-container">
            <div class="box">
                <h3> Quick links </h3>
                <a href="home.php"><i class="fas fa-angle-right"></i> home</a>
                <a href="about.php"><i class="fas fa-angle-right"></i> about</a>
                <a href="course.php"><i class="fas fa-angle-right"></i> course</a>
                <a href="enroll.php"><i class="fas fa-angle-right"></i> enroll</a>
            </div>

            <div class="box">
                <h3> Extra links </h3>
                <a href="#"><i class="fas fa-angle-right"></i> Ask Question </a>
                <a href="#"><i class="fas fa-angle-right"></i> About Us </a>
                <a href="#"><i class="fas fa-angle-right"></i> Privacy Policy </a>
                <a href="#"><i class="fas fa-angle-right"></i> Terms of Use </a>

            </div>
            <div class="box">
                <h3> Contact Info </h3>
                <a herf="#"><i class="fas fa-phone"></i> +880 1971 306 641 </a>
                <a herf="#"><i class="fas fa-phone"></i> +880 1621 887 399 </a>
                <a herf="#"><i class="fas fa-envelope"></i> hk30532@gmail.com </a>
                <a herf="#"><i class="fas fa-map"></i> xy,Mohakhali,Dhaka-1213 </a>

            </div>
            <div class="box">
                <h3> Follow Us </h3>
                <a herf="#"> <i class="fab fa-faceenroll"></i> Faceenroll </a>
                <a herf="#"> <i class="fab fa-twitter"></i> Twitter </a>
                <a herf="#"> <i class="fab fa-instagram"></i> Instagram </a>
                <a herf="#"> <i class="fab fa-linkedin"></i> Linkedln </a>

            </div>

        </div>

        <div class="credit">created by <span> Ant.Tech IT </span>| All Rights Reserved  </div>

    </section>

    <!-- footer section ends -->













    <!-- swiper js link  -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

    <!-- custom js file link  -->
    <script src="js/script.js"></script>

</body>

</html>