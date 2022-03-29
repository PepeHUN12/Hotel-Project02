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
    <title>Schola - Hotel | Prémium Szobák</title>

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
    <div class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url(img/bg-img/16.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-end">
                <div class="col-12">
                    <div class="breadcrumb-content d-flex align-items-center justify-content-between pb-5">
                        <h2 class="room-title">Tengerre nyíló kilátás</h2>
                        <h2 class="room-price">$550 <span>/Nap</span></h2>
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
                    <!-- Single Room Details Area -->
                    <div class="single-room-details-area mb-50">
                        <!-- Room Thumbnail Slides -->
                        <div class="room-thumbnail-slides mb-50">
                            <div id="room-thumbnail--slide" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="img/premiumszoba/kep1.jpg" class="d-block w-100" alt="">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="img/premiumszoba/kep2.jpg" class="d-block w-100" alt="">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="img/bg-img/premiumIndex.jpg" class="d-block w-100" alt="">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="img/premiumszoba/kep3.jpg" class="d-block w-100" alt="">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="img/premiumszoba/kep4.jpg" class="d-block w-100" alt="">
                                    </div>
                                </div>

                                <ol class="carousel-indicators">
                                    <li data-target="#room-thumbnail--slide" data-slide-to="0" class="active">
                                        <img src="img/premiumszoba/kep1.jpg" class="d-block w-100" alt="">
                                    </li>
                                    <li data-target="#room-thumbnail--slide" data-slide-to="1">
                                        <img src="img/premiumszoba/kep2.jpg" class="d-block w-100" alt="">
                                    </li>
                                    <li data-target="#room-thumbnail--slide" data-slide-to="2">
                                        <img src="img/bg-img/premiumIndex.jpg" class="d-block w-100" alt="">
                                    </li>
                                    <li data-target="#room-thumbnail--slide" data-slide-to="3">
                                        <img src="img/premiumszoba/kep3.jpg" class="d-block w-100" alt="">
                                    </li>
                                    <li data-target="#room-thumbnail--slide" data-slide-to="4">
                                        <img src="img/premiumszoba/kep4.jpg" class="d-block w-100" alt="">
                                    </li>
                                </ol>
                            </div>
                        </div>

                        <!-- Room Features -->
                        <div class="room-features-area d-flex flex-wrap mb-50">
                            <h6>Méret: <span>350-425sqf</span></h6>
                            <h6>Férőhely: <span>2 + 2</span></h6>
                            <h6>Ágy: <span>Franciaágy</span></h6>
                            <h6>Services: <span>Wifi, Tv, Szauna, Jacuzzi</span></h6>
                        </div>

                        <p>A Kanári-szigetek legnagyobbika, Tenerife igazi turistaparadicsom: fantasztikus klímájának köszönhetően egész évben tart itt a szezon. A legtöbb turista a nap és a tengerpart kedvéért érkezik, és a sziget 269 km. hosszú, változatos partszakaszain minden lehetőség adott is egy tökéletes vízparti nyaraláshoz. Az örök tavasz szigetének is nevezett Tenerife azonban a tenger mellett számtalan egyéb kikapcsolódási lehetőséget nyújt. A családosok biztosan élvezni fogják a Siam Parkot, amelyet többször is Európa legjobb vízi vidámparkjának választottak, a híres majomparkot és a pingvineket, delfineket, fókákat és bálnákat szerepeltető Loro Parkot. Aki pedig egy-egy napra hajlandó maga mögött hagyni a partok kényelmét, életre szóló emlékeket szerezhet a vulkanikus sziget különleges túraútvonalain. Mászd meg a 3718 méteres Teide vulkánt, csodáld meg a Teide Nemzeti Park pazar sziklaformáit, a lávakitörések lenyűgöző természeti lenyomatait, túrázz szurdokban vagy kajakozz óriás sziklafalak között – az életre szóló élmény garantált.</p>

                        <ul>
                            <li><i class="fa fa-check"></i> Szauna és Jacuzzi kolátlan használata.</li>
                            <li><i class="fa fa-check"></i> Masszázs.</li>
                        </ul>
                    </div>

                    <!-- Room Service -->
                    <div class="room-service mb-50">
                        <h4>Room Services</h4>

                        <ul>
                            <li><img src="img/core-img/icon1.png" alt=""> Klíma</li>
                            <li><img src="img/core-img/icon2.png" alt=""> Ingyen italok</li>
                            <li><img src="img/core-img/icon3.png" alt=""> Étterem</li>
                            <li><img src="img/core-img/icon4.png" alt=""> Okos TV</li>
                            <li><img src="img/core-img/icon5.png" alt=""> Korlátlan Wifi</li>
                            <li><img src="img/core-img/icon6.png" alt=""> Szervíz 0-24</li>
                        </ul>
                    </div>

                    <!-- Room Review -->
                    <div class="room-review-area mb-100">
                        <h4>Room Review</h4>

                        <!-- Single Review Area -->
                        <div class="single-room-review-area d-flex align-items-center">
                            <div class="reviwer-thumbnail">
                                <img src="img/bg-img/53.jpg" alt="">
                            </div>
                            <div class="reviwer-content">
                                <div class="reviwer-title-rating d-flex align-items-center justify-content-between">
                                    <div class="reviwer-title">
                                        <span>27 Aug 2021</span>
                                        <h6>Füty Imre</h6>
                                    </div>
                                    <div class="reviwer-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                                <p>Szuper szállás nagyszerű személyzette.</p>
                            </div>
                        </div>

                        <!-- Single Review Area -->
                        <div class="single-room-review-area d-flex align-items-center">
                            <div class="reviwer-thumbnail">
                                <img src="img/bg-img/54.jpg" alt="">
                            </div>
                            <div class="reviwer-content">
                                <div class="reviwer-title-rating d-flex align-items-center justify-content-between">
                                    <div class="reviwer-title">
                                        <span>27 Aug 2019</span>
                                        <h6>Har Mónika</h6>
                                    </div>
                                    <div class="reviwer-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                                <p>Mindenkinek ajánlom. Jövőre tuti vissza jövünk!!!</p>
                            </div>
                        </div>

                        <!-- Single Review Area -->
                        <div class="single-room-review-area d-flex align-items-center">
                            <div class="reviwer-thumbnail">
                                <img src="img/bg-img/55.jpg" alt="">
                            </div>
                            <div class="reviwer-content">
                                <div class="reviwer-title-rating d-flex align-items-center justify-content-between">
                                    <div class="reviwer-title">
                                        <span>27 Aug 2019</span>
                                        <h6>Dil Emma</h6>
                                    </div>
                                    <div class="reviwer-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                                <p>Nagyszerű masszázs, szuper kaják. Izgalmas programok. Nagyszerű kilátás!!</p>
                            </div>
                        </div>

                    </div>
                </div>

                <?php
                include "connection.php";
                // ID nem egyezik
                $getidsql = "SELECT ReservationID FROM Reservations";
                do {
                    $idcheck = 0;
                    $getid = $conn->query($getidsql);
                    $reservationid = rand(1, 999);
                    if ($getid->num_rows > 0) {
                        while ($result = $getid->fetch_assoc()) {
                            $check = $result["ReservationID"];
                            if ($check == $reservationid) {
                                $idcheck++;
                            }
                        }
                    }
                    else {
                        $reservationid = rand(1, 999);
                    }
                } while ($idcheck != 0);

                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $fromdate = $_SESSION["fromdate"];
                    $todate = $_SESSION["todate"];
                    $guestid = $_SESSION["guestid"];
                    $roomid = $_SESSION["premiumroomid"];
                    $roomname = "Prémium szoba";

                    $sql = "INSERT INTO Reservations (ReservationID, GuestID, FromDate, ToDate, RoomID, RoomName) VALUES (" . $reservationid . ", " . $guestid . ", '" . $fromdate . "', '" . $todate . "', " . $roomid . ", '" . $roomname . "' )";

                    //            echo " ".$reservationid." ".$guestid." ".$fromdate." ".$todate." ".$roomid." ";
                    if ($conn->query($sql) === TRUE) {
                        //echo " ".$reservationid." ".$guestid." ".$fromdate." ".$todate." ".$roomid." ";
                        //exit();
                        echo "Sikeres foglalás";
                    } else {
                        echo "Error: " . $sql . "<br>" . $conn->error;
                        // header('Location: ./hiba.php');
                    }

                    $conn->close();
                }

                ?>

                <div class="col-12 col-lg-4">
                    <!-- Hotel Reservation Area -->
                    <div class="hotel-reservation--area mb-100">
                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                            <div class="form-group mb-30">
                                <?php
                                $fromdate = $_SESSION["fromdate"];
                                $todate = $_SESSION["todate"];
                                echo " Érkezés: " . $fromdate . " <br>Távozás: " . $todate . " ";
                                ?>
                            </div>
                            <div class="form-group mb-30">
                                <label for="total">Végösszeg</label>
                                <h4 class="room-price"> 550$ +napok száma</h4>

                            </div>
                            <div class="form-group mb-50">

                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn roberto-btn w-100">Lefoglalás</button>
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