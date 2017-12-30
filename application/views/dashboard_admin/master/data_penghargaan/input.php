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
		<?php echo form_open_multipart('data_penghargaan/simpan','class="form-horizontal"'); ?>
		  <div class="control-group">
		  	<legend>Data Penghargaan - <?php echo $this->session->userdata("nama_pegawai"); ?></legend>
			<label class="control-label" for="id_master_penghargaan">Nama Penghargaan</label>
			<div class="controls">
			  <select name="id_master_penghargaan" id="id_master_penghargaan" data-placeholder="Nama Penghargaan" class="chzn-select" style="width:300px;" tabindex="2">
			<option value=""></option>
			  	<?php
			  		foreach($mst_penghargaan->result_array() as $mp)
			  		{
			  			if($id_master_penghargaan==$mp['id_penghargaan'])
			  			{
			  	?>
			  		<option value="<?php echo $mp['id_penghargaan']; ?>" selected="selected"><?php echo $mp['nama_penghargaan']; ?></option>
			  	<?php
			  			}
			  			else
			  			{
			  	?>
			  		<option value="<?php echo $mp['id_penghargaan']; ?>"><?php echo $mp['nama_penghargaan']; ?></option>
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
			<p><img src="<?php echo base_url(); ?>asset/foto_penghargaan/medium/<?php echo $ft; ?>" /></p>
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