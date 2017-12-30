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
		<?php echo form_open_multipart('data_pelatihan/simpan','class="form-horizontal"'); ?>
		  <div class="control-group">
		  	<legend>Data Pelatihan - <?php echo $this->session->userdata("nama_pegawai"); ?></legend>
			<label class="control-label" for="id_master_pelatihan">Nama Pelatihan</label>
			<div class="controls">
			  <select name="id_master_pelatihan" id="id_master_pelatihan" data-placeholder="Nama Pelatihan" class="chzn-select" style="width:300px;" tabindex="2">
			<option value=""></option>
			  	<?php
			  		foreach($mst_pelatihan->result_array() as $mp)
			  		{
			  			if($id_master_pelatihan==$mp['id_pelatihan'])
			  			{
			  	?>
			  		<option value="<?php echo $mp['id_pelatihan']; ?>" selected="selected"><?php echo $mp['nama_pelatihan']; ?></option>
			  	<?php
			  			}
			  			else
			  			{
			  	?>
			  		<option value="<?php echo $mp['id_pelatihan']; ?>"><?php echo $mp['nama_pelatihan']; ?></option>
			  	<?php
			  			}
			  		}
			  	?>
			  </select>
			</div>
		  </div>
		  
		  <div class="control-group">
			<label class="control-label" for="uraian">Uraian</label>
			<div class="controls">
			  <textarea type="text" class="span6" name="uraian" id="uraian"
			  placeholder="Uraian"><?php echo $uraian; ?></textarea>
			</div>
		  </div>
		  
		  <div class="control-group">
			<label class="control-label" for="lokasi">Lokasi</label>
			<div class="controls">
			  <select name="lokasi" id="lokasi" data-placeholder="Lokasi Pelatihan" class="chzn-select" style="width:300px;" tabindex="2">
			<option value=""></option>
			  	<?php
			  		foreach($mst_lokasi->result_array() as $mp)
			  		{
			  			if($lokasi==$mp['id_lokasi_pelatihan'])
			  			{
			  	?>
			  		<option value="<?php echo $mp['id_lokasi_pelatihan']; ?>" selected="selected"><?php echo $mp['nama_lokasi']; ?></option>
			  	<?php
			  			}
			  			else
			  			{
			  	?>
			  		<option value="<?php echo $mp['id_lokasi_pelatihan']; ?>"><?php echo $mp['nama_lokasi']; ?></option>
			  	<?php
			  			}
			  		}
			  	?>
			  </select>
			</div>
		  </div>
		  
		  <div class="control-group">
			<label class="control-label" for="tanggal_sertifikat">Tanggal Sertifikat</label>
			<div class="controls">
				<div class="input-group date" data-provide="datepicker">
	                <input type="text" class="form-control datepicker" name="tanggal_sertifikat" id="tanggal_sertifikat" value="<?php echo $tanggal_sertifikat; ?>" placeholder="Tanggal Sertifikat" style="width: 99%">
	                <div class="input-group-addon">
	                    <span class="glyphicon glyphicon-th"></span>
	                </div>
	            </div>
			</div>
		  </div>
		  
		  <div class="control-group">
			<label class="control-label" for="jam_pelatihan">Jam Pelatihan</label>
			<div class="controls">
			  <input type="text" class="span6" name="jam_pelatihan" id="jam_pelatihan" value="<?php echo $jam_pelatihan; ?>" 
			  placeholder="Jam Pelatihan">
			</div>
		  </div>
		  
		  <div class="control-group">
			<label class="control-label" for="negara">Negara</label>
			<div class="controls">
			  <input type="text" class="span6" name="negara" id="negara" value="<?php echo $negara; ?>" 
			  placeholder="Negara">
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
			<label class="control-label" for="nip">Upload Sertifikat Pelatihan</label>
			<div class="controls">
			<input type="file" class="span6" name="userfile" id="userfile" placeholder="Upload Foto Sertifikat Pelatihan">
			<p><img src="<?php echo base_url(); ?>asset/foto_pelatihan/medium/<?php echo $ft; ?>" /></p>
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
