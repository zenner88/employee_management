<?php include "application/views/dashboard_admin/home/header.php" ?>
<div class="container">
  <div class="well">
		<?php echo form_open('master_lokasi_pelatihan/simpan','class="form-horizontal"'); ?>
		  <div class="control-group">
		  	<legend>Master Lokasi Pelatihan</legend>
			<label class="control-label" for="nama_lokasi">Nama Lokasi Pelatihan</label>
			<div class="controls">
			  <input type="text" class="span" name="nama_lokasi" id="nama_lokasi" value="<?php echo $nama_lokasi; ?>" placeholder="Nama Lokasi Pelatihan" disabled>
			</div>
		  </div>
		<?php echo form_close(); ?>
	</div>
</div> 
<div class="container">
<?php include "application/views/dashboard_admin/home/footer.php" ?>	
</div>   


