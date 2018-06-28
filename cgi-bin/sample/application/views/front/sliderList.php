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
           <h2 class="panel-title">Slider List</h2>
           <div style="text-align:right;">
              <a class="btn bg-purple" href="<?php echo  base_url();?>Image/addSlider"><i class="glyphicon glyphicon-plus"></i> Add </a>
              <a href="<?php echo  base_url();?>Image/allslider" class="btn bg-pink"><i class="glyphicon glyphicon-refresh"></i> List</a>
           </div>
           <hr/>
        </div>
         <table class="table datatable-button-print-columns">
            <thead>
               <tr>

                <th>ID</th>
                 <th>Slider</th>
                 <th style="width:150px; margin:0 auto;display:block;">Action </th>

               </tr>
            </thead>
            <tbody>
            <?php
			$i=1;
              foreach($sliderlist as $row) {
            ?>
              <tr>

              <td><?php echo $i; ?></td>
              <td><?php 
					$gallerydata = explode(',', $row->img_name);
					foreach($gallerydata as $galleryRow)
					{
						?>
						<img src="<?php echo base_url();?>upload/<?php echo $galleryRow; ?>" width="70px" height="70px">
					<?php
						//echo '<img src="base_url(upload/images/)'.$galleryRow.' ">';
						//echo $galleryRow." ";
						$i++;
					}
			 ?></td>
              <td style="text-align:right">
              <a href="<?php echo base_url(); ?>Image/updateSlider/<?php echo $row->id;?>" title="Edit" class="btn bg-success"><i class="glyphicon glyphicon-pencil "></i>
              </a>&nbsp;&nbsp;<a href="<?php echo base_url(); ?>Image/delete_slider/<?php echo $row->id;?>"  title="Delete" class="btn bg-danger remove" onclick="return confirm('Are You Sure to delete');"><i class="glyphicon glyphicon-remove "></i></a>
              </td>
              </tr>
              <?php }?>


            </tbody>
         </table>
      </div>
      <!-- /traffic sources -->
   </div>
</div>
<!-- /dashboard content -->
