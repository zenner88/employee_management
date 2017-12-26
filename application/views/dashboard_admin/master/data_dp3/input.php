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
		<?php echo form_open('data_dp3/simpan','class="form-horizontal"'); ?>
		  <div class="control-group">
		  	<legend>Data Penilaian Atasan - <?php echo $this->session->userdata("nama_pegawai"); ?></legend>
			<label class="control-label" for="tahun">Tahun</label>
			<div class="controls">
			  <input type="text" class="span6" name="tahun" id="tahun" value="<?php echo $tahun; ?>" 
			  placeholder="Tahun">
			</div>
		  </div>
		  
		  <div class="control-group">
			<label class="control-label" for="kesetiaan">Kesetiaan</label>
			<div class="controls">
			  <input type="text" class="span6" name="kesetiaan" id="kesetiaan" value="<?php echo $kesetiaan; ?>" 
			  placeholder="Kesetiaan">
			</div>
		  </div>
		  
		  <div class="control-group">
			<label class="control-label" for="prestasi">Prestasi</label>
			<div class="controls">
			  <input type="text" class="span6" name="prestasi" id="prestasi" value="<?php echo $prestasi; ?>" 
			  placeholder="Prestasi">
			</div>
		  </div>
		  
		  <div class="control-group">
			<label class="control-label" for="tanggung_jawab">Tanggung Jawab</label>
			<div class="controls">
			  <input type="text" class="span6" name="tanggung_jawab" id="tanggung_jawab" value="<?php echo $tanggung_jawab; ?>" 
			  placeholder="Tanggung Jawab">
			</div>
		  </div>
		  
		  <div class="control-group">
			<label class="control-label" for="ketaatan">Ketaatan</label>
			<div class="controls">
			  <input type="text" class="span6" name="ketaatan" id="ketaatan" value="<?php echo $ketaatan; ?>" 
			  placeholder="Ketaatan">
			</div>
		  </div>
		  
		  <div class="control-group">
			<label class="control-label" for="kejujuran">Kejujuran</label>
			<div class="controls">
			  <input type="text" class="span6" name="kejujuran" id="kejujuran" value="<?php echo $kejujuran; ?>" 
			  placeholder="Kejujuran">
			</div>
		  </div>
		  
		  <div class="control-group">
			<label class="control-label" for="kerjasama">Kerja Sama</label>
			<div class="controls">
			  <input type="text" class="span6" name="kerjasama" id="kerjasama" value="<?php echo $kerjasama; ?>" 
			  placeholder="Kerja Sama">
			</div>
		  </div>
		  
		  <div class="control-group">
			<label class="control-label" for="prakarsa">Prakarsa</label>
			<div class="controls">
			  <input type="text" class="span6" name="prakarsa" id="prakarsa" value="<?php echo $prakarsa; ?>" 
			  placeholder="Prakarsa">
			</div>
		  </div>
		  
		  <div class="control-group">
			<label class="control-label" for="kepemimpinan">Kepemimpinan</label>
			<div class="controls">
			  <input type="text" class="span6" name="kepemimpinan" id="kepemimpinan" value="<?php echo $kepemimpinan; ?>" 
			  placeholder="Kepemimpinan">
			</div>
		  </div>
		  
		  <div class="control-group">
			<label class="control-label" for="atasan">Atasan</label>
			<div class="controls">
			  <input type="text" class="span6" name="atasan" id="atasan" value="<?php echo $atasan; ?>" 
			  placeholder="Atasan">
			</div>
		  </div>
		  
		  <div class="control-group">
			<label class="control-label" for="penilai">Penilai</label>
			<div class="controls">
			  <input type="text" class="span6" name="penilai" id="penilai" value="<?php echo $penilai; ?>" 
			  placeholder="Penilai">
			</div>
		  </div>
		  
		  <div class="control-group">
			<label class="control-label" for="mengetahui">Mengetahui</label>
			<div class="controls">
			  <input type="text" class="span6" name="mengetahui" id="mengetahui" value="<?php echo $mengetahui; ?>" 
			  placeholder="Mengetahui">
			</div>
		  </div>
		  
		  <input type="hidden" name="id_param" value="<?php echo $id_param; ?>">
		  <input type="hidden" name="id_pegawai" value="<?php echo $id_pegawai; ?>">
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
