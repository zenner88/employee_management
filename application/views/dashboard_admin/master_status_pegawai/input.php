<?php include "application/views/dashboard_admin/home/header.php" ?>
<div class="">
	<div class="container">
    <div class="well">
	<?php if(validation_errors()) { ?>
	<div class="alert alert-block">
	  <button type="button" class="close" data-dismiss="alert">×</button>
	  	<h4>Terjadi Kesalahan!</h4>
		<?php echo validation_errors(); ?>
	</div>
	<?php } ?>
		<?php echo form_open('master_status_pegawai/simpan','class="form-horizontal"'); ?>
		  <div class="control-group">
		  	<legend>Master Status Pegawai</legend>
			<label class="control-label" for="inputEmail">Nama Status</label>
			<div class="controls">
			  <input type="text" class="span" name="nama_status" id="namaStatus" value="<?php echo $nama_status; ?>" placeholder="Nama Status">
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
</div>
<div class="container">
<?php include "application/views/dashboard_admin/home/footer.php" ?>	
</div>
	