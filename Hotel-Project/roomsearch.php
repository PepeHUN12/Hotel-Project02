<?php 
session_start();
ob_start();
?>
<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>Schola - Hotel | Szobák</title>

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
    <div class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url(img/bg-img/t1.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content text-center">
                        <h2 class="page-title">Szobáink</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="index.html">Főoldal</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Szobák</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Area End -->

    <!-- Rooms Area Start -->
    <div class="roberto-rooms-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8">
                    
                    <!-- Tenger oldali szoba -->

                    <div class="single-room-area d-flex align-items-center mb-50 wow fadeInUp" data-wow-delay="100ms" style="visibility: visible; animation-delay: 100ms; animation-name: fadeInUp;">
                            <!-- Room Thumbnail -->
                            <div class="room-thumbnail">
                                <img src="img/bg-img/43.jpg" alt="">
                            </div>

                            <?php 
                                include "connection.php";
                                $sql = 'SELECT Price, Size, Bed, Adult,Child, Services FROM rooms WHERE Name = "Tenger oldali szoba" LIMIT 1';
                                
                                $result = $conn->query($sql);
                                if ($result->num_rows > 0) { 
                                    while ($row = $result->fetch_assoc()) {
                                        $price = $row["Price"];
                                        $size = $row["Size"];
                                        $bed = $row["Bed"];
                                        $adult = $row["Adult"];
                                        $child = $row["Child"];
                                        $services = $row["Services"];
                                    }
                                }
                                $conn->close();
                            ?>

                            <!-- Room Content -->
                            <div class="room-content">
                                <h2>Szoba Tenger oldali Kilátással</h2>
                                <h4> <?php echo "$price" ?>$ <span>/ Nap</span></h4>
                                <div class="room-feature">
                                    <h6>méter: <span><?php echo "$size" ?></span></h6>
                                    <h6>férőhely: <span><?php echo " ".$adult." + ".$child." " ?></span></h6>
                                    <h6>Ágy: <span><?php echo "$bed" ?></span></h6>
                                    <h6>Szervíz: <span><?php echo "$services" ?></span></h6>
                                </div>

                                
                                <?php 
                                //elérhetőség vizsgálat
                                $fromdate = $_SESSION["fromdate"];
                                $todate = $_SESSION["todate"];
                                    include "connection.php";
                                    $hiba = true;
                                    for ($x = 11; $x <= 15; $x++) {
                                        $sql = "SELECT * From reservations WHERE RoomID = ".$x." AND '".$fromdate."' BETWEEN FromDate AND ToDate AND '".$todate."' BETWEEN FromDate AND ToDate";
                                        $result = $conn->query($sql);
                                        //echo "<script type='text/javascript'>alert('$result');</script>";
                                        if ($result->num_rows < 1) {
                                            $hiba = false;
                                            $_SESSION["searoomid"] = $x;
                                            $_SESSION["fromdate1"] = $fromdate;
                                            $_SESSION["todate1"] = $todate;
                                            echo'<a href="seaside-room.php" class="btn view-detail-btn">Lefoglalás <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>';
                                            break;
                                            //if($_SESSION["adult"] <= $adult && $_SESSION["children"] <= $child) {
                                            //    echo'<a href="seaside-room.php" class="btn view-detail-btn">Lefoglalás <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>';
                                            //}
                                            
                                        }
                                        
                                    }
                                    if ($hiba){
                                        echo'Nem elérhető';
                                    }

                                ?>
                            </div>
                        </div>


                        <!-- Pagination -->
                        <nav class="roberto-pagination wow fadeInUp mb-100" data-wow-delay="1000ms">
                            
                        </nav>
                

                <!-- Csaladi szoba -->

                <div class="single-room-area d-flex align-items-center mb-50 wow fadeInUp" data-wow-delay="700ms" style="visibility: visible; animation-delay: 700ms; animation-name: fadeInUp;">
                        <!-- Room Thumbnail -->
                        <div class="room-thumbnail">
                            <img src="img\bg-img\csaladiSzoba.jpg" alt="csaladi">
                        </div>

                        <?php 
                            include "connection.php";
                            $sql = 'SELECT Price, Size, Bed, Adult,Child, Services FROM rooms WHERE Name = "Családi szoba" LIMIT 1';
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) { 
                                while ($row = $result->fetch_assoc()) {
                                    $price = $row["Price"];
                                    $size = $row["Size"];
                                    $bed = $row["Bed"];
                                    $adult = $row["Adult"];
                                    $child = $row["Child"];
                                    $services = $row["Services"];
                                }
                            }

                        ?>

                        <!-- Room Content -->
                        <div class="room-content">
                        <h2>Családi Szoba</h2>
                            <h4><?php echo "$price" ?>$ <span>/ Nap</span></h4>
                            <div class="room-feature">
                                <h6>méter: <span><?php echo "$size" ?></span></h6>
                                <h6>férőhely: <span> <?php echo " ".$adult." + ".$child." " ?></span></h6>
                                <h6>Ágy: <span><?php echo "$bed" ?></span></h6>
                                <h6>Szervíz: <span><?php echo "$services" ?></span></h6>
                            </div>
                            <a href="#" class="btn view-detail-btn">Lefoglalás <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                        </div>
                </div>

                <!-- premium szoba -->

                <div class="single-room-area d-flex align-items-center mb-50 wow fadeInUp" data-wow-delay="500ms" style="visibility: visible; animation-delay: 500ms; animation-name: fadeInUp;">
                        <!-- Room Thumbnail -->
                        <div class="room-thumbnail">
                            <img src="img/bg-img/premiumIndex.jpg" alt="">
                        </div>
                        <!-- Room Content -->

                        <?php 
                            include "connection.php";
                            $sql = 'SELECT Price, Size, Bed, Adult,Child, Services FROM rooms WHERE Name = "Prémium szoba" LIMIT 1';
                            
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) { 
                                while ($row = $result->fetch_assoc()) {
                                    $price = $row["Price"];
                                    $size = $row["Size"];
                                    $bed = $row["Bed"];
                                    $adult = $row["Adult"];
                                    $child = $row["Child"];
                                    $services = $row["Services"];
                                }
                            }

                        ?>

                        <div class="room-content">
                            <h2>Prémium Szoba</h2>
                            <h4> <?php echo "$price" ?>$ <span>/ Nap</span></h4>
                            <div class="room-feature">
                                <h6>méter: <span><?php echo "$size" ?></span></h6>
                                <h6>férőhely: <span><?php echo " ".$adult." + ".$child." " ?></span></h6>
                                <h6>Ágy: <span><?php echo "$bed" ?></span></h6>
                                <h6>Szervíz: <span><?php echo "$services" ?></span></h6>
                            </div>
                            <a href="premium-room.php" class="btn view-detail-btn">Lefoglalás <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                        </div>
                </div>

                <!-- paros szoba -->

                <div class="single-room-area d-flex align-items-center mb-50 wow fadeInUp" data-wow-delay="900ms" style="visibility: visible; animation-delay: 900ms; animation-name: fadeInUp;">
                        <!-- Room Thumbnail -->
                        <div class="room-thumbnail">
                            <img src="img/bg-img/couple.jpg" alt="">
                        </div>

                        <?php 
                            include "connection.php";
                            $sql = 'SELECT Price, Size, Bed, Adult,Child, Services FROM rooms WHERE Name = "Kétszemélyes szoba" LIMIT 1';
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) { 
                                while ($row = $result->fetch_assoc()) {
                                    $price = $row["Price"];
                                    $size = $row["Size"];
                                    $bed = $row["Bed"];
                                    $adult = $row["Adult"];
                                    $child = $row["Child"];
                                    $services = $row["Services"];
                                }
                            }

                        ?>

                        <!-- Room Content -->
                        <div class="room-content">
                            <h2>Páros szoba</h2>
                            <h4> <?php echo "$price" ?>$ <span>/ Nap</span></h4>
                            <div class="room-feature">
                                <h6>méter: <span><?php echo "$size" ?></span></h6>
                                <h6>férőhely: <span><?php echo " ".$adult." + ".$child." " ?></span></h6>
                                <h6>Ágy: <span><?php echo "$bed" ?></span></h6>
                                <h6>Szervíz: <span><?php echo "$services" ?></span></h6>
                            </div>
                            <a href="#" class="btn view-detail-btn">Lefoglalás <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                        </div>
                </div>
                
                <!-- single szoba -->

                <div class="single-room-area d-flex align-items-center mb-50 wow fadeInUp" data-wow-delay="100ms" style="visibility: visible; animation-delay: 100ms; animation-name: fadeInUp;">
                        <!-- Room Thumbnail -->
                        <div class="room-thumbnail">
                            <img src="img/bg-img/single-room.jpg" alt="">
                        </div>

                        <?php 
                            include "connection.php";
                            $sql = 'SELECT Price, Size, Bed, Adult,Child, Services FROM rooms WHERE Name = "Egyszemélyes szoba" LIMIT 1';
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) { 
                                while ($row = $result->fetch_assoc()) {
                                    $price = $row["Price"];
                                    $size = $row["Size"];
                                    $bed = $row["Bed"];
                                    $adult = $row["Adult"];
                                    $child = $row["Child"];
                                    $services = $row["Services"];
                                }
                            }

                        ?>

                        <!-- Room Content -->
                        <div class="room-content">
                        <h2>Egyszemélyes Szoba</h2>
                        <h4> <?php echo "$price" ?>$ <span>/ Nap</span></h4>
                            <div class="room-feature">
                                <h6>méter: <span><?php echo "$size" ?></span></h6>
                                <h6>férőhely: <span><?php echo " ".$adult." + ".$child." " ?></span></h6>
                                <h6>Ágy: <span><?php echo "$bed" ?></span></h6>
                                <h6>Szervíz: <span><?php echo "$services" ?></span></h6>
                            </div>
                            <a href="#" class="btn view-detail-btn">Lefoglalás <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                        </div>
                </div>
            </div>                
                <div class="col-12 col-lg-4">
                    <!-- Hotel Reservation Area -->
                    <div class="area mb-100">
                        <form action="#" method="post">
                            <div class="form-group mb-30">
                                <label for="checkInDate">Dátum</label>
                                <div>
                                    <div class="row no-gutters">
                                        <div class="col-6">
                                            <input type="date" class="input-small form-control" id="checkInDate" name="checkInDate" placeholder="Bejelentkezés">
                                        </div>
                                        <div class="col-6">
                                            <input type="date" class="input-small form-control" id="checkOut" name="checkOut" placeholder="Kijelentkezés">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mb-30">
                                <label for="guests">Vendégek</label>
                                <div class="row">
                                    <div class="col-6">
                                        <select name="adults" id="guests" class="form-control">
                                            <option value="adults">Felnőtt</option>
                                            <option value="01">1</option>
                                            <option value="02">2</option>
                                            <option value="03">3</option>
                                            <option value="04">4</option>
                                            <option value="05">5</option>
                                            <option value="06">6</option>
                                        </select>
                                    </div>
                                    <div class="col-6">
                                        <select name="children" id="children" class="form-control">
                                            <option value="children">Gyermek</option>
                                            <option value="00">-</option>
                                            <option value="01">1</option>
                                            <option value="02">2</option>
                                            <option value="03">3</option>
                                            <option value="04">4</option>
                                            <option value="05">5</option>
                                            <option value="06">6</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mb-50">
                                <div class="slider-range">
                                    <div class="range-price">Max ár: $0 - $550</div>
                                    <br>
                                    <div data-min="0" data-max="550" data-unit="$" class="slider-range-price ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" data-value-min="0" data-value-max="550" data-label-result="Max Price: ">
                                        <div class="ui-slider-range ui-widget-header ui-corner-all"></div>
                                        <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                                        <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn roberto-btn w-100">Keresés</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Rooms Area End -->

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