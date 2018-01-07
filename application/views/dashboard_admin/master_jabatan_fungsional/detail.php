<?php include "application/views/dashboard_admin/home/header.php" ?>
<div class="container">
  <div class="well">
          <?php echo form_open('master_jabatan_fungsional/simpan','class="form-horizontal"'); ?>
		  <div class="control-group">
		  	<legend>Master Jabatan Fungsional</legend>
			<label class="control-label" for="inputEmail">Nama Jabatan Fungsional</label>
			<div class="controls">
			  <input type="text" id="disabledInput" class="span" name="nama_jabatan_fungsional" id="namaJabatanFungsional" disabled value="<?php echo $nama_jabatan_fungsional; ?>" placeholder="Nama Jabatan Fungsional">
			</div>
		  </div>
		<?php echo form_close(); ?>
  </div>
</div> 
<div class="container">
	<?php include "application/views/dashboard_admin/home/footer.php" ?>	
</div>   

