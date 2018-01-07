<?php include "application/views/dashboard_admin/home/header.php" ?>
<div class="container">
  <div class="well">
          <?php echo form_open('master_jenis_pegawai/simpan','class="form-horizontal"'); ?>
		  <div class="control-group">
		  	<legend>Master Jenis Pegawai</legend>
			<label class="control-label" for="inputNamaJenisPegawai">Nama Jenis Pegawai</label>
			<div class="controls">
			  <input type="text" id="disabledInput" class="span" name="nama_jenis_pegawai" id="namaJenisPegawai" disabled value="<?php echo $nama_jenis_pegawai; ?>" placeholder="Nama Jenis Pegawai">
			</div>
		  </div>
		<?php echo form_close(); ?>
  </div>
</div> 
<div class="container">
	<?php include "application/views/dashboard_admin/home/footer.php" ?>	
</div>   

