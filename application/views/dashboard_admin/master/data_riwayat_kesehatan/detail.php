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
		<?php echo form_open_multipart('data_riwayat_kesehatan/simpan','class="form-horizontal"'); ?>
		  
		  
		  <div class="control-group">
		  	<legend>Data Riwayat Kesehatan - <?php echo $this->session->userdata("nama_pegawai"); ?></legend>
			<label class="control-label" for="status">Nama Penyakit</label>
			<div class="controls">
			  <input type="text" class="span6" name="nama_penyakit" id="nama_penyakit" value="<?php echo $nama_penyakit; ?>" 
			  placeholder="Nama Penyakit" disabled>
			</div>
		  </div>
		  
		  <div class="control-group">
			<label class="control-label" for="tanggal_riwayat">Tanggal Riwayat Penyakit</label>
			<div class="controls">
			  	<div class="input-group date" data-provide="datepicker">
	                <input type="text" class="form-control datepicker" name="tanggal_riwayat" id="tanggal_riwayat" value="<?php echo $tanggal_riwayat; ?>"  placeholder="Tanggal Mulai" style="width: 99%" disabled>
	                <div class="input-group-addon">
	                    <span class="glyphicon glyphicon-th"></span>
	                </div>
	            </div>
			</div>
		  </div>
		   
		  <div class="control-group">
			<label class="control-label" for="keterangan">Keterangan</label>
			<div class="controls">
			  <textarea class="form-control" name="keterangan" disabled><?php echo $keterangan; ?></textarea>
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
