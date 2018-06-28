   <!-- slideshow area start -->
        <div id="rev_slider_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="photography1" style="background-color:transparent;padding:0px;">
            <div id="rev_slider_1" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.0.7">
                <ul>
                    <!-- SLIDE  -->
					<?php 
						foreach($slider as $slider_row)
						{
							
						?>
						<li data-index="rs-1" data-transition="3dcurtain-vertical" data-title="Slide 1">
                        <!-- MAIN IMAGE -->
                        <img src="<?php echo base_url()?>upload/<?php echo $slider_row->img_name; ?>"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                   </li>
					<?php
							
						}
					?>
                    
                
                </ul>
            </div>
        </div> <!--#rev_slider_1_wrapper-->
        <!-- slideshow area end -->
		
	