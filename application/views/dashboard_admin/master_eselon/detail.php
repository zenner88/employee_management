<?php include "application/views/dashboard_admin/home/header.php" ?>
<div class="container">
	

	<div class="well">
		<?php echo form_open('master_eselon/simpan','class="form-horizontal"'); ?>
		  <div class="control-group">
		  	<legend>Master Pangkat</legend>
			<label class="control-label" for="nama_eselon">Nama Pangkat</label>
			<div class="controls">
			  <input type="text" class="span" name="nama_eselon" id="nama_eselon" value="<?php echo $nama_eselon; ?>" placeholder="Nama Pangkat" disabled>
			</div>
		  </div>
		  <div class="control-group">
			<label class="control-label" for="level">Level</label>
			<div class="controls">
			  <input type="text" class="span" name="level" id="level" value="<?php echo $level; ?>" placeholder="Level" disabled>
			</div>
		  </div>
		<?php echo form_close(); ?>
	</div>    
</div>
<div class="container">
	<?php include "application/views/dashboard_admin/home/footer.php" ?>
</div>
