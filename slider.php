<!-- slider area start here -->
<section class="slider-area-2">
            <div class="rev_slider_wrapper">
                <div id="rev_slider_2" class="rev_slider" style="display:none">
                    <!-- BEGIN SLIDES LIST -->
                    <ul>
                        <?php
            $SLIDER = new Slider(null);
            foreach ($SLIDER ->all()as $slider){
        
                ?>
                        
                        <!-- slider one start -->
                        <li data-transition="zoomout" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000"  data-thumb="images/slider/slider-back-02.jpg"  data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off"  data-title="Intro" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                            <!-- MAIN IMAGE -->
                            <img src="upload/slider/<?php echo $slider['image_name']; ?>"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                            <!-- LAYERS -->
                            <!-- BEGIN BASIC TEXT LAYER -->
                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption sfr font-extra-bold tp-resizeme letter-space-4 title-line-12" data-x="['center', 'center', 'center', 'center']" data-hoffset="0" data-y="center" data-voffset="-50" data-frames='[{"delay":0,"speed":3000,"frame":"0","from":"x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;","mask":"x:[-100%];y:0;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]' style="z-index: 6; color:#fff; text-transform:uppercase; font-family:'Poppins', sans-serif; white-space: nowrap; font-weight:400;">
                                <h2 style="font-size:60px;"></h2>
                            </div>

                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption sfr font-extra-bold tp-resizeme letter-space-4 title-line-2" data-x="center" data-hoffset="0" data-y="center" data-voffset="10" data-frames='[{"delay":1000,"speed":3000,"frame":"0","from":"x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;","mask":"x:[-100%];y:0;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]' style="z-index: 6; font-size:20px; color:#fff; text-transform:capitalize; font-family:'Poppins', sans-serif; white-space: nowrap; font-weight:400; line-height: 50px !important;">
                                
                            </div>

                            <!-- LAYER NR. 3 -->
                            
                        </li>
                        <!-- end slider one -->
<?php } ?>
                        
                    </ul> <!-- END SLIDES LIST -->
                </div> <!-- END SLIDER CONTAINER -->
            </div> <!-- END SLIDER CONTAINER WRAPPER -->
        </section> <!-- slider area end here -->