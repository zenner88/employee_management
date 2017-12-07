<?php include "application/views/dashboard_admin/home/header.php" ?>
<div class="container">
  <div class="well">
          <?php echo form_open('master_satuan_kerja/simpan','class="form-horizontal"'); ?>
		  <div class="control-group">
		  	<legend>Master Unit Kerja</legend>
			<label class="control-label" for="nama_unit_kerja">Nama Unit Kerja</label>
			<div class="controls">
			  <input type="text" class="span" name="nama_unit_kerja" id="nama_unit_kerja" disabled  value="<?php echo $nama_unit_kerja; ?>" placeholder="Nama Unit Kerja">
			</div>
		  </div>
		  <div class="control-group">
			<label class="control-label" for="parent_unit">Parent Unit</label>
			<div class="controls">
			  <input type="text" class="span" name="parent_unit" id="parent_unit" disabled  value="<?php echo $parent_unit; ?>" placeholder="Parent Unit">
			</div>
		  </div>
		<?php echo form_close(); ?>
          
  </div>
</div> 
<div class="container">
<?php include "application/views/dashboard_admin/home/footer.php" ?>	
</div>   
