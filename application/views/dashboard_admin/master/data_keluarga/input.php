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
		<?php echo form_open_multipart('data_keluarga/simpan','class="form-horizontal"'); ?>
		  <div class="control-group">
		  	<legend>Data Keluarga - <?php echo $this->session->userdata("nama_pegawai"); ?></legend>
			<label class="control-label" for="nama_anggota_keluarga">Nama Anggota Keluarga</label>
			<div class="controls">
			  <input type="text" class="span6" name="nama_anggota_keluarga" id="nama_anggota_keluarga" value="<?php echo $nama_anggota_keluarga; ?>" 
			  placeholder="Nama Anggota Keluarga">
			</div>
		  </div>
		  
		  <div class="control-group">
			<label class="control-label" for="tanggal_lahir">Tanggal Lahir</label>
			<div class="controls">
				<div class="input-group date" data-provide="datepicker">
	                <input type="text" class="form-control datepicker" name="tanggal_lahir" id="tanggal_lahir" value="<?php echo $tanggal_lahir; ?>" placeholder="Tanggal Lahir" style="width: 99%">
	                <div class="input-group-addon">
	                    <span class="glyphicon glyphicon-th"></span>
	                </div>
	            </div>
	        </div>
		  </div>
		  
		  <div class="control-group">
			<label class="control-label" for="status_kawin">Status Kawin</label>
			<div class="controls">
			  <input type="text" class="span6" name="status_kawin" id="status_kawin" value="<?php echo $status_kawin; ?>" 
			  placeholder="Status Kawin">
			</div>
		  </div>
		  
		  <div class="control-group">
			<label class="control-label" for="tanggal_nikah">Tanggal Menikah</label>
			<div class="controls">
				<div class="input-group date" data-provide="datepicker">
	                <input type="text" class="form-control datepicker" name="tanggal_nikah" id="tanggal_nikah" value="<?php echo $tanggal_nikah; ?>" placeholder="Tanggal Menikah" style="width: 99%">
	                <div class="input-group-addon">
	                    <span class="glyphicon glyphicon-th"></span>
	                </div>
	            </div>
			</div>
		  </div>
		  
		  <div class="control-group">
			<label class="control-label" for="uraian">Uraian</label>
			<div class="controls">
			  <textarea class="span6" name="uraian" id="uraian" style="resize:none; outline:none; height:100px;" placeholder="Uraian"><?php echo $uraian; ?></textarea>
			</div>
		  </div>
		  
		  <div class="control-group">
			<label class="control-label" for="tanggal_cerai_meninggal">Tanggal Cerai/Meninggal</label>
			<div class="controls">
				<div class="input-group date" data-provide="datepicker">
	                <input type="text" class="form-control datepicker" name="tanggal_cerai_meninggal" id="tanggal_cerai_meninggal" value="<?php echo $tanggal_cerai_meninggal; ?>" placeholder="Tanggal Cerai / Meninggal" style="width: 99%">
	                <div class="input-group-addon">
	                    <span class="glyphicon glyphicon-th"></span>
	                </div>
	            </div>
			</div>
		  </div>
		  
		  <div class="control-group">
			<label class="control-label" for="pekerjaan">Pekerjaan</label>
			<div class="controls">
			  <input type="text" class="span6" name="pekerjaan" id="pekerjaan" value="<?php echo $pekerjaan; ?>" 
			  placeholder="Pekerjaan">
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
			<label class="control-label" for="nip">Upload KK</label>
			<div class="controls">
			<input type="file" class="span6" name="userfile" id="userfile" placeholder="Upload Foto KK">
			<p><img src="<?php echo base_url(); ?>asset/foto_keluarga/medium/<?php echo $ft; ?>" /></p>
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
