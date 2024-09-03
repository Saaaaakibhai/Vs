<?php
session_start();
?>
<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enroll</title>
    <!-- swiper css link  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />

    <!-- font -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css ">

    <!-- custom css file link -->
    <link rel="stylesheet" href="css/style.css"> 

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>
    <!-- header section starts  -->
    <section class="header">

        <a href="home.php" class="logo" style="text-decoration:none">Ant.Tech</a>

            <nav class="navbar" >
            <a href="home.php" style="text-decoration:none">home</a>
            <a href="about.php" style="text-decoration:none">about</a>
            <a href="course.php" style="text-decoration:none">course</a>
            <a href="enroll.php" style="text-decoration:none">enroll</a>
            <a href="logout.php" class="btn">Log Out</a>
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


<body>
<div class="w-auto p-5" style="background-color: #eee;">

    <div class="container mt-15"  style="scale:180%">
        
    
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Student Information 
                            <a href="index.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="code.php" method="POST">

                            <div class="mb-3">
                                <label>Student Name</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Student Email</label>
                                <input type="email" name="email" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Student Phone</label>
                                <input type="text" name="phone" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Student Course</label>
                                <input type="text" name="course" class="form-control">
                            </div>
                            <div class="mb-3">
                                <button type="submit" name="save_student" class="btn btn-primary">Save Student</button>
                            </div>

                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
      
    </div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>




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
                <a herf="#"> <i class="fab fa-facebook"></i> Facebook </a>
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