<<?php
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
<?php 
     include "connection.php";                                     
    if (isset($_SESSION["semail"])) {
        echo " <a class='nevkiir'><span> ".$_SESSION["slastname"]." ".$_SESSION["sfirstname"] ."</span> </a> ";
    }
    else {
        echo ' <a name="log/reg" href="login.php"><span style="color:green;">Bejelentkezés</span></a> ';
    }
        
    $conn->close();
?>
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