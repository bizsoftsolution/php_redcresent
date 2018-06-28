<link href="<?php echo base_url(); ?>assets/multipleimage_upload/style.css" type="text/css" rel="stylesheet" />
	<script src="<?php echo base_url(); ?>assets/multipleimage_upload/script.js"></script>
  
<div class="content-wrapper">
<!-- Content area -->
<div class="content">
<!--div class="breadcrumb-line breadcrumb-line-component">
   <a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a>
   <ul class="breadcrumb">
      <li><a href=""><i class="icon-home2 position-left"></i> Home</a></li>
      <li><a href="">Dashboard</a></li>
      <li class="active">Basic inputs</li>
   </ul>
</div-->
<br>
<!-- Main charts -->
<div class="row">
   <div class="col-lg-12">
      <!-- Traffic sources -->
      <div class="panel panel-flat">
         <div class="panel-heading">
            <h2 class="panel-title">Image Upload</h2>
            <div style="text-align:right;">
               <!--a class="btn bg-violet" href="<?php echo  base_url();?>employee/add"><i class="glyphicon glyphicon-plus"></i> Add </a-->
               <a href="<?php echo  base_url();?>Image/allgallery" class="btn bg-pink"><i class="glyphicon glyphicon-refresh"></i> List</a>
            </div>
            <hr/>
         </div>
         <div class="container-fluid">
            <!-- content Starts Here-->
            <div class="col-md-2"></div>
            <div class="col-md-8">
               <br>
               <br>
			   
               <?php if($message == "FAILED") { ?>
               <div class="alert alert-danger">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <strong>Action Failed !!! </strong>
               </div>
               <?php } else if($message == "SUCCESS") {  ?>
               <div class="alert alert-success">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <strong>Success !!! </strong> New image Created successfully
               </div>
               <?php } ?>
               <form name="add"   method="POST" action="<?php echo  base_url();?>Image/addNew" class="form-horizontal form-validate-jquery" enctype="multipart/form-data">
					<div class="form-group">
                        <label class="control-label col-md-3">Category</label>
                        <div class="col-md-9">
                           <input name="category_name" placeholder="" class="form-control" type="text">
                           <span class="help-block"></span>
                        </div>
                     </div>
                  <div class="form-group">
						<label class="control-label col-md-3"><b>Image</b></label>
						<div class="col-md-9">
							<div id="filediv"><input name="file[]" type="file" id="file"/></div>
							<input type="button" id="add_more" class="upload" value="Add More Files"/>
						   <!--input name="file" class="form-control file-styled" type="file" required=""-->
						   <span class="help-block">Accepted formats: jpg only. Max file size 2Mb</span>
						</div>
					 </div>
                 <div style="text-align:center">
					 <input type="submit" name="submit_image_data" value="Add" class="btn btn-success" id="upload">
					 <input type="reset" value="Reset" class="btn btn-danger">
				  </div>
               </form>

               <br><br>
            </div>
         </div>
      </div>
      <!-- /traffic sources -->
   </div>
</div>
<!-- /dashboard content -->
