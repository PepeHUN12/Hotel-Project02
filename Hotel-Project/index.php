<?php
// Start the session
session_start();
//unset($_SESSION["semail"]);
?>
<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>Schola - Hotel | Főoldal</title>

    <!-- Favicon -->
    <link rel="icon" href="./img/core-img/schola.png">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">

</head>

<body>

<?php
include "connection.php";
?>

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

    <!-- Welcome Area Start -->
    <section class="welcome-area">
        <div class="welcome-slides owl-carousel">
            <!-- Single Welcome Slide -->
            <div class="single-welcome-slide bg-img bg-overlay" style="background-image: url(img/bg-img/t1.jpg);" data-img-url="img/bg-img/t1.jpg">
                <!-- Welcome Content -->
                <div class="welcome-content h-100">
                    <div class="container h-100">
                        <div class="row h-100 align-items-center">
                            <!-- Welcome Text -->
                            <div class="col-12">
                                <div class="welcome-text text-center">
                                    <h6 data-animation="fadeInLeft" data-delay="200ms">Hotel &amp; Üdülő</h6>
                                    <h2 data-animation="fadeInLeft" data-delay="500ms">Köszöntelek az oldalunkon</h2>
                                    <a href="room.php" class="btn roberto-btn btn-2" data-animation="fadeInLeft" data-delay="800ms">Fedezd fel most</a>
                                </div>
                            </div>
                        </div>
                   </div>
                </div>
            </div>

            <!-- Single Welcome Slide -->
            <div class="single-welcome-slide bg-img bg-overlay" style="background-image: url(img/bg-img/t2.jpg);" data-img-url="img/bg-img/t2.jpg">
                <!-- Welcome Content -->
                <div class="welcome-content h-100">
                    <div class="container h-100">
                        <div class="row h-100 align-items-center">
                            <!-- Welcome Text -->
                            <div class="col-12">
                                <div class="welcome-text text-center">
                                    <h6 data-animation="fadeInLeft" data-delay="200ms">Hotel &amp; Üdülő</h6>
                                    <h2 data-animation="fadeInLeft" data-delay="500ms">Köszöntelek az oldalunkon</h2>
                                    <a href="room.php" class="btn roberto-btn btn-2" data-animation="fadeInLeft" data-delay="800ms">Fedezd fel most</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single Welcome Slide -->
            <div class="single-welcome-slide bg-img bg-overlay" style="background-image: url(img/bg-img/t3.jpg);" data-img-url="img/bg-img/t3.jpg">
                <!-- Welcome Content -->
                <div class="welcome-content h-100">
                    <div class="container h-100">
                        <div class="row h-100 align-items-center">
                            <!-- Welcome Text -->
                            <div class="col-12">
                                <div class="welcome-text text-center">
                                    <<h6 data-animation="fadeInLeft" data-delay="200ms">Hotel &amp; Üdülő</h6>
                                    <h2 data-animation="fadeInLeft" data-delay="500ms">Köszöntelek az oldalunkon</h2>
                                    <a href="room.php" class="btn roberto-btn btn-2" data-animation="fadeInLeft" data-delay="800ms">Fedezd fel most</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Welcome Area End -->

    <!-- About Us Area Start -->
    <section class="roberto-about-area section-padding-100-0">
        <!-- Hotel Search Form Area -->
        <div class="hotel-search-form-area">
            <div class="container-fluid">
                <div class="hotel-search-form">
                    <form action="#" method="post">
                        <div class="row justify-content-between align-items-end">
                            <div class="col-6 col-md-2 col-lg-3">
                                <label for="checkIn">Bejelentkezés</label>
                                <input type="date" class="form-control" id="checkIn" name="checkin-date">
                            </div>
                            <div class="col-6 col-md-2 col-lg-3">
                                <label for="checkOut">Kijelentkezés</label>
                                <input type="date" class="form-control" id="checkOut" name="checkout-date">
                            </div>

                            <div class="col-4 col-md-1">
                                <label for="adults">Felnőtt</label>
                                <select name="adults" id="adults" class="form-control">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                </select>
                            </div>
                            <div class="col-4 col-md-2 col-lg-1">
                                <label for="children">Gyermek</label>
                                <select name="children" id="children" class="form-control">
                                    <option value="0">-</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                </select>
                            </div>
                            <div class="col-12 col-md-3">
                                <button type="submit" class="form-control btn roberto-btn w-100">Keresés</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="container mt-100">
            <div class="row align-items-center">
                <div class="col-12 col-lg-6">
                    <!-- Section Heading -->
                    <div class="section-heading wow fadeInUp" data-wow-delay="100ms">
                        <h6>Rólunk</h6>
                        <h2>Üdvözöllek a <br>Schola luxus Hotel oldalán</h2>
                    </div>
                    <div class="about-us-content mb-100">
                        <h5 class="wow fadeInUp" data-wow-delay="300ms">Világszerte több mint 340 szállodájával az NH Hotel Group szállodák széles választékát kínálja a tökéletes tartózkodás érdekében, függetlenül attól, hogy hova utazik.</h5>
                        <p class="wow fadeInUp" data-wow-delay="400ms">Manager: <span>Peter Patyi</span></p>
                        <img src="img/core-img/signature.png" alt="" class="wow fadeInUp" data-wow-delay="500ms">
                    </div>
                </div>

                <div class="col-12 col-lg-6">
                    <div class="about-us-thumbnail mb-100 wow fadeInUp" data-wow-delay="700ms">
                        <div class="row no-gutters">
                            <div class="col-6">
                                <div class="single-thumb">
                                    <img src="img/bg-img/13.jpg" alt="">
                                </div>
                                <div class="single-thumb">
                                    <img src="img/bg-img/14.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="single-thumb">
                                    <img src="img/bg-img/15.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Us Area End -->

    <!-- Service Area Start -->
    <div class="roberto-service-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="service-content d-flex align-items-center justify-content-between">
                        <!-- Single Service Area -->
                        <div class="single-service--area mb-100 wow fadeInUp" data-wow-delay="100ms">
                            <img src="img/core-img/icon-1.png" alt="">
                            <h5>Szállítás</h5>
                        </div>

                        <!-- Single Service Area -->
                        <div class="single-service--area mb-100 wow fadeInUp" data-wow-delay="300ms">
                            <img src="img/core-img/icon-2.png" alt="">
                            <h5>szolgáltatás</h5>
                        </div>

                        <!-- Single Service Area -->
                        <div class="single-service--area mb-100 wow fadeInUp" data-wow-delay="500ms">
                            <img src="img/core-img/icon-3.png" alt="">
                            <h5>Spa Pihenés</h5>
                        </div>

                        <!-- Single Service Area -->
                        <div class="single-service--area mb-100 wow fadeInUp" data-wow-delay="700ms">
                            <img src="img/core-img/icon-4.png" alt="">
                            <h5>Étterem</h5>
                        </div>

                        <!-- Single Service Area -->
                        <div class="single-service--area mb-100 wow fadeInUp" data-wow-delay="900ms">
                            <img src="img/core-img/icon-1.png" alt="">
                            <h5>Bar &amp; Italok</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service Area End -->

    <!-- Our Room Area Start -->
    <section class="roberto-rooms-area">
        <div class="rooms-slides owl-carousel">
            <!-- Single Room Slide -->
            <div class="single-room-slide d-flex align-items-center">
                <!-- Thumbnail -->
                <div class="room-thumbnail h-100 bg-img" style="background-image: url(img/bg-img/premiumIndex.jpg);"></div>

                <!-- Content -->
                <div class="room-content">
                    <h2 data-animation="fadeInUp" data-delay="100ms">Premium Szoba</h2>
                    <h3 data-animation="fadeInUp" data-delay="300ms">550$ <span>/ Nap</span></h3>
                    <ul class="room-feature" data-animation="fadeInUp" data-delay="500ms">
                        <li><span><i class="fa fa-check"></i> Méret</span> <span>: 45 ft</span></li>
                        <li><span><i class="fa fa-check"></i> Kapacitás</span> <span>: Maximum 2+2 fő</span></li>
                        <li><span><i class="fa fa-check"></i> Ágy</span> <span>: Franciaágy</span></li>
                        <li><span><i class="fa fa-check"></i> Szolgáltatás</span> <span>: Wifi, tv, Sauna Jacuzzi</span></li>
                    </ul>
                    <a href="room.php" class="btn roberto-btn mt-30" data-animation="fadeInUp" data-delay="700ms">Részletek megtekintése
                    </a>
                </div>
            </div>

            <!-- Single Room Slide -->
            <div class="single-room-slide d-flex align-items-center">
                <!-- Thumbnail -->
                <div class="room-thumbnail h-100 bg-img" style="background-image: url(img/bg-img/seasideIndex.jpg);"></div>

                <!-- Content -->
                <div class="room-content">
                    <h2 data-animation="fadeInUp" data-delay="100ms">Tenger oldali szoba </h2>
                    <h3 data-animation="fadeInUp" data-delay="300ms">300$ <span>/ Nap</span></h3>
                    <ul class="room-feature" data-animation="fadeInUp" data-delay="500ms">
                        <li><span><i class="fa fa-check"></i> Méret</span> <span>: 40 ft</span></li>
                        <li><span><i class="fa fa-check"></i> Kapacitás</span> <span>: Maximum 2+2 fő</span></li>
                        <li><span><i class="fa fa-check"></i> Ágy</span> <span>: Franciaágy</span></li>
                        <li><span><i class="fa fa-check"></i> Szolgáltatás</span> <span>: Wifi, tv, Fürdőszoba</span></li>
                    </ul>
                    <a href="room.php   " class="btn roberto-btn mt-30" data-animation="fadeInUp" data-delay="700ms">Részletek megtekintése
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Our Room Area End -->
    <br>
    <br>
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