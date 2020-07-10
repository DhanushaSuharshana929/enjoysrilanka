<?php
include './class/include.php';

$ABOUT = new Page(1);
?>

<!DOCTYPE html>
<html class="no-js" lang="zxx">


    <head>
        <meta charset="UTF-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="TRABBLE - Tour, Travel, Travel Agency Template">
        <meta name="keywords" content="Tour, Travel, Travel Agency Template">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Enjoy Sri Lanka - Tour & Travel  Agency Company</title>
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="images/favicon_enjoysrilanka.png">
        <!-- bootstrap css -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <!-- animate css -->
        <link rel="stylesheet" href="css/animate.css">
        <!-- Button Hover animate css -->
        <link rel="stylesheet" href="css/hover-min.css">
        <!-- jquery-ui.min css -->
        <link rel="stylesheet" href="css/jquery-ui.min.css">
        <!-- meanmenu css -->
        <link rel="stylesheet" href="css/meanmenu.min.css">
        <!-- owl.carousel css -->
        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <!-- slick css -->
        <link rel="stylesheet" href="css/slick.css">
        <!-- chosen.min-->
        <link rel="stylesheet" href="css/chosen.min.css">
        <!-- chosen.min-->
        <link rel="stylesheet" href="css/jquery-customselect.css">
        <!-- font-awesome css -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <!-- magnific Css -->
        <link rel="stylesheet" href="css/magnific-popup.css">
        <!-- Revolution Slider -->
        <link rel="stylesheet" href="css/assets/revolution/layers.css">
        <link rel="stylesheet" href="css/assets/revolution/navigation.css">
        <link rel="stylesheet" href="css/assets/revolution/settings.css">
        <!-- custome css -->
        <link rel="stylesheet" href="css/style.css">
        <!-- responsive css -->
        <link rel="stylesheet" href="css/responsive.css">
        <!-- modernizr css -->
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>

    </head>
    <body> 

        <?php
        include ("./header.php");
        ?>
        <!-- header area end here -->

        <!-- slider area start here -->
        <?php
        include ("./slider.php");
        ?>
        <!-- slider area end here -->



        <section class="section-paddings welcome-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 hidden-sm hidden-xs">
                        <div class="single-welcome-area">
                            <div class="single-imag">
                                <img src="images/welcome/1.jpg" alt="" class="img-thumbnail img-responsive">
                            </div>

                        </div>
                    </div> <!-- welcome area left side end -->

                    <div class="col-md-6">
                        <div class="single-welcome-text">
                            <div class="section-title-version-2">
                                <h2>Welcome to Enjoy Sri Lanka</h2>
                                <h4> JOIN WITH US AND GET UNFORGETABLE MEMORY..!</h4>
                                <div class="welcome-content">
                                    <p><?php echo $ABOUT->description ?></p>
                                    <a href="about-us.php" class="read-more hvr-fade" style="margin-top: 15px;">Read More</a>
                                </div>

                            </div>
                        </div>
                    </div>  <!-- welcome area right side end -->
                </div>
            </div>
        </section> <!-- welcome area start end here -->

        <section class="tour-package-bg image-bg-padding-100">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="section-title-version-2-white text-center">
                            <h2>Let’s Enjoy Excellent Tour Packages</h2>
                            <p>We are dedicated to make it a memorable one for you whichever is your holiday package</p>
                        </div>
                    </div>
                    <!-- tour packages carosual -->
                    <div class="popular-packages-carasoul owl-carousel">
                        <?php
                        $TOUR_PACKAGE = new TourPackage(NULL);
                        foreach ($TOUR_PACKAGE->all()as $tour_package) {
                            ?>

                            <div class="single-package-carasoul">
                                <div class="package-location">
                                    <a href="view-tour-package.php?id=<?php echo $tour_package['id'] ?>"><img src="upload/tour-package/<?php echo $tour_package['image_name']; ?>" alt=""></a>

                                </div>

                                <div class="package-details">
                                    <div class="package-places">
                                        <a href="view-tour-package.php?id=<?php echo $tour_package['id'] ?>"><h4><?php echo $tour_package['title']; ?></h4></a>
                                        <span> <i class="fa fa-clock-o"></i> <?php echo $tour_package['dates']; ?></span>
                                        <div class="details">
                                            <p><?php echo substr($tour_package['short_description'], 0, 75) . '..'; ?></p>
                                        </div>
                                    </div>


                                </div>

                                <div class="package-long-btn hvr-shutter-out-horizontal">
                                    <a href="view-tour-package.php?id=<?php echo $tour_package['id'] ?>">Read More</a>
                                </div>
                            </div>
                        <?php } ?>






                    </div> <!-- tour packages carosual end -->
                </div>
            </div>
        </section> <!-- Tour Packages end here -->

        <section class="pb-70 pt-100">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="section-title text-center">
                            <h2>Most Popular Excursions</h2>
                            <p>Choose one of our best popular tours and excursions in SriLanka. Come and join with us...  </p>
                        </div>
                    </div>
                </div>


                <div id="owl-demo" class="owl-carousel owl-theme destination-slider">
