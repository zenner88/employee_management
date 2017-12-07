<?php include "application/views/dashboard_admin/home/header.php" ?>
<div class="container">
	

	<div class="well">
		<?php echo form_open('master_jabatan/simpan','class="form-horizontal"'); ?>
		  <div class="control-group">
		  	<legend>Master Jabatan</legend>
			<label class="control-label" for="nama_jabatan">Nama Jabatan</label>
			<div class="controls">
			  <input type="text" class="span" name="nama_jabatan" id="nama_jabatan" value="<?php echo $nama_jabatan; ?>" placeholder="Nama Jabatan" disabled>
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
