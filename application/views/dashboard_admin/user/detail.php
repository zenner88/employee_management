<?php include "application/views/dashboard_admin/home/header.php" ?>
<div class="container">
  <div class="well">
	<?php echo $this->session->flashdata('pass'); ?>
	<?php if(validation_errors()) { ?>
	<div class="alert alert-block">
	  <button type="button" class="close" data-dismiss="alert">×</button>
	  	<h4>Terjadi Kesalahan!</h4>
		<?php echo validation_errors(); ?>
	</div>
	<?php } ?>
		<?php echo form_open('manage_user/simpan','class="form-horizontal"'); ?>
		  <div class="control-group">
		  	<legend>Manajemen User</legend>
			<label class="control-label" for="nama_unit_kerja">Nama Pengguna</label>
			<div class="controls">
			  <input type="text" class="span" name="nama_lengkap" id="nama_lengkap" value="<?php echo $nama_lengkap; ?>" readonly="true" placeholder="Nama Pengguna">
			</div>
		  </div>
		  <div class="control-group">
			<label class="control-label" for="eselon">Username</label>
			<div class="controls">
			  <input type="text" class="span" name="username" id="username" value="<?php echo $username; ?>" readonly="true" placeholder="Username">
			</div>
		  </div>
		  <input type="hidden" name="id_param" value="<?php echo $id_param; ?>">
		  <input type="hidden" name="default_username" value="<?php echo $username; ?>">
		  <input type="hidden" name="st" value="<?php echo $st; ?>">
		<?php echo form_close(); ?>
	</div>
</div>   
<div class="container">
<?php include "application/views/dashboard_admin/home/footer.php" ?>	
</div> 

