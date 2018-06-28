<div class="content-wrapper">

  <!-- Content area -->
  <div class="content">
    <div class="breadcrumb-line breadcrumb-line-component"><a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a>
			 <ul class="breadcrumb">
					<li><a href=""><i class="icon-home2 position-left"></i> Home</a></li>
					<li><a href="">Dashboard</a></li>
					<li class="active">Run Humanity</li>
				</ul>
    	</div>
      <br>
    <!-- Main charts -->
    <div class="row">
      <div class="col-lg-12">
        <!-- Traffic sources -->

        <div class="panel panel-flat">
          <div class="panel-heading">
            <h6 class="panel-title">Registeration Form</h6>
          </div>
          <div class="container-fluid">

		  
		  <div class="content-wrapper1">
<!-- Content area -->
<div class="content">
<div class="breadcrumb-line breadcrumb-line-component">
   <a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a>
   <ul class="breadcrumb">
      <li><a href=""><i class="icon-home2 position-left"></i> Home</a></li>
      <li><a href="">Dashboard</a></li>
      <li class="active">Run Humanity</li>
   </ul>
</div>
<br>
<!-- Main charts -->
<div class="row">
   <div class="col-lg-12">
      <!-- Traffic sources -->
      <div class="panel panel-flat">
        <div class="panel-heading">
           <h2 class="panel-title">Registered Details</h2>
           
           <hr/>
        </div>
         <table class="table datatable-button-print-columns">
            <thead>
               <tr>

                 <th>Sno</th>
                 <th>Name</th>
                 <th>Ic/Passport No</th>
                 <th>Age</th>
                 <th>Sex</th>
                 <th>Nationality</th>
                 <th>Race</th>
                 <th>Date Of Birth</th>
                 <th>Contact Number</th>
                 <th>Enter Valid Email</th>
                 <th>Billing Address</th>
                 <th>Postal Code</th>
                 <th>city</th>
                 <th>State</th>
                 <th>Country</th>
                 <th>School Name</th>
                 <th>Payment Method</th>
                 <th>T-Shirt Size Chart(Adult)</th>
                 <th>T-Shirt Size Chart(Kids)</th>
                 <th>Emergency Contact Name</th>
                 <th>Emergency Contact NO</th>
                 <th>Emergency Contact Email</th>
                 <th>Photo</th>
                 <th>Parent Name</th>
                 <th>Parent ic/Passport No</th>
                
                
               

               </tr>
            </thead>
            <tbody>
            <?php
            $i=1;
              foreach($countryList as $row) {
            ?>
              <tr>
              <td><?php echo $i; ?></td>
              <td><?php echo $row->full_name; ?></td>
              <td><?php echo $row->ic_passport_no; ?></td>
              <td><?php echo $row->age; ?></td>
              <td><?php echo $row->sex; ?></td>
              <td><?php echo $row->nationality; ?></td>
              <td><?php echo $row->race; ?></td>
              <td><?php echo $row->dob; ?></td>
              <td><?php echo $row->contact_number; ?></td>
              <td><?php echo $row->email_id; ?></td>
              <td><?php echo $row->billing_address; ?></td>
              <td><?php echo $row->post_code; ?></td>
              <td><?php echo $row->city; ?></td>
              <td><?php echo $row->state; ?></td>
              <td><?php echo $row->country; ?></td>
              <td><?php echo $row->payment_method; ?></td>
              <td><?php echo $row->school_name; ?></td>
              <td><?php echo $row->t_shirt_adult; ?></td>
              <td><?php echo $row->t_shirt_kids; ?></td>
              <td><?php echo $row->emergency_contact_name; ?></td>
              <td><?php echo $row->emergency_contact_no; ?></td>
              <td><?php echo $row->emergency_contact_relationship; ?></td>
              <td><img src="<?php echo base_url(); ?>upload/register/<?php echo $row->photo; ?>" width="100px" height="100px;"></td>
              
              <td><?php echo $row->parent_name; ?></td>
              <td><?php echo $row->parent_ic_no; ?></td>
              
             
            
             
              </tr>
              <?php $i++;}?>


            </tbody>
         </table>
      </div>
      <!-- /traffic sources -->
   </div>
</div>
<!-- /dashboard content -->

		  
		  
		  
		  
<!-- content Starts Here-->

          </div>
        </div>
        <!-- /traffic sources -->

      </div>
    </div>
    <!-- /dashboard content -->
