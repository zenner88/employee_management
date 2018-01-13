<?php include "application/views/dashboard_admin/home/header.php" ?>
<div class="container">
  <div class="well">
          <?php echo form_open('master_pertanyaan/simpan','class="form-horizontal"'); ?>
		  <div class="control-group">
		  	<legend>Master Pertanyaan</legend>
			<label class="control-label" for="inputEmail">Pertanyaan</label>
			<div class="controls">
			  <textarea name="nama_pertanyaan" disabled><?php echo $nama_pertanyaan; ?></textarea>
			</div>
		  </div>
		<?php echo form_close(); ?>
  </div>
</div> 
<div class="container">
	<?php include "application/views/dashboard_admin/home/footer.php" ?>	
</div>   

