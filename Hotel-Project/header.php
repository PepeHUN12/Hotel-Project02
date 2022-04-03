<!-- Header Area Start -->
    <link rel="stylesheet" href="sajat.css">
    <header class="header-area">
       
        <!-- Top Header Area Start -->
        <div class="top-header-area">
            <div class="container">
                <div class="row">

                    <div class="col-6">
                        <div class="top-header-content">
                            <a href="#"><i class="icon_phone"></i> <span>(+36) 30-789-1230</span></a>
                            <a href="#"><i class="icon_mail"></i> <span>Hotel@hotel.hu</span></a>
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="top-header-content">
                            <!-- Top Social Area -->
                            <div class="top-social-area ml-auto">
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i>
                                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                <span></span>
                            </div>
                                <?php 
                                        include "connection.php";                                     
                                        if (isset($_SESSION["semail"])) {
                                            echo " <a class='nevkiir'><span> ".$_SESSION["slastname"]." ".$_SESSION["sfirstname"] ."</span> </a> 
                                            <a href='logout.php'><span style='color:red;'>Kijelentkezés</span></a>";
                                        }
                                        else {
                                            echo ' <a name="log/reg" href="login.php"><span style="color:green;">Bejelentkezés</span></a> ';
                                        }
                                         
                                        $conn->close();
                                ?>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Top Header Area End -->

        <!-- Main Header Start -->
        <div class="main-header-area">
            <div class="classy-nav-container breakpoint-off">
                <div class="container sajatmenu">
                    <!-- Classy Menu -->
                    <nav class="classy-navbar" id="robertoNav" style="display:flex; flex-wrap: nowrap;!important;">

                        <!-- Logo -->
                        <a class="nav-brand" href="index.php"><img src="./img/core-img/schola-gimi.jpeg" alt=""></a>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">
                            <!-- Menu Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>
                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul id="nav">
                                    <li class="active"><a href="./index.php">Főoldal</a></li>
                                    <li><a href="./room.php">Szobák</a></li>
                                    <li><a href="./about.php">Rólunk</a></li>
                                <!--  <li><a href="./blog.php">hírek</a></li>-->

                                    <li><a href="premium-room.php">Prémium szobák</a></li>

                                    <li><a href="./contact.php">Kapcsolat</a></li>
                                    <br>
                                    <?php 
                                        include "connection.php";                                     
                                        if (isset($_SESSION["semail"])) {
                                            echo '
                                            <div class="hidden">
                                                <li>
                                                    <a class="nevkiir"><span> '.$_SESSION['slastname'].' '.$_SESSION['sfirstname'] .'</span> 
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="logout.php"><span style="color:red;">Kijelentkezés</span>
                                                    </a>
                                                </li>
                                            </div> 
                                            ';
                                        }
                                        else {
                                            echo '<div class="hidden">
                                            <li>
                                                <a name="log/reg" href="login.php">
                                                    <span style="color:green;">Bejelentkezés</span>
                                                </a>
                                            </i> 
                                            </div>';
                                        }
                                         
                                        $conn->close();
                                ?>
                                </ul>
                                        
                                

                                <!-- Book Now -->
                                <div class="book-now-btn ml-3 ml-lg-5">
                                    <a href="room.php">Foglaljon <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                                </div>

                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Area End -->