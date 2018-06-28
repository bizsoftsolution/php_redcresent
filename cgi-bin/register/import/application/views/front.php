<!DOCTYPE html>
<html lang="en">

<head>
      <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
      <!--[if IE]>
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <![endif]-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="description" content="">
      <meta name="author" content="ScriptsBundle">
      <title>Register Form</title>
      
      <!-- BOOTSTRAPE STYLESHEET CSS FILES -->
      <link rel="stylesheet" href="<?php echo base_url('assets/front/css/bootstrap.min.css');?>">
      <!-- JQUERY SELECT -->
      <link href="<?php echo base_url('assets/front/css/select2.min.css');?>" rel="stylesheet" />
      <!-- JQUERY MENU -->
      <link rel="stylesheet" href="<?php echo base_url('assets/front/css/bootstrap-dropdownhover.css');?>">
      <!-- ANIMATION -->
      <link rel="stylesheet" href="<?php echo base_url('assets/front/css/animate.min.css');?>">
      <!-- OWl  CAROUSEL-->
      <link rel="stylesheet" href="<?php echo base_url('assets/front/css/owl.carousel.css');?>">
      <link rel="stylesheet" href="<?php echo base_url('assets/front/css/owl.style.css');?>">
      <!-- TEMPLATE CORE CSS -->
      <link rel="stylesheet" href="<?php echo base_url('assets/front/css/style.css');?>">
      <!-- MOBILE MENU CSS -->
      <link href="<?php echo base_url('assets/front/css/meanmenu.min.css" rel="stylesheet');?>">
      <!-- FONT AWESOME -->
      <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/front/css/font-awesome.min.css');?>">
      <link rel="stylesheet" href="<?php echo base_url('assets/front/css/et-line-fonts.css" type="text/css');?>">
      <link rel="stylesheet" type="text/css" href="fonts/classified/flaticon.css">
      <link href="../../../gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
      <!-- Google Fonts -->
      <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,900%7cOpen+Sans:400,600,700" rel="stylesheet" type="text/css"> 
      <!-- Theme Color -->
      <link rel="stylesheet" id="color" href="<?php echo base_url('assets/front/css/colors/defualt.css');?>">
      <!-- For Style Switcher -->
      <link rel="stylesheet" id="theme-color" type="text/css" href="#" />
      <!-- JavaScripts -->
      <script src="<?php echo base_url('assets/front/js/modernizr.js');?>"></script>
      <link rel="stylesheet" href="<?php echo base_url('assets/front/css/dropzone.css');?>">
      <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
   </head>
   <body>
      <div class="page">

         <section class="ad-breadcrumb parallex" style="background-color:#000 !important;">
            <div class="container page-banner">
            	<div class="row">
                   <div class="col-sm-6 col-md-6">
                      <h1>Run Humanity-2017</h1>
                   </div>
                   <div class="col-sm-6 col-md-6">
                      <ol class="breadcrumb pull-right">
                         <li><a href="">Malaysian Red crescent,Klang district </a></li>
                         
                      </ol>
                   </div>
               </div>
            </div>
         </section>
         <section class="post-ad light-blue">
            <div class="container">
               <div class="row">
                  
                  <div class="col-md-8 col-sm-8 col-xs-12 nopadding">
                     <div class="post-ad-box">
                        <div class="col-md-12 col-xs-12 col-sm-12">
                           <div class="heading-inner">
                              <p class="title">Registration Form</p>
                           </div>
                        </div>
                        
                        	<form action="<?php echo base_url('index.php/Front');?>" name="contact" id="contact" method="post" enctype="multipart/form-data">
                         
                          
                           <div class="col-md-12 col-sm-12 col-xs-12 nopadding">
                              <div class="form-group">
                                 <label  class="col-sm-4 col-form-label">Full Name</label>
                                 <div class="col-sm-8">
                                    <input type="text" class="form-control" name="name" placeholder="FULL NAME" value="" required="">
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-12 col-sm-12 col-xs-12 nopadding">
                              <div class="form-group">
                                 <label  class="col-sm-4 col-form-label">Ic/Passport No</label>
                                 <div class="col-sm-8">
                                    <input type="text" class="form-control" name="name1" placeholder="Ic/Passport No" value="" required="">
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-12 col-sm-12 col-xs-12 nopadding">
                              <div class="form-group">
                                 <label  class="col-sm-4 col-form-label">Age</label>
                                 <div class="col-sm-8">
                                    <input type="text" class="form-control" name="name2" placeholder="Age" value="" required="">
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-12 col-sm-12 col-xs-12 nopadding">
                              <div class="form-group">
                                 <label  class="col-sm-4 col-form-label">Sex</label>
                                 <div class="col-sm-8">
                                    <select class="select-general form-control" name="name3">
                                       <option label="Select Option"></option>
                                       <option value="Male">Male</option>
                                       <option value="Female">Female</option>
                                       
                                    </select>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-12 col-sm-12 col-xs-12 nopadding">
                              <div class="form-group">
                                 <label  class="col-sm-4 col-form-label">Nationality</label>
                                 <div class="col-sm-8">
                                    <input type="text" class="form-control" name="name4" placeholder="Nationality" value="" required="">
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-12 col-sm-12 col-xs-12 nopadding">
                              <div class="form-group">
                                 <label  class="col-sm-4 col-form-label">Race</label>
                                 <div class="col-sm-8">
                                    <input type="text" class="form-control" name="name5" placeholder="Race" value="" required="">
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-12 col-sm-12 col-xs-12 nopadding">
                              <div class="form-group">
                                 <label  class="col-sm-4 col-form-label">Date of Birth</label>
                                 <div class="col-sm-8">
                                    <input type="date" class="form-control" name="name6" placeholder="Date of Birth" value="" required="">
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-12 col-sm-12 col-xs-12 nopadding">
                              <div class="form-group">
                                 <label  class="col-sm-4 col-form-label">Contact Number</label>
                                 <div class="col-sm-8">
                                    <input type="text" class="form-control" name="name7" placeholder="Contact Number" value="" required="">
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-12 col-sm-12 col-xs-12 nopadding">
                              <div class="form-group">
                                 <label  class="col-sm-4 col-form-label">Enter valid email</label>
                                 <div class="col-sm-8">
                                    <input type="email" class="form-control" name="name8" placeholder="Enter valid email" value="" required="">
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-12 col-sm-12 col-xs-12 nopadding">
                              <div class="form-group">
                                 <label  class="col-sm-4 col-form-label">Billing address</label>
                                 <div class="col-sm-8">
                                    <input type="text" class="form-control" name="name9" placeholder="Billing address" value="" required="">
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-12 col-sm-12 col-xs-12 nopadding">
                              <div class="form-group">
                                 <label  class="col-sm-4 col-form-label">Postal code</label>
                                 <div class="col-sm-8">
                                    <input type="text" class="form-control" name="name10" placeholder="Postal code" value="" required="">
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-12 col-sm-12 col-xs-12 nopadding">
                              <div class="form-group">
                                 <label  class="col-sm-4 col-form-label">City name</label>
                                 <div class="col-sm-8">
                                    <input type="text" class="form-control" name="name11" placeholder="City name" value="" required="">
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-12 col-sm-12 col-xs-12 nopadding">
                              <div class="form-group">
                                 <label  class="col-sm-4 col-form-label">State</label>
                                 <div class="col-sm-8">
                                    <input type="text" class="form-control" name="name12" placeholder="State" value="" required="">
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-12 col-sm-12 col-xs-12 nopadding">
                              <div class="form-group">
                                 <label  class="col-sm-4 col-form-label">Country</label>
                                 <div class="col-sm-8">
                                    <input type="text" class="form-control" name="name13" placeholder="Country" value="" required="">
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-12 col-sm-12 col-xs-12 nopadding">
                              <div class="form-group">
                                 <label  class="col-sm-4 col-form-label">Payment Method</label>
                                 <div class="col-sm-8">
                                   <div class="radio">
										<label>
										<input type="radio" name="name14" value="Bank Transfer">
										<span class="cr"><i class="cr-icon fa fa-circle"></i></span>
										Bank Transfer
										</label>
                                 </div>
                                 <div class="radio">
                                    <label>
                                    <input type="radio" name="name14" value="Cash">
                                    <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
										Cash
                                    </label>
                                 </div>
                                 </div>
                              </div>
                           </div>
						   <div class="col-md-12 col-sm-12 col-xs-12 nopadding">	
								 <span >Account No : 708106165524 - Standard Chartered (Persatuan Bulan Sabit Merah Chapter Klang) for
							Bank in option, please email your bank in slip to enquiry.rfh@gmail.com by 5th August 2017 to complete your registration,</span>
									<p ><br>Kids Under 6 years old can participate for free. T-shirt, finisher medal and goodie bag will NOT be provided.</p>
							</div>
                           <div class="col-md-12 col-sm-12 col-xs-12 nopadding">
                              <div class="form-group">
                                 <label  class="col-sm-4 col-form-label">School Name</label>
                                 <div class="col-sm-8">
                                    <input type="text" class="form-control" name="name15" placeholder="School name" value="" required="">
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-12 col-sm-12 col-xs-12 nopadding">
                              <div class="form-group">
                                 <label  class="col-sm-4 col-form-label">T-Shirt Size Chart(Adult)</label>
                                 <div class="col-sm-8">
                                     <select class="select-general form-control" name="name16">
                                       <option label="Select Option"></option>
									   <option value="" disabled="disabled" selected="selected" class="disabled">SIZING - CHEST WIDTH</option>
                                      <option value="XS-36">XS-36</option>
										<option value="Consulting">S-38</option>
										<option value="Consulting">M-40</option>
										<option value="Consulting">L-42</option>
										<option value="Consulting">XL-44</option>
										<option value="Consulting">XLL-46</option>
                                    </select>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-12 col-sm-12 col-xs-12 nopadding">
                              <div class="form-group toggle-btn">
                                 <label  class="col-sm-4 col-form-label">T-Shirt Size Chart(Kids)</label>
                                 <div class="col-sm-8">
                                   <select class="select-general form-control" name="name17">
                                       <option label="Select Option"></option>
                                      <option value="" disabled="disabled" selected="selected" class="disabled">SIZING - CHEST WIDTH</option>
									<option value="XS-36">JS-36</option>
									<option value="Consulting">JM-38</option>
									<option value="Consulting">JL-40</option>
									<option value="Consulting">JXL-44</option>
                                    </select>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-12 col-sm-12 col-xs-12 nopadding">
                              <div class="form-group">
                                 <label class="col-sm-4 col-form-label"></label>
                                 <div class="col-sm-8">
                                   <ul>
						<li>
							* All registrations are non refundable and not transferable</li>
						<li>
							* All T-Shirt sizes are only available on the first come first serve basis and while stock last<br></li>
							<li>
							* Terms & Conditions apply</li>
							</ul>
                                 </div>
                              </div>
                           </div>
                          
                           <div class="col-md-12 col-sm-12 col-xs-12">
                              <div class="ad-detail-heading">
                                 <h4>Emergeny Contact</h4>
                              </div>
                           </div>
           
                           <div class="col-md-12 col-sm-12 col-xs-12 nopadding">
                              <div class="form-group">
                                 <label class="col-sm-4 col-form-label">Contact Name</label>
                                 <div class="col-sm-8">
                                    <input type="text" class="form-control" name="name18" placeholder="" value="" required="">
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-12 col-sm-12 col-xs-12 nopadding">
                              <div class="form-group">
                                 <label class="col-sm-4 col-form-label">Contact Number</label>
                                 <div class="col-sm-8">
                                    <input type="text" class="form-control" name="name19" placeholder="Contact Number" value="" required="">
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-12 col-sm-12 col-xs-12 nopadding">
                              <div class="form-group">
                                 <label class="col-sm-4 col-form-label">Relationship</label>
                                 <div class="col-sm-8">
                                    <input type="text" class="form-control" name="name20" placeholder="Relationship" value="" required="">
                                 </div>
                              </div>
                           </div>
                           
                           <div class="col-md-12 col-sm-12 col-xs-12">
                              <div class="ad-detail-heading">
                                 <h4>Upload Payment Info</h4>
                              </div>
                           </div>
                           <div class="col-md-12 col-sm-12 col-xs-12 nopadding">
                              <div class="form-group uploadImages">
                                 <label class="col-sm-4 col-form-label">
                                    Upload Pictures<br>
                                   
                                 </label>
                                 <div class="col-sm-8 col-md-8">
                                    <input type="file" name="file" class="form-control" required=""/>
                                 </div>
                              </div>
                           </div>
                        
                           <div class="col-md-12 col-sm-12 col-xs-12">
                              <div class="ad-detail-heading no-margin-for-text">
                                 <h4> WAIVER CLAUSE </h4>
                              </div>
                              <p class="text-below-heading">In consideration of the organizer accepting this entry, and my registration in the above run, I hereby waive and release any and all rights or claim to the organizers holding the run, their agents, representative, successors, assign and race sponsers for any injuries, death, invalidity and damages i may sustain before, during or after the course of the event or arising as the result of it. I hereby indemnity the organizers and keep them indemnited and waived against all claims or damages that arise in consequence of the above</p>
                           </div>
                           <div class="col-md-12 col-sm-12 col-xs-12 nopadding">
                              <div class="form-group toggle-btn">
                                 <label  class="col-sm-8 col-form-label">I hereby agree and acknowledge the above clause</label>
                                 <div class="col-sm-4">
                                    <input checked data-toggle="toggle" data-on="yes" data-style="slow android" data-onstyle="info" data-off="No" type="checkbox">
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-12 col-sm-12 col-xs-12">
                              <div class="ad-detail-heading">
                                 <h4> Parent's consent for participants under 12 years of ager </h4>
                              </div>
                           </div>
                               <div class="col-md-12 col-sm-12 col-xs-12 nopadding">
                              <div class="form-group">
                                 <label class="col-sm-1 col-form-label">I</label>
                                 <div class="col-sm-4">
                                    <input type="text" class="form-control" name="name21" placeholder="Name Of parent" value="">
                                 </div>
								  <label class="col-sm-3 col-form-label">NRIC/PASSPORT</label>
								   <div class="col-sm-4">
                                    <input type="text" class="form-control" name="name22" placeholder="NRIC/PASSPORT" value="">
                                 </div>
                              </div>
                           </div>
						   <p class="text-below-heading">being the parent/lawful guardian of the above participant hereby consent to his/her participant in the run stated above, have read, understood, and agreed to be bound by the terms and conditions of the event</p>
                           
                           <div class="col-md-12 col-sm-12 col-xs-12 nopadding">
                              <div class="form-group form-action">
                                 <input type="submit" class="btn btn-default btn-search-submit pull-right"/>
                              </div>
                           </div>
                        </form>
                     </div>
                  </div>
                  <div class="col-md-4 col-sm-2 col-xs-12 hidden-xs" id="sticky-ad2">
                     <div class="ad-placement" id="sticky-ads">
                        <a href="#">
                        <img src="<?php echo base_url('assets/front/1.jpeg');?>" alt="ad image" class="img-responsive">
                        </a>
                     </div>
                  </div>
               </div>
            </div>
         </section>
        
      <script type="text/javascript" src="<?php echo base_url('assets/front/js/jquery-3.1.1.min.js');?>"></script> 
      <!-- JQUERY MIGRATE  --> 
      <script type="text/javascript" src="<?php echo base_url('assets/front/js/jquery-migrate-1.2.1.min.js');?>"></script>
         <!-- BOOTSTRAP CORE JS -->
         <script type="text/javascript" src="<?php echo base_url('assets/front/js/bootstrap.min.js');?>"></script>
         <!-- JQUERY SELECT -->
         <script type="text/javascript" src="<?php echo base_url('assets/front/js/select2.min.js');?>"></script>
         <!-- MEGA MENU -->
         <script type="text/javascript" src="<?php echo base_url('assets/front/js/bootstrap-dropdownhover.js');?>"></script>
         <!-- JQUERY EASING -->
         <script type="text/javascript" src="<?php echo base_url('assets/front/js/easing.js');?>"></script>
         <!-- JQUERY COUNTERUP -->
         <script type="text/javascript" src="<?php echo base_url('assets/front/js/counterup.js');?>"></script>
         <!-- JQUERY WAYPOINT -->
         <script type="text/javascript" src="<?php echo base_url('assets/front/js/waypoints.min.js');?>"></script>
         <!-- JQUERY REVEAL -->
         <script type="text/javascript" src="<?php echo base_url('assets/front/js/footer-reveal.min.js');?>"></script>
         <!-- Owl Carousel -->
         <script type="text/javascript" src="<?php echo base_url('assets/front/js/owl-carousel.js');?>"></script>
         <!-- MOBILE MENU JS -->
         <script type="text/javascript" src="<?php echo base_url('assets/front/js/jquery.meanmenu.js');?>"></script>
         <!-- DROPZONE JS -->
         <script src="<?php echo base_url('assets/front/js/dropzone.js');?>"></script>
         <script src="<?php echo base_url('assets/front/js/form-dropzone.js');?>"></script>
         <!--Style Switcher -->
      <script src="<?php echo base_url('assets/front/js/color-switcher.js');?>"></script>
      <!-- CORE JS --> 
      <script type="text/javascript" src="<?php echo base_url('assets/front/js/custom.js');?>"></script>
         <!-- FOR THIS PAGE ONLY -->
         <script src="../../../gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
         <script type="text/javascript">
			/*-- ------- create remove function in dropzone ------ --*/
			  Dropzone.autoDiscover = false;
			var acceptedFileTypes = "image/*"; //dropzone requires this param be a comma separated list
			var fileList = new Array;
			var i = 0;
			$("#upload-ad-images").dropzone({
				addRemoveLinks: true,
				maxFiles: 5, //change limit as per your requirements
				acceptedFiles: '.jpeg,.jpg,.png,.gif',
				dictMaxFilesExceeded: "Maximum upload limit reached",
				acceptedFiles: acceptedFileTypes,
				url: "uploads",
				dictInvalidFileType: "upload only JPG/PNG",
				init: function () {
					// Hack: Add the dropzone class to the element
					$(this.element).addClass("dropzone");
				}
			});
         </script>
         <!-- Stickey Sidebar --> 
         <script type="text/javascript" src="<?php echo base_url('assets/front/js/theia-sticky-sidebar.js');?>"></script> 
         <script>
            $(document).ready(function() {
                $('#sticky-ad')
            .theiaStickySidebar({
            additionalMarginTop: 80
            });
            $('#sticky-ad2')
            .theiaStickySidebar({
            additionalMarginTop: 80
            });
            });
         </script> 
      </div>
   </body>


</html>
