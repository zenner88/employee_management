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
		  	<legend>Data Riwayat Pekerjaan - <?php echo $this->session->userdata("nama_pegawai"); ?></legend>
			<label class="control-label" for="status">Nama Perusahaan</label>
			<div class="controls">
			  <input type="text" class="span6" name="nama_perusahaan" id="nama_perusahaan" value="<?php echo $nama_perusahaan; ?>" 
			  placeholder="Nama Perusahaan">
			</div>
		  </div>
		  
		  <div class="control-group">
			<label class="control-label" for="bidang_perusahaan">Bidang Perusahaan</label>
			<div class="controls">
			  <input type="text" class="span6" name="bidang_perusahaan" id="bidang_perusahaan" value="<?php echo $bidang_perusahaan; ?>" 
			  placeholder="Bidang Perusahaan">
			</div>
		  </div>
		  <div class="control-group">
			<label class="control-label" for="jabatan_perusahaan">Jabatan Perusahaan</label>
			<div class="controls">
			  <input type="text" class="span6" name="jabatan_perusahaan" id="jabatan_perusahaan" value="<?php echo $jabatan_perusahaan; ?>" 
			  placeholder="Jabatan Perusahaan">
			</div>
		  </div>
		  
		  <div class="control-group">
			<label class="control-label" for="tanggal_awal_pekerjaan">Tanggal Mulai Bekerja</label>
			<div class="controls">
			  	<div class="input-group date" data-provide="datepicker">
	                <input type="text" class="form-control datepicker" name="tanggal_awal_pekerjaan" id="tanggal_awal_pekerjaan" value="<?php echo $tanggal_awal_pekerjaan; ?>"  placeholder="Tanggal Mulai" style="width: 99%">
	                <div class="input-group-addon">
	                    <span class="glyphicon glyphicon-th"></span>
	                </div>
	            </div>
			</div>
		  </div>
		  
		  <div class="control-group">
			<label class="control-label" for="tanggal_akhir_pekerjaan">Tanggal Selesai Bekerja</label>
			<div class="controls">
				<div class="input-group date" data-provide="datepicker">
	                <input type="text" class="form-control datepicker" name="tanggal_akhir_pekerjaan" id="tanggal_akhir_pekerjaan" value="<?php echo $tanggal_akhir_pekerjaan; ?>"  placeholder="Tanggal Selesai" style="width: 99%">
	                <div class="input-group-addon">
	                    <span class="glyphicon glyphicon-th"></span>
	                </div>
	            </div>
			</div>
		  </div>
		  
		  <div class="control-group">
			<label class="control-label" for="alasan_berhenti">Alasan Berhenti</label>
			<div class="controls">
			  <textarea class="form-control" name="alasan_berhenti"><?php echo $alasan_berhenti; ?></textarea>
			</div>
		  </div> 
		  
		  <input type="hidden" name="id_param" value="<?php echo $id_param; ?>">
		  <input type="hidden" name="id_pegawai" value="<?php echo $id_pegawai; ?>">
		  <input type="hidden" name="st" value="<?php echo $st; ?>">
		  <div class="control-group">
			<div class="controls">
			  <button type="submit" class="btn btn-primary">Simpan Data</button>
			  <button type="reset" class="btn">Hapus Data</button>
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
