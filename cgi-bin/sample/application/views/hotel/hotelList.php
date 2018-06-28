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
   <div class="col-lg-12">
      <!-- Traffic sources -->
      <div class="panel panel-flat">
        <div class="panel-heading">
           <h2 class="panel-title">Room Details</h2>
           <div style="text-align:right;">
              <a class="btn bg-purple" href="<?php echo  base_url();?>hotel/newHotel"><i class="glyphicon glyphicon-plus"></i> Add </a>
              <a href="<?php echo  base_url();?>hotel/hotelList" class="btn bg-pink"><i class="glyphicon glyphicon-refresh"></i> List</a>
           </div>
           <hr/>
        </div>
         <table class="table datatable-button-print-columns">
            <thead>
               <tr>

                 <th>Sno</th>
                 <th>Room type</th>
				 <th>Weekdays nube</th>
				 <th>Weekends nube</th>
				 <th>Weekdays public</th>
                 <th>Weekends public</th>     
				 
                 <th style="width:150px;">Action </th>

               </tr>
            </thead>
            <tbody>
            <?php
            $i=1;
              foreach($hotelList as $row) {
            ?>
              <tr>
              <td><?php echo $i; ?></td>
              <td><?php echo $row->room_type;?></td>
			  <td><?php echo $row->week_day_nube;?></td>
              <td><?php echo $row->week_end_nube;?></td>
              <td><?php echo $row->week_day_public;?></td>
			  <td><?php echo $row->week_end_public;?></td>
													   
              <td style="text-align:right">
              <a href="<?php echo base_url(); ?>hotel/editHotel/<?php echo $row->room_id;?>" title="Edit" class="btn bg-success"><i class="glyphicon glyphicon-pencil "></i>
              </a>&nbsp;&nbsp;<a href="<?php echo base_url(); ?>hotel/deleteHotel/<?php echo $row->room_id;?>"  title="Delete" class="btn bg-danger remove" onclick="return confirm('Are You Sure to delete');"><i class="glyphicon glyphicon-remove "></i></a>
              </td>
              </tr>
              <?php $i++;}?>


            </tbody>
         </table>
      </div>
      <!-- /traffic sources -->
   </div>
</div>
<!-- /dashboard content -->