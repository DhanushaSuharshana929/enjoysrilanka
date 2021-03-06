<?php
include './class/include.php';
$id = '';
$id = $_GET['type'];
$DAY_TOUR = new TourType($id);
$TOUR_PACKAGE = new TourPackage(NULL);
$TOURS = $TOUR_PACKAGE->allToursByType($id);
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
        <!-- Google Fonts Includes -->
        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
        <!-- Favi icon -->
        <link rel="shortcut icon" type="image/x-icon" href="images/favicon_enjoysrilanka.png">
        <!-- bootstrap v3.3.6 css -->
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

        <section class="breadcrumb-blog-version-one">
            <div class="single-bredcurms" style="background-image:url('images/banner/banner.png');">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-12">
                            <div class="bredcrums-content">
                                <h2>Tour Packages</h2>
                                <ul>
                                    <li><a href="index.php">Home</a></li>
                                    <li  ><a href="#">Tour Packages</a></li>
                                    <li class="active"><a href="#"><?php echo $DAY_TOUR->name ?></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- blog breadcrumb version one end here -->

        <!-- popular destination strat -->
        <section class="blog-contents-version-one pt-100 pb-70 popular-packages">
            <div class="container">
                <div class="row">

                    <?php
                    foreach ($TOURS as $day_tour) {
                        ?>

                        <div class="col-md-4 col-sm-6">
                            <div class="single-package">
                                <div class="package-image">
                                    <a href="view-tour-package.php?id=<?php echo $day_tour['id']?>"><img src="upload/tour-package/<?php echo $day_tour['image_name']; ?>" alt="">
                                    </a>
                                </div>
                                <div class="package-content">
                                    <h3><?php echo $day_tour['title']; ?></h3>
                                    <p><?php echo substr($day_tour['short_description'],0,100).'..'; ?></p>
                                </div>
                                <div class="package-calto-action">
                                    <ul class="ct-action">
                                        <li><a href="view-tour-package.php?id=<?php echo $day_tour['id'] ?>" class="travel-booking-btn hvr-shutter-out-horizontal">View Package</a>
                                        </li>
                                        <li>

                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div><!--end single package -->
                    <?php } ?>


                </div>


            </div>
        </section><!-- single popular destination  end-->

        <!-- footer area -->
        <?php
        include ("./footer.php");
        ?>
        <!-- end footer -->

        <div class="to-top pos-rtive">
            <a href="#"><i class = "fa fa-angle-up"></i></a>
        </div><!--End Scroll to top-->

        <!-- ============================
                JavaScript Files
        ============================= -->
        <!-- jquery latest version -->
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
        <!-- Jquery plugin -->
        <script src="js/plugins.js"></script>
        <!-- select2 js plugin -->
        <script src="js/select2.min.js"></script>    
        <script src="js/colors.js"></script>
        <!-- Jquery plugin -->
        <script src="js/jquery-customselect.js"></script>
        <!-- main js -->
        <script src="js/custom.js"></script>
    </body>

    
</html>
