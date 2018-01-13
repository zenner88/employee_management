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
		<?php echo form_open_multipart('data_lain/simpan','class="form-horizontal"'); ?>  
		  <div class="control-group">
		  	<legend>Data Lain - Lain - <?php echo $this->session->userdata("nama_pegawai"); ?></legend>
			<label class="control-label" for="pertanyaan">Pertanyaan</label>
			<div class="controls">
				<select name="id_pertanyaan" class="form-control">
				<option value="">Pilih Pertanyaan</option>
			  	<?php
			  		foreach($pertanyaan->result_array() as $g)
			  		{
			  			if($id_pertanyaan==$g['id_pertanyaan'])
			  			{
			  	?>
			  		<option value="<?php echo $g['id_pertanyaan']; ?>" selected="selected"><?php echo $g['nama_pertanyaan']; ?></option>
			  	<?php
			  			}
			  			else
			  			{
			  	?>
			  		
			  		<option value="<?php echo $g['id_pertanyaan']; ?>"><?php echo $g['nama_pertanyaan']; ?></option>
			  	<?php
			  			}
			  		}
			  	?>
			  </select>	
			</div>
			
		  </div>
		  <div class="control-group">
			<label class="control-label" for="keterangan">Keterangan</label>
			<div class="controls">
			  <textarea name="keterangan" class="form-control"><?php echo $keterangan; ?></textarea>
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
