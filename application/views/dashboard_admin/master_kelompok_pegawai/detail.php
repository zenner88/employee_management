<?php include "application/views/dashboard_admin/home/header.php" ?>
<div class="page-wrapper">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-12">
        <div class="card">
          <div class="card-block">
          <?php echo form_open('master_kelompok_pegawai/simpan','class="form-horizontal"'); ?>
		  <div class="control-group">
		  	<legend>Master Kelompok Pegawai</legend>
			<label class="control-label" for="nama_kelompok_pegawai">Nama Kelompok Pegawai</label>
			<div class="controls">
			  <input type="text" class="span" name="nama_kelompok_pegawai" id="nama_kelompok_pegawai" value="<?php echo $nama_kelompok_pegawai; ?>" placeholder="Nama Kelompok Pegawai" disabled>
			</div>
		  </div>
		<?php echo form_close(); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
	<div class="well">
		
	</div>    
<?php include "application/views/dashboard_admin/home/footer.php" ?>
