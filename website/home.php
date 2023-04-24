<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
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

    <!-- home section start -->
    <section class="home">
        <div class="swiper home-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide slide"style ="background:url(images/home01.jpg) no-repeat">
                    <div class="content">
                        <span>Think, Code, Fix</span>
                        <h3>Programming</h3>
                        <a href="course.php" class='btn'>Discover More</a>
                    </div>
                </div>
                <div class="swiper-slide slide"style ="background:url(images/home02.jpg) no-repeat">
                    <div class="content">
                        <span>Think, Code, Fix</span>
                        <h3>Find Suitable Language</h3>
                        <a href="course.php" class='btn'>Discover More</a>
                    </div>
                </div>
                <div class="swiper-slide slide"style ="background:url(images/home03.jpg) no-repeat">
                    <div class="content">
                        <span>Think, Code, Fix</span>
                        <h3>Way To Success</h3>
                        <a href="course.php" class='btn'>Discover More</a>
                    </div>
                </div>


            </div>

            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </section>

    <!-- home section end -->









<!-- courses in home section starts -->
     <section class="courses">
     <h1 class="heading-title">Our Coureses</h1>
     <div class="box-container"> 

        <div class="box">
            <img src="images/c++.png" alt="">
            <h3>C++</h3>           
        </div>
        <div class="box">
            <img src="images/rsz_1java.png" alt="">
            <h3>Java</h3>           
        </div>
        <div class="box">
            <img src="images/rsz_python.png" alt="">
            <h3>Python</h3>           
        </div>
        <div class="box">
            <img src="images/rsz_php.png" alt="">
            <h3>Php</h3>           
        </div>
         <div class="box">
            <img src="images/rsz_dsa.png" alt="">
            <h3>DSA</h3>           
        </div>
        <div class="box">
            <img src="images/rsz_dbms.png" alt="">
            <h3>DBMS</h3>           
        </div>
     </div>
</section>
<!-- courses in home section ends -->

<!-- home about section starts -->
<section class="home-about">
    <div class="image">
        <img src="images/homeabout.jpg" alt="">
    </div>
    <div class="content">
        <h3>About Us</h3>
        <p>
            We do provide the best IT services in 
                           Dhaka city.
                           We've multiple type of teacher from best institutions. 
        </p>
        <a href="about.php"class="btn">Read More</a>
    </div>
</section>
<!-- home about section ends -->



 



<!-- home course section starts -->

<section class="home-course">
    <h1 class="heading"> Our Coureses </h1>
    <div class="box-container">
        <!-- <div class="box">
            <div class="image">
                <img src="images/coursec++.jpg" alt="">
            </div>
            <div class="content">
                <h3>Programming & Explore</h3>
                <p>Pick your own language and do solve Everything</p>
                <a href="enroll.php" class="btn">Enroll Now</a>
            </div>
        </div> -->
        
        <div class="box">
            <div class="image">
                <img src="images/coursejava.jpg" alt="">
            </div>
            <div class="content">
                <h3>Programming & Explore</h3>
                <p>Pick your own language and do solve Everything</p>
                <a href="enroll.php" class="btn">Enroll Now</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/coursepython.jpg" alt="">
            </div>
            <div class="content">
                <h3>Programming & Explore</h3>
                <p>Pick your own language and do solve Everything</p>
                <a href="enroll.php" class="btn">Enroll Now</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/coursephp.jpg" alt="">
            </div>
            <div class="content">
                <h3>Programming & Explore</h3>
                <p>Pick your own language and do solve Everything</p>
                <a href="enroll.php" class="btn">Enroll Now</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/coursedsa.png" alt="">
            </div>
            <div class="content">
                <h3>Programming & Explore</h3>
                <p>Pick your own language and do solve Everything</p>
                <a href="enroll.php" class="btn">Enroll Now</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/coursedbms.jpg" alt="">
            </div>
            <div class="content">
                <h3>Programming & Explore</h3>
                <p>Pick your own language and do solve Everything</p>
                <a href="enroll.php" class="btn">Enroll Now</a>
            </div>
        </div>

    </div>

    <div class="Load-more"> <a href="course.php" class="btn">Load More</a></div>
</section>


<!-- home course section ends -->



<!-- home offer section start-->
<section class="home-offer">
    <div class="content">
        <h3>Upto 50% off</h3>
        <p>Grab your Oppurtunity and make a good Deal</p>
        <a href="enroll.php"class="btn">Enroll Now</a>
    </div>
</section>



<!-- home offer section end  -->








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