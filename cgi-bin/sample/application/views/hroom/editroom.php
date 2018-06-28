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
               <a class="btn bg-violet" href="<?php echo  base_url();?>hroom/addNew"><i class="glyphicon glyphicon-plus"></i> Add </a>
               <a href="<?php echo  base_url();?>hroom/list1" class="btn bg-pink"><i class="glyphicon glyphicon-refresh"></i> List</a>
            </div>
            <hr/>
         </div>
         <div class="container-fluid">
            <!-- content Starts Here-->
            <div class="col-md-2"></div>
            <div class="col-md-8">
               <br>
                      <?php
                                 $i=1;
                                 foreach($room as $row) {
                           ?>  
               <form name="add"   method="POST" action="<?php echo  base_url();?>hroom/editroom/<?php echo $row->id;?>" class="form-horizontal">
                  <div class="form-body">
                     <div class="form-group">
                        <label class="control-label col-md-4">Room type</label>
                        <div class="col-md-8">
              
			       <select name="room1" placeholder="Room type" class="form-control" required="">
                            
							
							<option value="<?php echo $row->id;  ?>"><?php echo $row->room_type;?></option>
							<option>---Select value----------</option>
							<?php
                                 
                                 foreach($select as $row1) {
                           ?>  
							<option value="<?php echo $row1->room_id;  ?>"><?php echo $row1->room_type;?></option>
                           
                         <?php }?>
                           
                       
						</select>   
                           <span class="help-block"></span>
                        </div>
                     </div>
					 
				    <div class="form-group">
                        <label class="control-label col-md-4">Room number</label>
                        <div class="col-md-8">
                          <input name="number1" placeholder="Room number" class="form-control" type="text" value="<?php echo $row->room_no;?>">
                           <span class="help-block"></span>
                        </div>
                     </div>
					
                  </div>
                         <?php $i++;}?>  
               <div style="text-align:center">
                     <input type="submit" name="submit" value="Update" class="btn btn-success">
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
   