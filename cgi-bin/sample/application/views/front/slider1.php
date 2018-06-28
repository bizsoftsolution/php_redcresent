   <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,700" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700,800i" rel="stylesheet">
        
        <!-- favicon icon -->
        <!--<link rel="shortcut icon" type="images/png" href="images/favicon.ico">-->
        
		<!-- all css here -->
		<link rel="stylesheet" href="<?php echo base_url('assets/slider/css/style.css');?>">
		<link rel="stylesheet" href="<?php echo base_url('assets/slider/css/bootstrap.min.css');?>">
		<!-- modernizr css -->
        <script src="<?php echo base_url('assets/slider/js/vendor/modernizr-2.8.3.min.js');?>"></script>
		<!--   -->
  
  <section class="slider-area home-1">
                <div class="preview-1">
				<?php 
						foreach($slider as $slider_row)
						{
							
						?>
                    <div id="ensign-nivoslider" class="slides">	
                        <img src="" alt="" title="#slider-direction-1" />
                        <img src="" alt="" title="#slider-direction-2" />
						 <img src="" alt="" title="#slider-direction-3" />
						 <img src="<?php echo base_url()?>upload/<?php echo $slider_row->img_name; ?>"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                    </div>
                    <!-- direction 1 -->
                    <div id="slider-direction-1" class="t-cn slider-direction slider-one">
                        <div class="slider-progress"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 text-right">
                                    <div class="slider-content">
                                        <!-- layer 1 -->
                                        <div class="layer-1-1">
                                            <h2 class="title1 wow bounceInLeft" data-wow-duration="0.5s" data-wow-delay=".8s">WOMEN<span class="h-color">&nbsp;FASHION</span></h2>
                                        </div>
                                        <!-- layer 2 -->
                                        <div class="layer-1-2">
                                            <p class="title2">
                                                <span class="fashion-1 wow bounceInLeft" data-wow-duration="0.5s" data-wow-delay="1s"><i class="fa fa-modx"></i>
                                                </span>
                                            </p>
                                        </div>
                                        <!-- layer 3 -->
                                        <div class="layer-1-3 hidden-xs">
                                            <!--<p class="title3 wow bounceInLeft" data-wow-duration="0.5s" data-wow-delay="1.5s" >Clean and elegant design with a modern style.</p>-->
                                        </div>
                                        <!-- layer 4 -->
                                        <div class="layer-1-4">
                                            <a class="shop-n wow zoomInUp" data-wow-duration="0.5s" data-wow-delay="2s" href="#">shop now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- direction 2 -->
                    <div id="slider-direction-2" class="slider-direction slider-two">
                        <div class="slider-progress"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 text-left">
                                    <div class="slider-content">
                                        <!-- layer 1 -->
                                        <div class="layer-1-1">
                                            <h2 class="title1 wow bounceInRight" data-wow-duration="0.5s" data-wow-delay=".8s">MEN <span class="h-color">FASHION</span></h2>
                                        </div>
                                        <!-- layer 2 -->
                                        <div class="layer-1-2">
                                            <p class="title2">
                                                <span class="fashion-1 fashion-2 wow bounceInRight" data-wow-duration="0.5s" data-wow-delay="1s"><i class="fa fa-modx"></i>
                                                </span>
                                            </p>
                                        </div>
                                        <!-- layer 3 -->
                                        <div class="layer-1-3 layer-2-3 hidden-xs">
                                           <!--  <p class="title3  wow bounceInRight" data-wow-duration="0.5s" data-wow-delay="1.5s" >Clean and elegant design with a modern style.</p> -->
                                        </div>
                                        <!-- layer 4 -->
                                        <div class="layer-2-4">
                                            <a class="shop-n wow zoomInUp" data-wow-duration="0.5s" data-wow-delay="2s" href="#">shop now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
					
					  <div id="slider-direction-3" class="t-cn slider-direction slider-one">
                        <div class="slider-progress"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 text-right">
                                    <div class="slider-content">
                                        <!-- layer 1 -->
                                        <div class="layer-1-1">
                                            <h2 class="title1 wow bounceInLeft" data-wow-duration="0.5s" data-wow-delay=".8s">KIDS  <span class="h-color">FASHION</span></h2>
                                        </div>
                                        <!-- layer 2 -->
                                        <div class="layer-1-2">
                                            <p class="title2">
                                                <span class="fashion-1 wow bounceInLeft" data-wow-duration="0.5s" data-wow-delay="1s"><i class="fa fa-modx"></i>
                                                </span>
                                            </p>
                                        </div>
                                        <!-- layer 3 -->
                                        <div class="layer-1-3 hidden-xs">
                                            <!-- <p class="title3 wow bounceInLeft" data-wow-duration="0.5s" data-wow-delay="1.5s" >Clean and elegant design with a modern style.</p> -->
                                        </div>
                                        <!-- layer 4 -->
                                        <div class="layer-1-4">
                                            <a class="shop-n wow zoomInUp" data-wow-duration="0.5s" data-wow-delay="2s" href="#">shop now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
					<?php
							
						}
					?>
                </div>
            </section>
            <!-- End-slider-->
			
			<!-- all js here -->
		<!-- jquery latest version -->
        <script src="<?php echo base_url('assets/slider/js/vendor/jquery-1.12.0.min.js');?>"></script>
		<!-- bootstrap js -->
        <script src="<?php echo base_url('assets/slider/js/bootstrap.min.js');?>"></script>
		<!-- owl.carousel js -->
        <script src="<?php echo base_url('assets/slider/js/owl.carousel.min.js');?>"></script>
		<!-- meanmenu.js -->
        <script src="<?php echo base_url('assets/slider/js/jquery.meanmenu.js');?>"></script>
		<!-- nivo.slider.js -->
        <script src="<?php echo base_url('assets/slider/lib/js/jquery.nivo.slider.js');?>" type="text/javascript"></script>
        <script src="<?php echo base_url('assets/slider/lib/home.js');?>" type="text/javascript"></script>
		<!-- jquery-ui js -->
        <script src="<?php echo base_url('assets/slider/js/jquery-ui.min.js');?>"></script>
		<!-- scrollUp.min.js -->
        <script src="<?php echo base_url('assets/slider/js/jquery.scrollUp.min.js');?>"></script>
		<!-- jquery.parallax.js -->
        <script src="<?php echo base_url('assets/slider/js/jquery.parallax.js');?>"></script>
		<!-- sticky.js -->
        <script src="<?php echo base_url('assets/slider/js/jquery.sticky.js');?>"></script>
        <!-- jquery.simpleGallery.min.js -->
        <script src="<?php echo base_url('assets/slider/js/jquery.simpleGallery.min.js');?>"></script>
        <script src="<?php echo base_url('assets/slider/js/jquery.simpleLens.min.js');?>"></script>
		<!-- cascade-slider.js -->
        <script src="<?php echo base_url('assets/slider/js/cascade-slider.html');?>"></script>
		<!-- countdown.min.js -->
        <script src="<?php echo base_url('assets/slider/js/jquery.countdown.min.js');?>"></script>
		<!-- wow js -->
        <script src="<?php echo base_url('assets/slider/js/wow.min.js');?>"></script>
		<!-- plugins js -->
        <script src="<?php echo base_url('assets/slider/js/plugins.js');?>"></script>
		<!-- main js -->
        <script src="<?php echo base_url('assets/slider/js/main.js');?>"></script>