<?php
                    $ATTRACTION = new Attraction(NULL);
                    foreach ($ATTRACTION->all() as $key => $attraction) {
                        if ($key < 10) {
                            ?>
                 
                        <div class="single-destination">
                            <figure>
                                <a href="view-excursions.php?id=<?php echo $attraction['id'] ?>"><img src="upload/attraction/<?php echo $attraction['image_name']; ?>" alt="">
                                    </a>
                                <figcaption>
                                    <a href="view-excursions.php?id=<?php echo $attraction['id'] ?>" class="travel-booking-btn hvr-shutter-out-horizontal">Read More</a>
                                </figcaption>
                            </figure>
                            <div class="des-city">
                                <a href="view-excursions.php?id=<?php echo $attraction['id'] ?>"><?php echo substr($attraction['title'], 0, 23) . '..'; ?></a>
                            </div>
                        </div> <!-- single popular destination  end-->

                        <?php
                        }
                    }
                    ?>
                 
                </div>

            </div>

        </div>
    </section> <!-- end popular destination-->

    <!-- testimonial area start here -->
    <section class="testimonial-area-5">
        <div class="testimonial-5-active owl-carousel">
            <!-- single testimonial start -->

            <?php
            $COMMENT = new Comments(NULL);
            foreach ($COMMENT->activeComments() as $comment) {
                ?>
                <div class="single-testimonial">
                    <img src="upload/comments/<?php echo $comment['image_name']; ?>" alt="" class="img-responsive img-circle">
                    <div class="testimonial-messages">
                        <p><?php echo $comment['comment']; ?></p>
                    </div>
                    <div class="author-bio">
                        <h3><?php echo $comment['name']; ?></h3>
                        <span><?php echo $comment['country']; ?></span>
                    </div>
                </div>

                <?php
            }
            ?>
            <!-- single testimonial end -->
        </div>
    </section><!-- testimonial area end here -->


    <?php
    include ("./footer.php");
    ?>
    <!-- end footer -->

    <div class="to-top pos-rtive">
        <a href="#"><i class = "fa fa-angle-up"></i></a>
    </div><!-- Scroll to top-->

    <!-- ============================
                JavaScript Files
    ============================= -->
    <!-- jquery -->
    <script src="js/vendor/jquery-3.2.0.min.js"></script>
    <!-- bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- owl.carousel js -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- slick js -->
    <script src="js/slick.min.js"></script>
    <!-- meanmenu js -->
    <script src="js/jquery.meanmenu.min.js"></script>
    <!-- jquery-ui js -->
    <script src="js/jquery-ui.min.js"></script>
    <!-- wow js -->
    <script src="js/wow.min.js"></script>
    <!-- counter js -->
    <script src="js/jquery.counterup.min.js"></script>
    <!-- Countdown js -->
    <script src="js/jquery.countdown.min.js"></script>
    <!-- waypoints js -->
    <script src="js/jquery.waypoints.min.js"></script>
    <!-- Isotope js -->
    <script src="js/isotope.pkgd.min.js"></script>
    <!-- magnific js -->
    <script src="js/jquery.magnific-popup.min.js"></script>
    <!-- Image loaded js -->
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <!-- chossen js -->
    <script src="js/chosen.jquery.min.js"></script>
    <!-- Revolution JS -->
    <script src="js/assets/revolution/jquery.themepunch.revolution.min.js"></script>
    <script src="js/assets/revolution/jquery.themepunch.tools.min.js"></script>
    <script src="js/assets/revolution/extensions/revolution.extension.actions.min.js"></script>
    <script src="js/assets/revolution/extensions/revolution.extension.carousel.min.js"></script>
    <script src="js/assets/revolution/extensions/revolution.extension.kenburn.min.js"></script>
    <script src="js/assets/revolution/extensions/revolution.extension.layeranimation.min.js"></script>
    <script src="js/assets/revolution/extensions/revolution.extension.migration.min.js"></script>
    <script src="js/assets/revolution/extensions/revolution.extension.navigation.min.js"></script>
    <script src="js/assets/revolution/extensions/revolution.extension.parallax.min.js"></script>
    <script src="js/assets/revolution/extensions/revolution.extension.slideanims.min.js"></script>
    <script src="js/assets/revolution/extensions/revolution.extension.video.min.js"></script>
    <script src="js/assets/revolution/revolution.js"></script>
    <!-- plugin js -->
    <script src="js/plugins.js"></script>
    <!-- select2 js -->
    <script src="js/select2.min.js"></script>    
    <script src="js/colors.js"></script>
    <!-- customSelect Js -->
    <script src="js/jquery-customselect.js"></script>
    <!-- custom js -->
    <script src="js/custom.js"></script>
</body>

</html>
