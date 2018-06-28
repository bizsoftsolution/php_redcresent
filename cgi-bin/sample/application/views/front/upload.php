<link href="<?php echo base_url(); ?>assets/multipleimage_upload/style.css" type="text/css" rel="stylesheet" />
	<script src="<?php echo base_url(); ?>assets/multipleimage_upload/script.js"></script>
	
	 <div class="form-group">
		<label class="control-label col-md-3"><b>Image</b></label>
		<div class="col-md-9">
			<div id="filediv"><input name="file[]" type="file" id="file"/></div>
			<input type="button" id="add_more" class="upload" value="Add More Files"/>
		   <!--input name="file" class="form-control file-styled" type="file" required=""-->
		   <span class="help-block">Accepted formats: gif, png, jpg. Max file size 2Mb</span>
		</div>
	 </div>
	 <div style="text-align:center">
		 <input type="submit" name="submit_divepoint_data" value="Add" class="btn btn-success" id="upload">
		 <input type="reset" value="Reset" class="btn btn-danger">
	  </div>