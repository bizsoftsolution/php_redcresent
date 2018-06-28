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
            <h2 class="panel-title">Add Quatation</h2>
            <div style="text-align:right;">
               <!--a class="btn bg-violet" href="<?php  echo  base_url();?>Image/deleteQuatation"><i class="glyphicon glyphicon-plus"></i> Add </a-->
               <a href="<?php echo  base_url();?>Image/Quatationlist" class="btn bg-pink"><i class="glyphicon glyphicon-refresh"></i> List</a>
            </div>
            <hr/>
         </div>
         <div class="container-fluid">
            <!-- content Starts Here-->
            <div class="col-md-2"></div>
            <div class="col-md-8">
               <br>
               <!--<?php if($this->session->flashdata('msg')) {
                  echo $this->session->flashdata('msg');
                  } ?>
               <br>
               <?php if($message == "FAILED") { ?>
               <div class="alert alert-danger">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <strong>Action Failed !!! </strong>
               </div>
               <?php } else if($message == "SUCCESS") {  ?>
               <div class="alert alert-success">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <strong>Success !!! </strong> New Group Created successfully
               </div>
               <?php } ?>-->
               <?php //foreach($sliderupdate as $row){?>
			   
				 <form name="add"   method="POST" action="<?php echo  base_url();?>Image/addQuatation/" class="form-horizontal" enctype="multipart/form-data">
				
				  <div class="form-group">
                     <label class="col-lg-3 control-label">File:</label>
                     <div class="col-lg-9">
                        <input type="file" class="file-styled" name="photo">
                        <span class="help-block">Accepted format: pdf. Max file size 2Mb</span>
                     </div>
                  </div>
				  
                  <div style="text-align:center">
                     <input type="submit" name="add_quatation" value="Add" class="btn btn-success">
                     <input type="reset" value="Reset" class="btn btn-danger">
                  </div>
               </form>
               <?php //} ?>
               <br><br>
            </div>
         </div>
      </div>
      <!-- /traffic sources -->
   </div>
</div>
<!-- /dashboard content -->
