<div class="content-wrapper">
<!-- Content area -->
<div class="content">
<div class="breadcrumb-line breadcrumb-line-component">
   <a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a>
   <ul class="breadcrumb">
      <li><a href=""><i class="icon-home2 position-left"></i> Home</a></li>
      <li><a href="<?php echo base_url();?>Dashboard">Dashboard</a></li>
      <li class="active">Island</li>
   </ul>
</div>
<br>
<!-- Main charts -->
<div class="row">
   <div class="col-lg-9">
      <!-- Traffic sources -->
      <div class="panel panel-flat">
         <div class="panel-heading">
            <h2 class="panel-title">Island Master</h2>
            <div style="text-align:right;">
               <a class="btn bg-violet" href="<?php echo  base_url();?>island/newIsland"><i class="glyphicon glyphicon-plus"></i> Add </a>
               <a href="<?php echo  base_url();?>island/islandList" class="btn bg-pink"><i class="glyphicon glyphicon-refresh"></i> List</a>
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
                  <strong>Success !!! </strong> New Island Created successfully
               </div>
               <?php } ?>
               <form name="add"   method="POST" action="<?php echo  base_url();?>island/newIsland" class="form-horizontal form-validate-jquery">
                  <div class="form-body">
                     <div class="form-group">
                        <label class="control-label col-md-3">Country Name</label>
                        <div class="col-md-9">
                           <select class="form-control" name="country_id">
                              <option>--Select Country--</option>
                              <?php
                              foreach ($countryList as $country) {
                                 ?>
                                 <option value="<?php echo $country->country_id;?>"><?php echo $country->country_name ;?></option>
                              <?php
                              }
                              ?>
                           </select>
                           <span class="help-block"></span>
                        </div>
                     </div>
                  </div>
                  <div class="form-body">
                     <div class="form-group">
                        <label class="control-label col-md-3">Island Name</label>
                        <div class="col-md-9">
                           <input name="name" placeholder="Island Name" class="form-control" type="text" required="">
                           <span class="help-block"></span>
                        </div>
                     </div>
                  </div>

                  <div style="text-align:center">
                     <input type="submit" name="submit" value="Add" class="btn btn-success">
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
