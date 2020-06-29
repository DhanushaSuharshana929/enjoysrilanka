<?php
include './class/include.php';
$id = '';
$id = $_GET['id'];

$TOUR_PACKAGE = new TourPackage($id);
$TOUR_DATE_PHOTO = new TourDatePhoto($id);
$TOUR_PACKAGES = new TourPackage(NULL);
?>


<!DOCTYPE html>
<html class="no-js" lang="zxx">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="TRABBLE - Tour, Travel, Travel Agency Template">
        <meta name="keywords" content="Tour, Travel, Travel Agency Template">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Trabble - Tour, Travel & Travel Agency Template</title>
        <!-- Google Fonts Includes -->
        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
        <!-- Favi icon -->
        <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
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
        <link href="css/simple-lightbox.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="css/responsive.css">
        <!-- modernizr css -->
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
        
        <?php
        include ("./header.php");
        ?>

        <!-- blog breadcrumb version one strat here -->
        <section class="breadcrumb-blog-version-one">
            <div class="single-bredcurms" style="background-image:url('images/banner/banner.png');">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="bredcrums-content">
                                <h2><?php echo $TOUR_PACKAGE->title; ?></h2>
                                <ul>
                                    <li><a href="index.php">Home</a>
                                    </li>
                                    <li class="active"><a href="#"><?php echo $TOUR_PACKAGE->title; ?></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- blog breadcrumb version one end here -->

        <section class="section-paddings single-package-area">
            <div class="container">
                <div class="row">
                    <!-- single package tab with details -->
                    <div class="col-md-8 col-sm-12" style="margin-bottom: 10px">

                        <?php
                        $TOUR_DATE = new TourDate(NULL);
                        foreach ($TOUR_DATE->getTourDatesById($TOUR_PACKAGE->id) as $tourdate) {
                            ?>

                            <div class="single-package-details">
                                <div class="single-package-title">
                                    <h3><?php echo $tourdate['title']; ?></h3>

                                </div>

                                <div class="blog-content">
                                    <p><strong></strong>
                                    </p>
                                </div>


                            </div> 
                            <div class="tab-content" style="margin-bottom:25px;">

                                <div class="row">
                                    <!-- left content -->


                                    <div class="chosse-packge">


                                        <div class="tour-description">
                                            <?php echo $tourdate['description']; ?>  </div>
                                    </div>
 
                                    <?php
                                    $TOUR_DATE_PHOTO = new TourDatePhoto(NULL);
                                    foreach ($TOUR_DATE_PHOTO->getTourDatePhotosById($tourdate['id']) as $tour_date_photo) {
                                        ?>


                                        <div class="col-md-3">

                                            <div class="single-travel-blog">
                                                <div class="gallery">
                                                    <a href="upload/tour-package/date/gallery/<?php echo $tour_date_photo ['image_name']; ?>" class="big"><img src="upload/tour-package/date/gallery/thumb/<?php echo $tour_date_photo ['image_name']; ?>" alt=""></a>

                                                    <div class="clear"></div>
                                                </div>

                                            </div>

                                        </div> 

                                        <?php
                                    }
                                    ?>

                                </div>


                            </div> 
                            <?php
                        }
                        ?>

                    </div> 



                    <?php
                    foreach ($TOUR_PACKAGES->allToursByType($TOUR_PACKAGE->tour_type) as $tours) {
                        ?>

                        <div class="col-md-4 col-sm-12" >
                            <div class="row " style="margin-bottom: 15px;">
                                <div class="col-md-4">
                                    <img src="upload/tour-package/<?php echo $tours['image_name']; ?>" alt=""  >
                                </div>

                                <div class="col-md-8">
                                    <a href="#"><h4>
                                            <?php echo $tours['title']; ?>
                                        </h4></a>
                                    
                               <?php echo substr($tours['description'],0,60).'..'; ?>
                                </div>

                            </div>




                        </div><!-- booking form end here -->
                        <?php
                    }
                    ?>

                </div>


            </div>
        </section>



        <!-- footer area -->
        <?php
        include ("./footer.php");
        ?>

        <div class="to-top pos-rtive">
            <a href="#"><i class = "fa fa-angle-up"></i></a>
        </div> <!-- Scroll to top jump button end-->

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
        <!-- google map api -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCIW0B_E3g-Yg533xy3yF0WHThi-mFvSNQ"></script>
        <!-- map js -->
        <script src="js/google-map.js"></script>
        <!-- main js -->    
        <script src="js/custom.js"></script>
        <script src="js/simple-lightbox.js" type="text/javascript"></script>
        <script>
            (function () {
                var $gallery = new SimpleLightbox('.gallery a', {});
            })();
        </script>

    </body>

</html>
