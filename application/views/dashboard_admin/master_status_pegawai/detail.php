<?php include "application/views/dashboard_admin/home/header.php" ?>
<div class="container">
  <div class="well">
          <?php echo form_open('master_status_pegawai/simpan','class="form-horizontal"'); ?>
		  <div class="control-group">
		  	<legend>Master Status Pegawai</legend>
			<label class="control-label" for="inputEmail">Nama Status</label>
			<div class="controls">
			  <input type="text" id="disabledInput" class="span" name="nama_status" id="namaStatus" disabled value="<?php echo $nama_status; ?>" placeholder="Nama Status">
			</div>
		  </div>
		<?php echo form_close(); ?>
  </div>
</div> 
<div class="container">
	<?php include "application/views/dashboard_admin/home/footer.php" ?>	
</div>   

