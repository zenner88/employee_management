<?php include "application/views/dashboard_admin/home/header.php" ?>
<div class="container">
	

	<div class="well">
		<?php echo form_open('master_golongan/simpan','class="form-horizontal"'); ?>
		<div class="control-group">
		 <legend>Master Golongan</legend>
			<label class="control-label" for="golongan">Golongan</label>
			<div class="controls">
			  <input type="text" class="span" name="golongan" id="golongan" value="<?php echo $golongan; ?>" placeholder="Golongan" disabled>
			</div>
		  </div>
		  <div class="control-group">
			<label class="control-label" for="uraian">Uraian</label>
			<div class="controls">
			  <textarea class="span" name="uraian" id="uraian" style="resize:none; outline:none; height:100px;" placeholder="Uraian" disabled><?php echo $uraian; ?></textarea>
			</div>
		  </div>
		  <div class="control-group">
			<label class="control-label" for="level">Level</label>
			<div class="controls">
			  <input type="text" class="span" name="level" id="level" value="<?php echo $level; ?>" placeholder="Level" disabled>
			</div>
		  </div>
		<?php echo form_close(); ?>
	</div>    
</div>
<div class="container">
<?php include "application/views/dashboard_admin/home/footer.php" ?>  
</div> 
