<footer class="footer-area">
    <div class="container">
        <div class="row">

            <div class="col-md-3 col-sm-6 f-phone-responsive">
                <div class="single-footer">
                    <div class="footer-title">
                        <h3>Quick Contact</h3>
                    </div>
                    <div class="footer-contact-form">
                        <div class="footer-left">

                            <ul class="footer-contact">
                                <li><img class="map" src="images/icon/map.png" alt="">Talpe North Unawatuna</li>
                                <li><img class="map" src="images/icon/phone.png" alt="">+94 777 719 380</li>
                                <li><a href="mailto:office@enjoy-srilanka.com" style="color: white"><img class="map" src="images/icon/gmail.png" alt="">office@enjoy-srilanka.com</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="footer-social-media">

                        <ul class="footer-social-link">
                            <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                            <li class="gplus"><a href="#"><i class="fa fa-google-plus"></i></a>
                            </li>
                            <li class="youtube"><a href="#"><i class="fa fa-youtube-play"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>	<!-- footer contact -->



            <div class="col-md-2 col-sm-6 hidden-sm hidden-xs">
                <div class="single-footer">
                    <div class="single-recent-post">
                        <div class="footer-title">
                            <h3>Our Menu</h3>
                        </div>
                        <ul class="recent-post">
                            <li><a href="about-us.php" style="color: white">About Us</a></li>
                            <li><a href="tours.php?type=1" style="color: white">Day Tours</a></li>
                            <li><a href="tours.php?type=2" style="color: white">Round Tours</a></li>
                            <li><a href="excursions.php" style="color: white">Excursions</a></li>
                            <li><a href="gallery.php" style="color: white">Gallery</a></li>
                            <li><a href="contact-us.php" style="color: white">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>	<!-- footer latest news -->

            <!-- footer destination -->
            <div class="col-md-4 col-sm-6">

                <div class="single-footer">
                    <div class="footer-title gal-title">
                        <h3>Gallery</h3>
                    </div>
                    <div class="row" style="margin-top: 25px;">
                        <?php
                        $ALBUM_PHOTO = new AlbumPhoto(NULL);
                        foreach ($ALBUM_PHOTO->all() as $key => $album_photo) {
                            if ($key < 6) {
                                ?>
                                <div class="col-md-4 col-xs-4" style="margin-bottom: 25px;">

                                    <a href="gallery.php?id=<?php echo $album_photo['image_name']; ?>"> <img src="upload/photo-album/gallery/thumb/<?php echo $album_photo['image_name']; ?>" alt=""></a>
                                </div>
                                <?php
                            }
                        }
                        ?>


                    </div>


                </div>

            </div>	<!-- footer destination -->





            <!-- footer left -->
            <div class="col-md-3 col-sm-6">
                <div class="single-footer">
                    <div class="footer-title">
                        <a href="#"><img src="images/enjoysrilankalogo.png" class="logo_footer" alt="">
                        </a>
                    </div>
                    <div class="footer-left">
                        <div class="footer-logo">
                            <p style="text-align: justify">Enjoy Sri Lanka is one of the best travel company in Sri Lanka. Experience the highlights of Sri Lanka on a round tours and day tours. We will be pleased to arrange tours to the fascinating interior of our country and give you hints about what you can explore.</p>
                        </div>

                    </div>
                </div>
            </div> <!-- footer left -->
        </div>

        <div class="row">
            <div class="footer-bottom">
                <div class="col-md-7">
                    <div class="copyright">
                        <p>@ 2020, All Rights Reserved :  <a href="#"><span>Enjoy Sri Lanka</span></a></p>
                    </div>
                </div>
                <div class="col-md-5">

                    <div class="copyright">
                        <p>Designed & Developed by :  <a href="https://synotec.lk/" target="_blank"><span>Synotec Holdings (Pvt.)Ltd</span></a></p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</footer>