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
		<?php echo form_open_multipart('data_riwayat_jabatan/simpan','class="form-horizontal"'); ?>
		  
		  <div class="control-group">
		  	<legend>Data Riwayat Jabatan - <?php echo $this->session->userdata("nama_pegawai"); ?></legend>
			<label class="control-label" for="status">Status</label>
			<div class="controls">
			  <select data-placeholder="Status Jabatan" class="chzn-select" style="width:500px;" tabindex="2" name="status" id="status">
			<option value=""></option>
			  	<?php
			  		foreach($mst_stts_jabatan->result_array() as $msj)
			  		{
			  			if($status==$msj['id_status_jabatan'])
			  			{
			  	?>
			  		<option value="<?php echo $msj['id_status_jabatan']; ?>" selected="selected"><?php echo $msj['nama_jabatan']; ?></option>
			  	<?php
			  			}
			  			else
			  			{
			  	?>
			  		<option value="<?php echo $msj['id_status_jabatan']; ?>"><?php echo $msj['nama_jabatan']; ?></option>
			  	<?php
			  			}
			  		}
			  	?>
			</select>
			</div>
		  </div>
		  
		  <div class="control-group">
			<label class="control-label" for="penempatan">Penempatan</label>
			<div class="controls">
			  <input type="text" class="span6" name="penempatan" id="penempatan" value="<?php echo $penempatan; ?>" 
			  placeholder="Penempatan">
			</div>
		  </div>
		  
		  <div class="control-group">
			<label class="control-label" for="id_jabatan">Jabatan</label>
			<div class="controls">
			  <select name="id_jabatan" id="id_jabatan" data-placeholder="Jabatan" class="chzn-select" style="width:300px;" tabindex="2">
			<option value=""></option>
			  	<?php
			  		foreach($mst_jabatan->result_array() as $mj)
			  		{
			  			if($id_jabatan==$mj['id_jabatan'])
			  			{
			  	?>
			  		<option value="<?php echo $mj['id_jabatan']; ?>" selected="selected"><?php echo $mj['nama_jabatan']; ?></option>
			  	<?php
			  			}
			  			else
			  			{
			  	?>
			  		<option value="<?php echo $mj['id_jabatan']; ?>"><?php echo $mj['nama_jabatan']; ?></option>
			  	<?php
			  			}
			  		}
			  	?>
			  </select>
			</div>
		  </div>
		  
		  <div class="control-group">
			<label class="control-label" for="id_unit_kerja">Unit Kerja</label>
			<div class="controls">
			  <select name="id_unit_kerja" id="id_unit_kerja" data-placeholder="Unit Kerja" class="chzn-select" style="width:300px;" tabindex="2">
			<option value=""></option>
			  	<?php
			  		foreach($mst_unit_kerja->result_array() as $muk)
			  		{
			  			if($id_unit_kerja==$muk['id_unit_kerja'])
			  			{
			  	?>
			  		<option value="<?php echo $muk['id_unit_kerja']; ?>" selected="selected"><?php echo $muk['nama_unit_kerja']; ?></option>
			  	<?php
			  			}
			  			else
			  			{
			  	?>
			  		<option value="<?php echo $muk['id_unit_kerja']; ?>"><?php echo $muk['nama_unit_kerja']; ?></option>
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
			  <textarea class="span6" name="uraian" id="uraian"
			  placeholder="Uraian"><?php echo $uraian; ?></textarea>
			</div>
		  </div>
		  
		  <div class="control-group">
			<label class="control-label" for="id_eselon">Eselon</label>
			<div class="controls">
			  <select name="id_eselon" id="id_eselon" data-placeholder="Eselon" class="chzn-select" style="width:300px;" tabindex="2">
			<option value=""></option>
			  	<?php
			  		foreach($mst_eselon->result_array() as $me)
			  		{
			  			if($id_eselon==$me['id_eselon'])
			  			{
			  	?>
			  		<option value="<?php echo $me['id_eselon']; ?>" selected="selected"><?php echo $me['nama_eselon']; ?></option>
			  	<?php
			  			}
			  			else
			  			{
			  	?>
			  		<option value="<?php echo $me['id_eselon']; ?>"><?php echo $me['nama_eselon']; ?></option>
			  	<?php
			  			}
			  		}
			  	?>
			  </select>
			</div>
		  </div>
		  
		  <div class="control-group">
			<label class="control-label" for="tmt_eselon">TMT Eselon</label>
			<div class="controls">
			  <input type="text" class="span6" name="tmt_eselon" id="tmt_eselon" value="<?php echo $tmt_eselon; ?>" 
			  placeholder="TMT Eselon">
			</div>
		  </div>
		  
		  <div class="control-group">
			<label class="control-label" for="nomor_sk">Nomor SK</label>
			<div class="controls">
			  <input type="text" class="span6" name="nomor_sk" id="nomor_sk" value="<?php echo $nomor_sk; ?>" 
			  placeholder="Nomor SK">
			</div>
		  </div>
		  
		  <div class="control-group">
			<label class="control-label" for="tanggal_sk">Tanggal SK</label>
			<div class="controls">
				<div class="input-group date" data-provide="datepicker">
	                <input type="text" class="form-control datepicker" name="tanggal_sk" id="tanggal_sk" value="<?php echo $tanggal_sk; ?>" placeholder="Tanggal SK">
	                <div class="input-group-addon">
	                    <span class="glyphicon glyphicon-th"></span>
	                </div>
	            </div>
			</div>
		  </div>
		  
		  <div class="control-group">
			<label class="control-label" for="tanggal_mulai">Tanggal Mulai</label>
			<div class="controls">
				<div class="input-group date" data-provide="datepicker">
	                <input type="text" class="form-control datepicker" name="tanggal_mulai" id="tanggal_mulai" value="<?php echo $tanggal_mulai; ?>" placeholder="Tanggal Mulai">
	                <div class="input-group-addon">
	                    <span class="glyphicon glyphicon-th"></span>
	                </div>
	            </div>
			</div>
		  </div>
		  
		  <div class="control-group">
			<label class="control-label" for="tanggal_selesai">Tanggal Selesai</label>
			<div class="controls">
				<div class="input-group date" data-provide="datepicker">
	                <input type="text" class="form-control datepicker" name="tanggal_selesai" id="tanggal_selesai" value="<?php echo $tanggal_selesai; ?>" placeholder="Tanggal Selesai">
	                <div class="input-group-addon">
	                    <span class="glyphicon glyphicon-th"></span>
	                </div>
	            </div>
			</div>
		  </div>
		  
		  <div class="control-group">
			<label class="control-label" for="lokasi">Lokasi</label>
			<div class="controls">
			  <input type="text" class="span6" name="lokasi" id="lokasi" value="<?php echo $lokasi; ?>" 
			  placeholder="Lokasi">
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
			<label class="control-label" for="nip">Upload Riwayat Jabatan</label>
			<div class="controls">
			<input type="file" class="span6" name="userfile" id="userfile" placeholder="Upload Foto Jabatan">
			<p><img src="<?php echo base_url(); ?>asset/foto_jabatan/medium/<?php echo $ft; ?>" /></p>
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
