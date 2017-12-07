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
		<?php echo form_open('master_unit_kerja/simpan','class="form-horizontal"'); ?>
		  <div class="control-group form-group">
		  	<legend>Master Unit Kerja</legend>
			<label class="control-label" for="nama_unit_kerja">Nama Unit Kerja</label>
			<div class="controls">
			  <input type="text" class="span" name="nama_unit_kerja" id="nama_unit_kerja" value="<?php echo $nama_unit_kerja; ?>" placeholder="Nama Unit Kerja">
			</div>
		  </div>
		  <div class="control-group form-group">
			<label class="control-label" for="eselon">Golongan</label>
			<div class="controls">
			  <input type="text" class="span" name="eselon" id="eselon" value="<?php echo $eselon; ?>" placeholder="Golongan">
			</div>
		  </div>
		  <div class="control-group form-group">
			<label class="control-label" for="parent_unit">Parent Unit</label>
			<div class="controls">
			  <input type="text" class="span" name="parent_unit" id="parent_unit" value="<?php echo $parent_unit; ?>" placeholder="Parent Unit">
			</div>
		  </div>
		  <input type="hidden" name="id_param" value="<?php echo $id_param; ?>">
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

