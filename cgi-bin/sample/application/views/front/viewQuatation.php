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
           <h2 class="panel-title">Quatation List</h2>
           <!--div style="text-align:right;">
              <a class="btn bg-purple" href="<?php echo  base_url();?>Image/addNew"><i class="glyphicon glyphicon-plus"></i> Add </a>
              <a href="<?php echo  base_url();?>Image/allgallery" class="btn bg-pink"><i class="glyphicon glyphicon-refresh"></i> List</a>
           </div-->
           <hr/>
        </div>
         <table class="table datatable-button-print-columns">
            <thead>
               <tr>

                 <th>S.no</th>
                 <th>Quatation</th>
               
               </tr>
            </thead>
            <tbody>
            <?php
              foreach($quatationList as $row) {
            ?>
              <tr>

              <td><?php echo $row->id;?></td>
              <td>
					
             <a href="<?php echo base_url('upload/quatation');?>/<?php echo $row->img_name; ?>"><?php echo $row->img_name; ?></a>
				 <?php //echo $row->img_name; ?>
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
