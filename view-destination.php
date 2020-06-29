<?php
include './class/include.php';
$id = '';
$id = $_GET['id'];

$ATTRACTION = new Attraction($id);
?>

<!DOCTYPE html>
<html class="no-js" lang="zxx">

    <!-- Mirrored from getnajmul.com/theme/trabble/single-package.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 Jun 2020 07:34:12 GMT -->
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
        <link rel="stylesheet" href="css/responsive.css">
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
        <!-- modernizr css -->
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>


        <?php
        include ("./header.php");
        ?><!-- header area end here -->

        <!-- blog breadcrumb version one strat here -->
        <section class="breadcrumb-blog-version-one">
            <div class="single-bredcurms" style="background-image:url('images/banner/banner.png');">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="bredcrums-content">
                                <h2><?php echo $ATTRACTION->title; ?></h2>
                                <ul>
                                    <li><a href="index.php">Home</a>
                                    </li>
                                    <li><a href="#">Destinations</a>
                                    </li>
                                    <li class="active"><a href="#"><?php echo $ATTRACTION->title; ?></a>
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
                    <div class="col-md-8 col-sm-12">

                        <div class="single-package-details">


                            <div class="package-features-image">



                                <div id="myCarousel" class="carousel slide" data-ride="carousel">

                                    <!-- Indicators -->
                                    <ol class="carousel-indicators">
                                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                        <li data-target="#myCarousel" data-slide-to="1"></li>
                                        <li data-target="#myCarousel" data-slide-to="2"></li>
                                    </ol>



                                    <?php
                                    $ATTRACTION_PHOTO = new AttractionPhoto(null);
                                    foreach ($ATTRACTION_PHOTO->getAttractionPhotosById($ATTRACTION->id) as $key => $attraction_photo) {
                                        if ($key == 0) {
                                            ?>

                                            <!-- Wrapper for slides -->
                                            <div class="carousel-inner">
                                                <div class="item active">
                                                    <img src="./upload/attraction/gallery/<?php echo $attraction_photo['image_name']; ?>" alt="" class="img-responsove border-raduis-3">
                                                </div>
                                                <?php
                                            } else {
                                                ?>
                                                <div class="item">
                                                    <img src="./upload/attraction/gallery/<?php echo $attraction_photo['image_name']; ?>" alt="" class="img-responsove border-raduis-3">
                                                </div>
                                                <?php
                                            }
                                        }
                                        ?> 

                                    </div>



                                    <!-- Left and right controls -->
                                    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                                        <span class="glyphicon glyphicon-chevron-left"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="right carousel-control" href="#myCarousel" data-slide="next">
                                        <span class="glyphicon glyphicon-chevron-right"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>


                            </div>

                        </div><!-- tab menu strat -->



                        <!-- tab content start -->
                        <div class="row">
                            <!-- tabs content -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade in active" id="description">
                                    <div class="row">
                                        <!-- left content -->

                                        <div class="col-md-12 col-sm-12">
                                            <div class="tour-description">
                                                <h4><?php echo $ATTRACTION->title ?></h4>
                                                <p><?php echo $ATTRACTION->description ?></p>
                                            </div>

                                        </div><!-- left-content -->


                                    </div>
                                </div>





                                <!-- video tab content start -->


                                <!-- video tab content start -->

                            </div><!-- tabs content-->
                        </div><!-- tab content end -->

                    </div><!-- single package tab with details -->

                    <?php
                    foreach ($ATTRACTION->all() as $attraction) {
                        ?>

                        <div class="col-md-4 col-sm-12">
                            <div class="row " style="margin-bottom: 15px;">
                                <div class="col-md-4">
                                    <img src="./upload/attraction/<?php echo $attraction['image_name']; ?>" alt=""  >
                                </div>

                                <div class="col-md-8">
                                    <a href="view-destination.php?id=<?php echo $attraction['id'] ?>"><h4>
                                            <?php echo $attraction ['title']; ?>
                                        </h4></a>
                                    <?php echo substr($attraction['description'], 0, 55) . '..'; ?>
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
    </body>


</html>
