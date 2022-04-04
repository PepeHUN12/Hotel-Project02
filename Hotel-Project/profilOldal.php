<?php
// Start the session
session_start();
ob_start();
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
    <link rel="stylesheet" href="sajat.css">
    <script src="sajatjs.js" async></script>

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

    <!-- Body Start -->
    <br>
    <div class="container szemelyes" >
        <div class="row sor">
            <div class="col">
                <h2 class="">Személyes információk</h2>
            </div>
            <div class="col colketto jobbra">
                <button class="btn btn-primary">Szerkesztés</button>
            </div>
        </div>
        <div class="row sor">
            <div class="col">
                <h3>Név: </h3>
            </div>
            <div class="col colketto">
                <?php 
                include "connection.php";                                     
                if (isset($_SESSION["semail"])) {
                    echo "<h6><span> ".$_SESSION["slastname"]." ".$_SESSION["sfirstname"] ."</span></h6>";
                }
                else {
                    echo ' <a name="log/reg" href="login.php"><span style="color:green;">Bejelentkezés</span></a> ';
                }
                    
                $conn->close();
                ?>
            </div>
        </div>
        <div class="row sor">
            <div class="col">
                <h4>Email: </h4>
            </div>
            <div class="col colketto">
                <h6>email@asd.com</h6>
            </div>
        </div>
        <div class="row sor">
            <div class="col">
                <h4>Telefon szám: </h4>
            </div>
            <div class="col colketto">
                <h6>Nulla6 hetven itt a BatMan</h6>
            </div>
        </div>
        <div class="row sor">
            <div class="col">
                <h4>Jelszó: </h4>
            </div>
            <div class="col colketto">
                <h6>LEGYEN KICSILLAOZVA!!!!</h6>
            </div>
        </div>
        <div class="row sor">
            <div class="col">
                <h4>Foglalások: </h4>
            </div>
            <div class="col colketto">
                <h6>TÓL- IG</h6>
            </div>
        </div>
    </div>
    <br>

    <!-- Body End -->

    

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