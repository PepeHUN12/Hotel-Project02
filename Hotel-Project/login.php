<?php 
ob_start();
session_start();
?>
<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title asd --> 
    <title>Hotel | Bejelentkezés</title>

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

    <div class="roberto-contact-form-area section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Section Heading -->
                    <div class="section-heading text-center wow fadeInUp" data-wow-delay="100ms" style="visibility: visible; animation-delay: 100ms; animation-name: fadeInUp;">
                    
                        <h2>Bejelentkezés</h2>
                    </div>
                </div>
            </div>

            <?php 
    
    include "connection.php";
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $getemail = $_POST["getemail"];
        $getpassword = $_POST["getpassword"];

        $sql = "SELECT GuestID, Email, Password, FirstName, LastName FROM Guests WHERE Email = '".$getemail."' and Password = '".$getpassword."' LIMIT 1";
        $getlogin = $conn->query($sql);
        if ($getlogin->num_rows > 0) {
            while ($result = $getlogin->fetch_assoc()) {
                        $_SESSION["guestid"] = $result["GuestID"];
                        $_SESSION["semail"] = $result["Email"];
                        $_SESSION["sfirstname"] = $result["FirstName"];
                        $_SESSION["slastname"] = $result["LastName"];
                         
                        header("Location: /Hotel-Project02/Hotel-Project/");
                        exit();
                        //echo "Sikeres bejelentkezés";
                        //echo "<script type='text/javascript'>alert('".$_SESSION["semail"]."');</script>";


            }
        }
        else {
            echo ' Sikertelen Bejelentkezés';
        }
    }
    
    $conn->close();
    ?>

            <div class="row"> 
                <div class="col-12">
                    <!-- Form -->
                    <div class="roberto-contact-form">
                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                            <div class="row">
                                <div class="col-12 col-lg-6 wow fadeInUp" data-wow-delay="100ms" style="visibility: visible; animation-delay: 100ms; animation-name: fadeInUp;">
                                    <input type="email" name="getemail" class="form-control mb-30" placeholder="Email">
                                </div>
                                <div class="col-12 col-lg-6 wow fadeInUp" data-wow-delay="100ms" style="visibility: visible; animation-delay: 100ms; animation-name: fadeInUp;">
                                    <input type="password" name="getpassword" class="form-control mb-30" placeholder="Jelszó">
                                </div>
                                
                                <div class="col-12 text-center wow fadeInUp" data-wow-delay="100ms" style="visibility: visible; animation-delay: 100ms; animation-name: fadeInUp;">
                                    <button type="submit" class="btn roberto-btn mt-15">Bejelentkezés</button>
                                    <a href="registration.php" class="btn roberto-btn mt-15"> Regisztráció </a>
                                </div>
                                
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

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