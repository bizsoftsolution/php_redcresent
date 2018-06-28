     
        <!-- Start Page Banner Section -->
        <section class="breadcrumb-section" style="background-image: url(<?php echo base_url('assets/front-end/images/bg/bk.jpg')?>);background-size: cover;">
		<!--style="background-image: url(assets/images/bg/bg12.jpg);background-size: cover;"-->
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <div class="page-title">
                            <h1 style="color:#fff;">Gallery page</h1>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="breadcrumb">
                          <!--   <ul>
                                <li>You Are Here :</li>
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Portfolio</a></li>
                                <li>Portfolio Col 4 Style 1</li>
                            </ul> -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Page Banner Section -->


         <!-- Start Portfolio Section -->
        <section class="pad-t100 pad-b70">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title text-center">
                            <h3>Gallery</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
					<?php 
						foreach($gallery as $gallery_row)
						{
					?>
					<div class="col-md-4">
						<a style="border:1px solid gray;padding:25% 0;width:250px;height:250px;color:red;font-size:21px;font-weight:bold;" class="btn btn-default" href="<?php echo base_url();?>Front/galleryView/<?php echo $gallery_row->id; ?>">
							<?php echo $gallery_row->categery; ?>
						</a>
					</div>
					<?php 
						}
					?>
           
                </div>
                <!--div class="row">
                    <div class="portfolio-box masonry">
                        <!-- Start Portflio item ->
                        <div class="col-md-3 col-sm-6 business">
                            <div class="portfolio-post mb30">
                                <img src="assets/images/portfolio/portfolio23.jpg" alt="">
                                <div class="hover-box">
                                    <div class="inner-hover">
                                        <div class="middle">
                                            <div class="portfolio-post-btn">
                                                <a href="#" class="link">View</a>
                                            </div>
                                            <h4><a href="#">Another Portfolio 1</a></h4>
                                            <p>Business, Finance</p>
                                            
                                        </div>
                                    </div>                      
                                </div>
                            </div>
                        </div>
                        <!-- End Portflio item -->
                        <!-- Start Portflio item ->
                        <div class="col-md-3 col-sm-6 marketing">
                            <div class="portfolio-post mb30">
                                <img src="assets/images/portfolio/portfolio24.jpg" alt="">
                                <div class="hover-box">
                                    <div class="inner-hover">
                                        <div class="middle">
                                            <div class="portfolio-post-btn">
                                                <a href="#" class="link">View</a>
                                            </div>
                                            <h4><a href="#">Another Portfolio 1</a></h4>
                                            <p>Business, Finance</p>
                                            
                                        </div>
                                    </div>                      
                                </div>
                            </div>
                        </div>
                        <!-- Start Portflio item ->
                        <div class="col-md-3 col-sm-6 finance">
                            <div class="portfolio-post mb30">
                                <img src="assets/images/portfolio/portfolio25.jpg" alt="">
                                <div class="hover-box">
                                    <div class="inner-hover">
                                        <div class="middle">
                                            <div class="portfolio-post-btn">
                                                <a href="#" class="link">View</a>
                                            </div>
                                            <h4><a href="#">Another Portfolio 1</a></h4>
                                            <p>Business, Finance</p>
                                            
                                        </div>
                                    </div>                      
                                </div>
                            </div>
                        </div>
                        <!-- Start Portflio item ->
                        <div class="col-md-3 col-sm-6 business finance">
                            <div class="portfolio-post mb30">
                                <img src="assets/images/portfolio/portfolio26.jpg" alt="">
                                <div class="hover-box">
                                    <div class="inner-hover">
                                        <div class="middle">
                                            <div class="portfolio-post-btn">
                                                <a href="#" class="link">View</a>
                                            </div>
                                            <h4><a href="#">Another Portfolio 1</a></h4>
                                            <p>Business, Finance</p>
                                            
                                        </div>
                                    </div>                      
                                </div>
                            </div>
                        </div>
                        <!-- Start Portflio item ->
                        <div class="col-md-3 col-sm-6 marketing business">
                            <div class="portfolio-post mb30">
                                <img src="assets/images/portfolio/portfolio27.jpg" alt="">
                                <div class="hover-box">
                                    <div class="inner-hover">
                                        <div class="middle">
                                            <div class="portfolio-post-btn">
                                                <a href="#" class="link">View</a>
                                            </div>
                                            <h4><a href="#">Another Portfolio 1</a></h4>
                                            <p>Business, Finance</p>
                                            
                                        </div>
                                    </div>                      
                                </div>
                            </div>
                        </div>
                        <!-- Start Portflio item ->
                        <div class="col-md-3 col-sm-6 marketing finance">
                            <div class="portfolio-post mb30">
                                <img src="assets/images/portfolio/portfolio28.jpg" alt="">
                                <div class="hover-box">
                                    <div class="inner-hover">
                                        <div class="middle">
                                            <div class="portfolio-post-btn">
                                                <a href="#" class="link">View</a>
                                            </div>
                                            <h4><a href="#">Another Portfolio 1</a></h4>
                                            <p>Business, Finance</p>
                                            
                                        </div>
                                    </div>                      
                                </div>
                            </div>
                        </div>
                        <!-- Start Portflio item ->
                        <div class="col-md-3 col-sm-6 marketing finance">
                            <div class="portfolio-post mb30">
                                <img src="assets/images/portfolio/portfolio15.jpg" alt="">
                                <div class="hover-box">
                                    <div class="inner-hover">
                                        <div class="middle">
                                            <div class="portfolio-post-btn">
                                                <a href="#" class="link">View</a>
                                            </div>
                                            <h4><a href="#">Another Portfolio 1</a></h4>
                                            <p>Business, Finance</p>
                                            
                                        </div>
                                    </div>                      
                                </div>
                            </div>
                        </div>
                        <!-- Start Portflio item ->
                        <div class="col-md-3 col-sm-6 marketing finance">
                            <div class="portfolio-post mb30">
                                <img src="assets/images/portfolio/portfolio17.jpg" alt="">
                                <div class="hover-box">
                                    <div class="inner-hover">
                                        <div class="middle">
                                            <div class="portfolio-post-btn">
                                                <a href="#" class="link">View</a>
                                            </div>
                                            <h4><a href="#">Another Portfolio 1</a></h4>
                                            <p>Business, Finance</p>
                                            
                                        </div>
                                    </div>                      
                                </div>
                            </div>
                        </div>
                        <!-- End Portflio item ->

                    </div>
                    
                </div-->
            </div> 
        </section>
        <!-- End Portfolio Section -->


   <div id="back-to-top" class="back-to-top reveal">
            <i class="fa fa-angle-up fa-2x"></i>
        </div>
        

      
        
        

        
     
    