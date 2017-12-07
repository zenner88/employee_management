<?php include "application/views/dashboard_admin/home/header.php" ?>
<div class="container">
  <div class="well">
		<?php echo form_open('master_hukuman/simpan','class="form-horizontal"'); ?>
		  <div class="control-group">
		  	<legend>Master Hukuman</legend>
			<label class="control-label" for="nama_hukuman">Nama Hukuman</label>
			<div class="controls">
			  <input type="text" class="span" name="nama_hukuman" id="nama_hukuman" value="<?php echo $nama_hukuman; ?>" placeholder="Nama Hukuman" disabled>
			</div>
		  </div>
		<?php echo form_close(); ?>
	</div>
</div> 
<div class="container">
<?php include "application/views/dashboard_admin/home/footer.php" ?>	
</div>   


