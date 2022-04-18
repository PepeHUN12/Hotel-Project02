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

    <!-- Title -->
    <title>Hotel | Regisztráció</title>

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

    <?php

        include "connection.php";

        $confirm = "0";
        $guestid = $firstname = $lastname = $email = $phone = $password = $passwordcon = "";
        $getidsql = "SELECT GuestID FROM guests";
        
        do {
            $idcheck = 0;
            $getid = $conn->query($getidsql);
            $guestid = rand(1,999);
            while ($result = $getid->fetch_assoc()) {
                $check = $result["GuestID"];
                if ($check == $guestid) {
                    $idcheck++;
                }
            }
            

        } while ($idcheck != 0);


        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            

            $firstname = $_POST["firstname"];
            $lastname = $_POST["lastname"];
            $phone = $_POST["phone"];
            $email = $_POST["email"];
            $passwordcon = $_POST["passwordcon"];
            $password = $_POST["password"];

            if($firstname == "" || $lastname == "" || $phone == "" || $email == "" ||  $password == "" || $passwordcon == "") {
                echo "Minden mezőt ki kell tölteni ";
                $confirm++;
            }
            else {}

            if($password!=$passwordcon) {
                echo "A jelszavak nem egyeznek";
                $confirm++;
            }

            else {}




            if($confirm == 0) {
                $sql = "INSERT INTO guests (GuestID, FirstName, LastName, PhoneNumber, Email, Password) 
                VALUES (".$guestid.", '".$firstname."', '".$lastname."', ".$phone.", '".$email."', '".$password."')";

                if ($conn->query($sql) === TRUE) {
                    echo "Sikeres regisztáció";
                    header("Location: /Hotel-Project02/Hotel-Project/");
                    exit();
                } 
                else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                    // header('Location: ./hiba.php');
                }
            }

           



            $conn->close();
        }


    ?>

    <div class="roberto-contact-form-area section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Section Heading -->
                    <div class="section-heading text-center wow fadeInUp" data-wow-delay="100ms" style="visibility: visible; animation-delay: 100ms; animation-name: fadeInUp;">
                    
                        <h2>Regisztráció</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <!-- Form -->
                    <div class="roberto-contact-form">
                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                            <div class="row">
                                <div class="col-12 col-lg-6 wow fadeInUp" data-wow-delay="100ms" style="visibility: visible; animation-delay: 100ms; animation-name: fadeInUp;">
                                    <input type="text" name="firstname" class="form-control mb-30" placeholder="Keresztnév">
                                </div>
                                <div class="col-12 col-lg-6 wow fadeInUp" data-wow-delay="100ms" style="visibility: visible; animation-delay: 100ms; animation-name: fadeInUp;">
                                    <input type="text" name="lastname" class="form-control mb-30" placeholder="Vezetéknév">
                                </div>
                                <div class="col-12 col-lg-6 wow fadeInUp" data-wow-delay="100ms" style="visibility: visible; animation-delay: 100ms; animation-name: fadeInUp;">
                                    <input type="email" name="email" class="form-control mb-30" placeholder="E-mail cím">
                                </div>

                                <div class="col-12 col-lg-6 wow fadeInUp" data-wow-delay="100ms" style="visibility: visible; animation-delay: 100ms; animation-name: fadeInUp;">
                                    <input type="number" name="phone" class="form-control mb-30" placeholder="Telefonszám">
                                </div>

                                <div class="col-12 col-lg-6 wow fadeInUp" data-wow-delay="100ms" style="visibility: visible; animation-delay: 100ms; animation-name: fadeInUp;">
                                    <input type="password" name="password" class="form-control mb-30" placeholder="Jelszó">
                                </div>

                                <div class="col-12 col-lg-6 wow fadeInUp" data-wow-delay="100ms" style="visibility: visible; animation-delay: 100ms; animation-name: fadeInUp;">
                                    <input type="password" name="passwordcon" class="form-control mb-30" placeholder="Jelszó megerősítése">
                                </div>
                                
                                <div class="col-12 text-center wow fadeInUp" data-wow-delay="100ms" style="visibility: visible; animation-delay: 100ms; animation-name: fadeInUp;">
                                    <button type="submit" class="btn roberto-btn mt-15">Regisztráció</button>
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