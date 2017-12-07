<?php include "application/views/dashboard_admin/home/header.php" ?>
<div class="page-wrapper">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-12">
        <div class="card">
          <div class="card-block">
          <?php if(validation_errors()) { ?>
	<div class="alert alert-block">
	  <button type="button" class="close" data-dismiss="alert">×</button>
	  	<h4>Terjadi Kesalahan!</h4>
		<?php echo validation_errors(); ?>
	</div>
	<?php } ?>
		<?php echo form_open('master_kelompok_pegawai/simpan','class="form-horizontal"'); ?>
		  <div class="control-group form-group">
		  	<legend>Master Kelompok Pegawai</legend>
			<label class="control-label" for="nama_kelompok_pegawai">Nama Kelompok Pegawai</label>
			<div class="controls">
			  <input type="text" class="span" name="nama_kelompok_pegawai" id="nama_kelompok_pegawai" value="<?php echo $nama_kelompok_pegawai; ?>" placeholder="Nama Kelompok Pegawai">
			</div>
		  </div>
		  <input type="hidden" name="id_param" value="<?php echo $id_param; ?>">
		  <input type="hidden" name="st" value="<?php echo $st; ?>">
		  <div class="control-group form-group">
			<div class="controls">
			  <button type="submit" class="btn btn-primary">Simpan Data</button>
			  <button type="reset" class="btn">Hapus Data</button>
			</div>
		  </div>
		<?php echo form_close(); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>  
<?php include "application/views/dashboard_admin/home/footer.php" ?>

