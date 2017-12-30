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
		<?php echo form_open('data_keluarga/simpan','class="form-horizontal"'); ?>
		  <div class="control-group">
		  	<legend>Data Keluarga - <?php echo $this->session->userdata("nama_pegawai"); ?></legend>
			<label class="control-label" for="nama_anggota_keluarga">Nama Anggota Keluarga</label>
			<div class="controls">
			  <input type="text" class="span6" name="nama_anggota_keluarga" id="nama_anggota_keluarga" value="<?php echo $nama_anggota_keluarga; ?>" 
			  placeholder="Nama Anggota Keluarga" disabled>
			</div>
		  </div>
		  
		  <div class="control-group">
			<label class="control-label" for="tanggal_lahir">Tanggal Lahir</label>
			<div class="controls">
			  <input type="text" class="span6" name="tanggal_lahir" id="tanggal_lahir" value="<?php echo $tanggal_lahir; ?>" 
			  placeholder="Tanggal Lahir" disabled>
			</div>
		  </div>
		  
		  <div class="control-group">
			<label class="control-label" for="status_kawin">Status Kawin</label>
			<div class="controls">
			  <input type="text" class="span6" name="status_kawin" id="status_kawin" value="<?php echo $status_kawin; ?>" 
			  placeholder="Status Kawin" disabled>
			</div>
		  </div>
		  
		  <div class="control-group">
			<label class="control-label" for="tanggal_nikah">Tanggal Menikah</label>
			<div class="controls">
			  <input type="text" class="span6" name="tanggal_nikah" id="tanggal_nikah" value="<?php echo $tanggal_nikah; ?>" 
			  placeholder="Tanggal Menikah" disabled>
			</div>
		  </div>
		  
		  <div class="control-group">
			<label class="control-label" for="uraian">Uraian</label>
			<div class="controls">
			  <textarea class="span6" name="uraian" id="uraian" style="resize:none; outline:none; height:100px;" placeholder="Uraian" disabled><?php echo $uraian; ?></textarea>
			</div>
		  </div>
		  
		  <div class="control-group">
			<label class="control-label" for="tanggal_cerai_meninggal">Tanggal Cerai/Meninggal</label>
			<div class="controls">
			  <input type="text" class="span6" name="tanggal_cerai_meninggal" id="tanggal_cerai_meninggal" value="<?php echo $tanggal_cerai_meninggal; ?>" 
			  placeholder="Tanggal Cerai / Meninggal" disabled>
			</div>
		  </div>
		  
		  <div class="control-group">
			<label class="control-label" for="pekerjaan">Pekerjaan</label>
			<div class="controls">
			  <input type="text" class="span6" name="pekerjaan" id="pekerjaan" value="<?php echo $pekerjaan; ?>" 
			  placeholder="Pekerjaan" disabled>
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
			<label class="control-label" for="nip">Foto Keluarga</label>
			<div class="controls">
			<p><img src="<?php echo base_url(); ?>asset/foto_keluarga/medium/<?php echo $ft; ?>" /></p>
			</div>
		</div>
		  
		  <input type="hidden" name="id_param" value="<?php echo $id_param; ?>">
		  <input type="hidden" name="id_pegawai" value="<?php echo $id_pegawai; ?>">
		  <input type="hidden" name="st" value="<?php echo $st; ?>">
		<?php echo form_close(); ?>
	</div>    
</div>
<div class="container">
<?php include "application/views/dashboard_admin/home/footer.php" ?>	
</div> 
