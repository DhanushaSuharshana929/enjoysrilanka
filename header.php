<header class="index-2">
    <!-- header top start -->
    <div class="header-top-area ">
        <div class="container">
            <div class="row">
                <div class="header-top-left">
                    <div class="col-sm-8">
                        <ul class="header-top-contact">
                            <li><i class="fa fa-phone" aria-hidden="true"></i> +94 777 719 380 / +94 912 250 510 </li>
                            <li><a href="mailto:office@enjoy-srilanka.com" style="color: white"><i class="fa fa-envelope-o" aria-hidden="true"></i> office@enjoy-srilanka.com</a></li>
                        </ul>
                    </div>

                    <div class="header-top-right">
                        <div class="col-sm-4">
                            <ul class="header-top-contact" style="float: right;">
                                <li><i class="fa fa-facebook" aria-hidden="true"></i></li>
                                <li><i class="fa fa-instagram" aria-hidden="true"></i></li>
                                <li><i class="fa fa-twitter" aria-hidden="true"></i></li>
                                <li><i class="fa fa-google-plus" aria-hidden="true"></i></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div> <!-- header top end -->

    <div class="header-bottom-area" id="stick-header">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-3 col-xs-12 tap-v-responsive">
                    <div class="logo-area">
                        <a href="index.php"><img src="images/enjoysrilankalogo3.png" alt="">
                        </a>
                    </div>
                </div>
                <!-- main menu start here -->
                <div class="col-md-9">
                    <nav>
                        <ul class="main-menu text-right">
                            <li class="active"><a href="index.php">Home</a>
                            </li>
                            <li><a href="about-us.php">About Us</a>
                            </li>
                            <li><a href="#">Tours</a>
                                <!-- dropdown start -->
                                <ul class="dropdown">
                                     <?php
                                $TOUR_TYPE = new TourType(NULL);
                                foreach ($TOUR_TYPE->all() as $tour_type) {

                                    ?>
                                    <li><a href="tours.php?type=<?php echo $tour_type['id']; ?>"><?php echo $tour_type['name']; ?></a></li>
                                     <?php } ?>
                                </ul>
                            </li>
                            <li><a href="excursions.php">Excursions</a>
                            </li>
                            <li><a href="our-team.php">Our Team</a>
                            </li>
                            <li><a href="gallery.php">Gallery</a>
                            </li>
                            <li><a href="contact-us.php">Contact</a>
                            </li>
                        </ul>
                    </nav>
                </div> <!-- main menu end here -->
            </div>
        </div>
    </div> <!-- header-bottom area end here -->
</header> <!-- header area end here -->