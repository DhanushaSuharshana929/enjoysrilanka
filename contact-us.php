<?php
include './class/include.php';
?>


<!DOCTYPE html>
<html class="no-js" lang="zxx"> 
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="TRABBLE - Tour, Travel, Travel Agency Template">
        <meta name="keywords" content="Tour, Travel, Travel Agency Template">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Enjoy Sri Lanka - Contact Us</title>
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
        <!-- modernizr css -->
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
        <link href="contact-form/style.css" rel="stylesheet" type="text/css"/>

    </head>
    <body>

        <?php
        include ("./header.php");
        ?>
        <!-- header area end here -->

        <!-- blog breadcrumb version one strat here -->
        <section class="breadcrumb-blog-version-one">
            <div class="single-bredcurms" style="background-image:url('images/banner/banner.png');">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="bredcrums-content">
                                <h2>Contact</h2>
                                <ul>
                                    <li><a href="index.php">Home</a></li>
                                    <li class="active"><a href="#">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <section class="section-paddings">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="contact-title">
                            <h2>Our Office</h2>
                        </div>
                        <div class="address">
                            <p>
                                <strong>Address</strong>
                                <br> Talpe North, <br /> Unawatuna <br />  Galle
                            </p>
                            <p>
                                <strong>Website</strong>
                                <br> enjoysrilanka.synotec.lk
                            </p>
                            <p>
                                <strong>Email</strong>
                                <br> office@enjoy-srilanka.com
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="contact-title">
                            <h2>Contact</h2>
                        </div>
                        <div class="contact-form">
                            <div id="contact">  
                                <div id="message"></div> 						
                                <!-- Contact Form -->
                                <form class="form" method="post" action="http://getnajmul.com/theme/trabble/contact.php" name="contactform" id="contactform">
                                    <div class="form-group">
                                        <input type="text" placeholder="Name"  name="txtFullName" id="txtFullName">
                                        <div class="col-md-12">
                                            <span id="spanFullName"></span>
                                        </div>

                                    </div>
                                    <div class="form-group">
                                        <input type="email" placeholder="Email"  name="email" id="txtEmail">
                                        <div class="col-md-12">
                                            <span id="spanEmail"></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" placeholder="Phone Number"  name="subject" id="txtPhone">
                                        <div class="col-md-12">
                                            <span id="spanPhone"></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <textarea name="message" rows="6" placeholder="Message" id="txtMessage"></textarea>
                                        <div class="col-md-12">
                                            <span id="spanMessage"></span>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-5" >
                                            <div class="form-group">
                                                <input type="text" name="SecurityCode" id="captchacode" class="form-control" placeholder="Security Code">
                                                <span id="capspan"></span>
                                            </div>

                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group ">
                                                <?php include './contact-form/captchacode-widget.php'; ?>
                                            </div>
                                        </div>
                                        <div class="col-md-3 p-t-10" style="margin-left: 20px">
                                            <div class="form-group">
                                                <button type="submit" class="button primary" id="btnSubmit"><i class="fa fa-send"></i>Submit</button>
                                            </div>

                                        </div>






                                </form><!--/ End Contact Form -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- google map start  -->
        <iframe src="https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d31688.528606332122!2d79.89150672248927!3d6.882688281689741!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e6!4m3!3m2!1d6.914047999999999!2d79.89493759999999!4m5!1s0x3ae25bd97320a087%3A0xfa4766a56acdd267!2ssynotec!3m2!1d6.8513291999999995!2d79.9171495!5e0!3m2!1sen!2slk!4v1592805031512!5m2!1sen!2slk" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

        <!-- google map end  -->


        <?php
        include ("./footer.php");
        ?>
        <!-- end footer -->

        <div class="to-top pos-rtive">
            <a href="#"><i class = "fa fa-angle-up"></i></a>
        </div>  
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
        <script src="contact-form/scripts.js" type="text/javascript"></script>
    </body>


</html>
