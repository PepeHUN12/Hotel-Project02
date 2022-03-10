<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>Schola - Hotel | Rólunk</title>

    <!-- Favicon -->
    <link rel="icon" href="./img/core-img/schola.png">
    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- /Preloader -->

    <!-- Header Area Start -->
    <?php 
    include "header.php";
    ?>
    <!-- Header Area End -->

    <!-- Breadcrumb Area Start -->
    <div class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url(img/bg-img/t3.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content text-center">
                        <h2 class="page-title">rólunk</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="index.html">Főoldal</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Rólunk</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Area End -->

    <!-- About Us Area Start -->
    <section class="roberto-about-us-area section-padding-100-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-lg-6">
                    <div class="about-thumbnail pr-lg-5 mb-100 wow fadeInUp" data-wow-delay="100ms">
                        <img src="img/bg-img/19.jpg" alt="">
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <!-- Section Heading -->
                    <div class="section-heading wow fadeInUp" data-wow-delay="300ms">
                        <h6>Beszámolók</h6>
                        <h2>20 év tapasztalat</h2>
                    </div>
                    <div class="about-content mb-100 wow fadeInUp" data-wow-delay="500ms">
                        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia dese mollit anim id
                            est laborum. Sed ut perspiciatis unde omnis iste.</p>
                        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia dese mollit anim id
                            est laborum. Sed ut perspiciatis unde omnis iste. Lorem Ipsum available.</p>
                        <img src="img/core-img/signature.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Us Area End -->

    <!-- Video Area Start -->
    <div class="roberto--video--area bg-img bg-overlay jarallax section-padding-0-100"
        style="background-image: url(img/bg-img/20.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center justify-content-center">
                <div class="col-12 col-md-6">
                    <!-- Section Heading -->
                    <div class="section-heading text-center white wow fadeInUp" data-wow-delay="100ms">
                        <h6>Ultimate Solutions</h6>
                        <h2>Our Hotel &amp; Room</h2>
                    </div>
                    <div class="video-content-area mt-100 wow fadeInUp" data-wow-delay="500ms">
                        <a href="https://www.youtube.com/watch?v=2up_Eq6r6Ko" class="video-play-btn"><i
                                class="fa fa-play"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Video Area End -->

    <!-- Service Area Start -->
    <section class="roberto-service-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Section Heading -->
                    <div class="section-heading text-center wow fadeInUp" data-wow-delay="100ms">
                        <h6>Ultimate Solutions</h6>
                        <h2>Our Hotel &amp; Room</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Single Service Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-service-area mb-100 wow fadeInUp" data-wow-delay="300ms">
                        <img src="img/bg-img/21.jpg" alt="">
                        <div class="service-title d-flex align-items-center justify-content-center">
                            <h5>Restaurant &amp; Bar</h5>
                        </div>
                    </div>
                </div>
                <!-- Single Service Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-service-area mb-100 wow fadeInUp" data-wow-delay="500ms">
                        <img src="img/bg-img/22.jpg" alt="">
                        <div class="service-title d-flex align-items-center justify-content-center">
                            <h5>Spa &amp; Fitness</h5>
                        </div>
                    </div>
                </div>
                <!-- Single Service Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-service-area mb-100 wow fadeInUp" data-wow-delay="700ms">
                        <img src="img/bg-img/23.jpg" alt="">
                        <div class="service-title d-flex align-items-center justify-content-center">
                            <h5>Pool &amp; Party</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Service Area End -->
    <!-- Footer Start-->
        <?php
        include "footer.php";
        ?>
    <!-- Footer End-->

    <!-- **** All JS Files ***** -->
    <!-- jQuery 2.2.4 -->
    <script src="js/jquery.min.js"></script>
    <!-- Popper -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- All Plugins -->
    <script src="js/roberto.bundle.js"></script>
    <!-- Active -->
    <script src="js/default-assets/active.js"></script>

</body>

</html>