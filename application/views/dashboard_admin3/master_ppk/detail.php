
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="<?php echo base_url(); ?>asset/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>asset/css/bootstrap-responsive.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>asset/css/docs.css" rel="stylesheet">
	<style>
		body{
			margin:20px;
			}
	</style>
	
    <script src="<?php echo base_url(); ?>asset/js/jquery-latest.js"></script>
    <script src="<?php echo base_url(); ?>asset/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>asset/js/application.js"></script>
    <script src="<?php echo base_url(); ?>asset/js/bootstrap-tooltip.js"></script>
  </head>

  <body>
	<div class="well">
		<?php echo form_open('master_ppk/simpan','class="form-horizontal"'); ?>
		  <div class="control-group">
		  	<legend>Master Unit Kerja</legend>
			<label class="control-label" for="nama_unit_kerja">Nama PPK</label>
			<div class="controls">
			  <input type="text" class="span" name="nama_unit_kerja" id="nama_unit_kerja" disabled  value="<?php echo $nama_unit_kerja; ?>" placeholder="Nama Unit Kerja">
			</div>
		  </div>
		  <div class="control-group">
			<label class="control-label" for="parent_unit">Parent Satuan Kerja</label>
			<div class="controls">
			  <input type="text" class="span" name="parent_unit" id="parent_unit" disabled  value="<?php echo $parent_unit; ?>" placeholder="Parent Satuan Kerja">
			</div>
		  </div>
		<?php echo form_close(); ?>
	</div>    
	
  </body>
</html>
