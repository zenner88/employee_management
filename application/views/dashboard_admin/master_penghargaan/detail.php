<?php include "application/views/dashboard_admin/home/header.php" ?>
<div class="container">
  <div class="well">
		<?php echo form_open('master_penghargaan/simpan','class="form-horizontal"'); ?>
		  <div class="control-group">
		  	<legend>Master Penghargaan</legend>
			<label class="control-label" for="nama_penghargaan">Nama Penghargaan</label>
			<div class="controls">
			  <input type="text" class="span" name="nama_penghargaan" id="nama_penghargaan" value="<?php echo $nama_penghargaan; ?>" placeholder="Nama Penghargaan" disabled>
			</div>
		  </div>
		<?php echo form_close(); ?>
	</div>
</div> 
<div class="container">
<?php include "application/views/dashboard_admin/home/footer.php" ?>	
</div>   

