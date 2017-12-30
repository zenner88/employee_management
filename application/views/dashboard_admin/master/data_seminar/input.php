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
		<?php echo form_open_multipart('data_seminar/simpan','class="form-horizontal"'); ?>
		  <div class="control-group">
		  	<legend>Data Seminar - <?php echo $this->session->userdata("nama_pegawai"); ?></legend>
			<label class="control-label" for="uraian">Uraian</label>
			<div class="controls">
			  <textarea type="text" class="span6" name="uraian" id="uraian"
			  placeholder="Uraian"><?php echo $uraian; ?></textarea>
			</div>
		  </div>
		  
		  <div class="control-group">
			<label class="control-label" for="lokasi">Lokasi</label>
			<div class="controls">
			  <input type="text" class="span6" name="lokasi" id="lokasi" value="<?php echo $lokasi; ?>" 
			  placeholder="Lokasi">
			</div>
		  </div>
		  
		  <div class="control-group">
			<label class="control-label" for="tanggal">Tanggal</label>
			<div class="controls">
			  <div class="input-group date" data-provide="datepicker">
	                <input type="text" class="form-control datepicker" name="tanggal" id="tanggal" value="<?php echo $tanggal; ?>" placeholder="Tanggal" style="width: 99%">
	                <div class="input-group-addon">
	                    <span class="glyphicon glyphicon-th"></span>
	                </div>
	            </div>
			</div>
		  </div>
			
			<?php
				$ft = $foto;
				if($ft=="")
				{
					$ft="no-img.jpg";
				}
			?>
          <div class="control-group">
			<label class="control-label" for="nip">Upload Penghargaan</label>
			<div class="controls">
			<input type="file" class="span6" name="userfile" id="userfile" placeholder="Upload Foto Penghargaan">
			<p><img src="<?php echo base_url(); ?>asset/foto_seminar/medium/<?php echo $ft; ?>" /></p>
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
		<?php echo form_close(); ?>
	</div>    
</div>
<div class="container">
<?php include "application/views/dashboard_admin/home/footer.php" ?>	
</div>
	
