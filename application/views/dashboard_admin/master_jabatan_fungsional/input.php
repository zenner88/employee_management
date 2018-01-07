<?php include "application/views/dashboard_admin/home/header.php" ?>
<div class="">
	<div class="container">
    <div class="well">
	<?php if(validation_errors()) { ?>
	<div class="alert alert-block">
	  <button type="button" class="close" data-dismiss="alert">×</button>
	  	<h4>Terjadi Kesalahan!</h4>
		<?php echo validation_errors(); ?>
	</div>
	<?php } ?>
		<?php echo form_open('master_jabatan_fungsional/simpan','class="form-horizontal"'); ?>
			<div class="control-group">
				<legend>Master Jabatan Fungsional</legend>
		                                <label class="control-label" for="id_jenis_pegawai">Jenis Pegawai</label>
		                                <div class="controls">
		                                    <select data-placeholder="Jenis Pegawai" class="chzn-select" style="width:500px;" tabindex="2" name="id_jenis_pegawai" id="id_jenis_pegawai">
		                                        <option value=""></option>
		                                        <?php
								foreach($jenis_pegawai->result_array() as $jp)
								{
									if($jp['id_jenis_pegawai']==$id_jenis_pegawai)
									{
							?>
		                                            <option value="<?php echo $jp['id_jenis_pegawai']; ?>" selected="selected">
		                                                <?php echo $jp['nama_jenis_pegawai']; ?>
		                                            </option>
		                                            <?php
									}
									else
									{
							?>
		                                            <option value="<?php echo $jp['id_jenis_pegawai']; ?>">
		                                                <?php echo $jp['nama_jenis_pegawai']; ?>
		                                            </option>
		                                            <?php
									}
								}
							?>
		                                    </select>
		                                </div>
		                            </div>
		  <div class="control-group">
		  	
			<label class="control-label" for="inputEmail">Nama Jabatan Fungsional</label>
			<div class="controls">
			  <input type="text" class="span" name="nama_jabatan_fungsional" id="namaJabatanFungsional" value="<?php echo $nama_jabatan_fungsional; ?>" placeholder="Nama Jabatan Fungsional">
			</div>
		  </div>
		  <input type="hidden" name="id_param" value="<?php echo $id_param; ?>">
		  <input type="hidden" name="st" value="<?php echo $st; ?>">
		  <div class="control-group">
			<div class="controls">
			  <button type="submit" class="btn btn-primary">Simpan Data</button>
			  <button type="reset" class="btn">Batal</button>
			</div>
		  </div>
		<?php echo form_close(); ?>
	</div>    
    </div>
</div>
<div class="container">
<?php include "application/views/dashboard_admin/home/footer.php" ?>	
</div>
	