<?php include "application/views/dashboard_admin/home/header.php" ?>
<div class="container">
	

	<div class="well">
	<?php if(validation_errors()) { ?>
	<div class="alert alert-block">
	  <button type="button" class="close" data-dismiss="alert">×</button>
	  	<h4>Terjadi Kesalahan!</h4>
		<?php echo validation_errors(); ?>
	</div>
	<?php } ?>
		<?php echo form_open('master_eselon/simpan','class="form-horizontal"'); ?>
		  <div class="control-group">
		  	<legend>Master Eselon</legend>
			<label class="control-label" for="nama_eselon">Nama Pangkat</label>
			<div class="controls">
			  <input type="text" class="span" name="nama_eselon" id="nama_eselon" value="<?php echo $nama_eselon; ?>" placeholder="Nama Pangkat">
			</div>
		  </div>
		  <div class="control-group">
			<label class="control-label" for="level">Level</label>
			<div class="controls">
			  <input type="text" class="span" name="level" id="level" value="<?php echo $level; ?>" placeholder="Level">
			</div>
		  </div>
		  <input type="hidden" name="id_param" value="<?php echo $id_param; ?>">
		  <input type="hidden" name="st" value="<?php echo $st; ?>">
		  <div class="control-group">
			<div class="controls">
			  <button type="submit" class="btn btn-primary">Simpan Data</button>
			  <button type="reset" class="btn">Hapus Data</button>
			</div>
		  </div>
		<?php echo form_close(); ?>
	</div>    
</div>
<div class="container">
	<?php include "application/views/dashboard_admin/home/footer.php" ?>
</div>
