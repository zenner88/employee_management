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
		<?php echo form_open_multipart('data_referensi/simpan','class="form-horizontal"'); ?>  
		  <div class="control-group">
		  	<legend>Data Riwayat Referensi - <?php echo $this->session->userdata("nama_pegawai"); ?></legend>
			<label class="control-label" for="nama_referensi">Nama </label>
			<div class="controls">
			  <input type="text" class="span6" name="nama_referensi" id="nama_referensi" value="<?php echo $nama_referensi; ?>" 
			  placeholder="Bidang Perusahaan" disabled>
			</div>
		  </div>
		  <div class="control-group">
			<label class="control-label" for="jabatan_referensi">Jabatan</label>
			<div class="controls">
			  <input type="text" class="span6" name="jabatan_referensi" id="jabatan_referensi" value="<?php echo $jabatan_referensi; ?>" 
			  placeholder="Jabatan Perusahaan" disabled>
			</div>
		  </div>
		  <div class="control-group">
			<label class="control-label" for="hubungan_referensi">Hubungan</label>
			<div class="controls">
			  <input type="text" class="span6" name="hubungan_referensi" id="hubungan_referensi" value="<?php echo $hubungan_referensi; ?>" 
			  placeholder="Jabatan Perusahaan" disabled>
			</div>
		  </div>
		  <div class="control-group">
			<label class="control-label" for="no_telepon_referensi">No Telepon</label>
			<div class="controls">
			  <input type="text" class="span6" name="no_telepon_referensi" id="no_telepon_referensi" value="<?php echo $no_telepon_referensi; ?>" 
			  placeholder="Jabatan Perusahaan" disabled>
			</div>
		  </div>
		  <div class="control-group">
			<label class="control-label" for="perusahaan_referensi">Perusahaan</label>
			<div class="controls">
			  <input type="text" class="span6" name="perusahaan_referensi" id="perusahaan_referensi" value="<?php echo $perusahaan_referensi; ?>" 
			  placeholder="Jabatan Perusahaan" disabled>
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
