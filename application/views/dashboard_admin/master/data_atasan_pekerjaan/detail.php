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
		<?php echo form_open_multipart('data_riwayat_pekerjaan/simpan','class="form-horizontal"'); ?>
		  
		  
		  <div class="control-group">
		  	<legend>Data Atasan Pekerjaan - <?php echo $this->session->userdata("nama_pegawai"); ?></legend>
			<label class="control-label" for="status">Nama</label>
			<div class="controls">
			  <input type="text" class="span6" name="nama_atasan_pekerjaan" id="nama_atasan_pekerjaan" value="<?php echo $nama_atasan_pekerjaan; ?>" 
			  placeholder="Nama Perusahaan" disabled>
			</div>
		  </div>
		  
		  <div class="control-group">
			<label class="control-label" for="jabatan_atasan_pekerjaan">Jabatan</label>
			<div class="controls">
			  <input type="text" class="span6" name="jabatan_atasan_pekerjaan" id="jabatan_atasan_pekerjaan" value="<?php echo $jabatan_atasan_pekerjaan; ?>" 
			  placeholder="Jabatan Perusahaan" disabled>
			</div>
		  </div>
		  <div class="control-group">
			<label class="control-label" for="perusahaan_atasan_pekerjaan">Perusahaan</label>
			<div class="controls">
			  <input type="text" class="span6" name="perusahaan_atasan_pekerjaan" id="perusahaan_atasan_pekerjaan" value="<?php echo $perusahaan_atasan_pekerjaan; ?>" 
			  placeholder="Perusahaan" disabled>
			</div>
		  </div>
		  <div class="control-group">
			<label class="control-label" for="nomor_telepon_pekerjaan">No Telepon</label>
			<div class="controls">
			  <input type="text" class="span6" name="nomor_telepon_pekerjaan" id="nomor_telepon_pekerjaan" value="<?php echo $nomor_telepon_pekerjaan; ?>" 
			  placeholder="Nomor Telepon" disabled>
			</div>
		  </div>
		   
		  <input type="hidden" name="id_param" value="<?php echo $id_param; ?>">
		  <input type="hidden" name="id_pegawai" value="<?php echo $id_pegawai; ?>">
		  <input type="hidden" name="st" value="<?php echo $st; ?>">
		  <div class="control-group">
			<div class="controls">
			  <button type="submit" class="btn btn-primary" disabled>Simpan Data</button>
			  <button type="reset" class="btn" disabled>Hapus Data</button>
			</div>
		  </div>
		  <script src="http://localhost/sgmc/asset/js/chosen.jquery.js" type="text/javascript"></script>
			<script type="text/javascript"> 
				$(".chzn-select").chosen();
			</script>
		<?php echo form_close(); ?>
	</div>    
</div>
<div class="container">
<?php include "application/views/dashboard_admin/home/footer.php" ?>	
</div> 
