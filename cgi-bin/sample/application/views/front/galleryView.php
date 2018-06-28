     
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
						foreach($galleryView as $gallery_row)
						{
							$explode_image = explode(',',$gallery_row->img_name);
							foreach($explode_image as $value)
							{
					?>
					<div class="col-md-4">
						<img src="<?php echo base_url(); ?>upload/images/<?php echo $value; ?>" class="img-responsive" style="width:250px; height:250px;margin: 15px 0;">
					</div>
					<?php 
							}
						}
					?>
           
                </div>
                
            </div> 
        </section>
        <!-- End Portfolio Section -->


   <div id="back-to-top" class="back-to-top reveal">
            <i class="fa fa-angle-up fa-2x"></i>
        </div>