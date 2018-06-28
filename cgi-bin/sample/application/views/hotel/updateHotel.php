<div class="content-wrapper">
<!-- Content area -->
<div class="content">
<div class="breadcrumb-line breadcrumb-line-component">
   <a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a>
   <ul class="breadcrumb">
      <li><a href=""><i class="icon-home2 position-left"></i> Home</a></li>
      <li><a href="">Dashboard</a></li>
      <li class="active">Hotel</li>
   </ul>
</div>
<br>
<!-- Main charts -->
<div class="row">
   <div class="col-lg-9">
      <!-- Traffic sources -->
      <div class="panel panel-flat">
         <div class="panel-heading">
            <h2 class="panel-title">Room Details</h2>
            <div style="text-align:right;">
               <a class="btn bg-violet" href="<?php echo  base_url();?>hotel/newHotel"><i class="glyphicon glyphicon-plus"></i> Add </a>
               <a href="<?php echo  base_url();?>hotel/hotelList" class="btn bg-pink"><i class="glyphicon glyphicon-refresh"></i> List</a>
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
                  <strong>Success !!! </strong> Update successfully
               </div>
               <?php } ?>
               <?php foreach($hotel as $row){?>
               <form name="add"   method="POST" action="<?php echo  base_url();?>hotel/editHotel/<?php echo $row->room_id;?>" class="form-horizontal">
                  <div class="form-body">
                     <div class="form-group">
                        <label class="control-label col-md-4">Room type</label>
                        <div class="col-md-8">
                           <input name="room" placeholder="Room Name" class="form-control" type="text" value="<?php echo $row->room_type;?>">
                           <span class="help-block"></span>
                        </div>
                     </div>
					 
				    <div class="form-group">
                        <label class="control-label col-md-4">Weekdays nube</label>
                        <div class="col-md-8">
                           <input name="nubed" placeholder="Room Nam" class="form-control" type="text" value="<?php echo $row->week_day_nube;?>">
                           <span class="help-block"></span>
                        </div>
                     </div>
					 
					 <div class="form-group">
                        <label class="control-label col-md-4">Weekends nube</label>
                        <div class="col-md-8">
                           <input name="nubee" placeholder="Room Name" class="form-control" type="text" value="<?php echo $row->week_end_nube;?>">
                           <span class="help-block"></span>
                        </div>
                     </div>
                  </div>

                     <div class="form-group">
                        <label class="control-label col-md-4">Weekdays public</label>
                        <div class="col-md-8">
                           <input name="wdp" placeholder="Room Name" class="form-control" type="text" value="<?php echo $row->week_day_public;?>">
                           <span class="help-block"></span>
                        </div>
                     </div>
					 
					 <div class="form-group">
                        <label class="control-label col-md-4">Weekends public</label>
                        <div class="col-md-8">
                           <input name="wep" placeholder="Room Name" class="form-control" type="text" value="<?php echo $row->week_end_public;?>">
                           <span class="help-block"></span>
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
   