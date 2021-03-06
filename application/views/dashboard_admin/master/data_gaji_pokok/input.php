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
		<?php echo form_open_multipart('data_gaji_pokok/simpan','class="form-horizontal"'); ?>
		  <div class="control-group">
		  	<legend>Data Gaji Pokok - <?php echo $this->session->userdata("nama_pegawai"); ?></legend>
			<label class="control-label" for="golongan">Golongan</label>
			<div class="controls">
			  <select name="id_golongan" id="id_golongan" data-placeholder="Golongan" class="chzn-select" style="width:300px;" tabindex="2">
			<option value=""></option>
			  	<?php
			  		foreach($golongan->result_array() as $g)
			  		{
			  			if($id_golongan==$g['id_golongan'])
			  			{
			  	?>
			  		<option value="<?php echo $g['id_golongan']; ?>" selected="selected"><?php echo $g['golongan']; ?></option>
			  	<?php
			  			}
			  			else
			  			{
			  	?>
			  		<option value="<?php echo $g['id_golongan']; ?>"><?php echo $g['golongan']; ?></option>
			  	<?php
			  			}
			  		}
			  	?>
			  </select>
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
	                <input type="text" class="form-control datepicker" name="tanggal_sk" id="tanggal_sk" value="<?php echo $tanggal_sk; ?>" placeholder="Tanggal SK" style="width: 99%">
	                <div class="input-group-addon">
	                    <span class="glyphicon glyphicon-th"></span>
	                </div>
	            </div>
			</div>
		  </div>
		  
		  <div class="control-group">
			<label class="control-label" for="dasar_perubahan">Dasar Perubahan</label>
			<div class="controls">
			  <input type="text" class="span6" name="dasar_perubahan" id="dasar_perubahan" value="<?php echo $dasar_perubahan; ?>" 
			  placeholder="Dasar Perubahan">
			</div>
		  </div>
		  
		  <div class="control-group">
			<label class="control-label" for="gaji_pokok">Gaji Pokok</label>
			<div class="controls">
			  <input type="number" class="span6" name="gaji_pokok" id="gaji_pokok" value="<?php echo $gaji_pokok; ?>" 
			  placeholder="Gaji Pokok">
			</div>
		  </div>
		  
		  <div class="control-group">
			<label class="control-label" for="tanggal_mulai">Tanggal Mulai</label>
			<div class="controls">
				<div class="input-group date" data-provide="datepicker">
	                <input type="text" class="form-control datepicker" name="tanggal_mulai" id="tanggal_mulai" value="<?php echo $tanggal_mulai; ?>" placeholder="Tanggal Mulai" style="width: 99%">
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
	                <input type="text" class="form-control datepicker" name="tanggal_selesai" id="tanggal_selesai" value="<?php echo $tanggal_selesai; ?>" placeholder="Tanggal Selesai" style="width: 99%">
	                <div class="input-group-addon">
	                    <span class="glyphicon glyphicon-th"></span>
	                </div>
	            </div>
			</div>
		  </div>
		  
		  <div class="control-group">
			<label class="control-label" for="masa_kerja">Masa Kerja</label>
			<div class="controls">
			  <input type="text" class="span6" name="masa_kerja" id="masa_kerja" value="<?php echo $masa_kerja; ?>" 
			  placeholder="Masa Kerja">
			</div>
		  </div>
		  
		  <div class="control-group">
			<label class="control-label" for="pejabat_menetapkan">Pejabat Menetapkan</label>
			<div class="controls">
			  <input type="text" class="span6" name="pejabat_menetapkan" id="pejabat_menetapkan" value="<?php echo $pejabat_menetapkan; ?>" 
			  placeholder="Pejabat Menetapkan">
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
			<label class="control-label" for="nip">Upload Gaji Pokok</label>
			<div class="controls">
			<input type="file" class="span6" name="userfile" id="userfile" placeholder="Upload Foto Gaji">
			<p><img src="<?php echo base_url(); ?>asset/foto_gaji/medium/<?php echo $ft; ?>" /></p>
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