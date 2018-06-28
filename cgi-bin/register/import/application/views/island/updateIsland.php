<div class="content-wrapper">
<!-- Content area -->
<div class="content">
<div class="breadcrumb-line breadcrumb-line-component">
   <a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a>
   <ul class="breadcrumb">
      <li><a href=""><i class="icon-home2 position-left"></i> Home</a></li>
      <li><a href="">Dashboard</a></li>
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
            <h2 class="panel-title">Island Details</h2>
            <div style="text-align:right;">
               <a class="btn bg-violet" href="<?php echo  base_url();?>island/newIsland"><i class="glyphicon glyphicon-plus"></i> Add </a>
               <a href="<?php echo  base_url();?>island/IslandList" class="btn bg-pink"><i class="glyphicon glyphicon-refresh"></i> List</a>
            </div>
            <hr/>
         </div>
         <div class="container-fluid">
            <!-- content Starts Here-->
            <div class="col-md-2"></div>
            <div class="col-md-8">
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
               <?php } ?>
               <?php foreach($island as $row){?>
               <form name="add"   method="POST" action="<?php echo  base_url();?>island/editIsland/<?php echo $row->island_id;?>" class="form-horizontal">

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
                           <input name="name" placeholder="Island Name" class="form-control" type="text" value="<?php echo $row->island_name;?>">
                           <span class="help-block"></span>
                        </div>
                     </div>
                  </div>

                  <div style="text-align:center">
                     <input type="submit" name="submit" value="Update" class="btn btn-success">
                     <input type="reset" value="Reset" class="btn btn-danger">
                  </div>
               </form>
               <?php } ?>
               <br><br>
            </div>
         </div>
      </div>
      <!-- /traffic sources -->
   </div>
</div>
<!-- /dashboard content -->
   