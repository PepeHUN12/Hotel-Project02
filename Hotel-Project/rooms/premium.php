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
                            <a href="#" class="btn view-detail-btn">Lefoglalás <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                        </div>
                    </div>