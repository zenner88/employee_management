<?php include "application/views/dashboard_admin/home/header.php" ?>
<div class="container">
  <div class="well">
	<div class="navbar navbar-inverse">
	  <div class="navbar-inner">
		<div class="container">
		  <a class="brand" href="#">Laporan Pegawai - Urut Kepangkatan</a>
		<div class="span6 pull-right">
		<?php
			echo form_open("laporan_pegawai_urut_kepangkatan/set",'class="navbar-form pull-right"');
		?>
			<div class="span2"><strong>Status Pegawai</strong></div>
			<div class="span">:</div>
			<div class="span3">
			<select class="span3" name="id_status_pegawai">
			<option value="">- Status Pegawai -</option>
			<?php
			  		foreach($mst_status_pegawai->result_array() as $msk)
			  		{
			  			if($this->session->userdata('id_status_pegawai')==$msk['id_status_pegawai'])
			  			{
			  	?>
			  		<option value="<?php echo $msk['id_status_pegawai']; ?>" selected="selected"><?php echo $msk['nama_status']; ?></option>
			  	<?php
			  			}
			  			else
			  			{
			  	?>
			  		<option value="<?php echo $msk['id_status_pegawai']; ?>"><?php echo $msk['nama_status']; ?></option>
			  	<?php
			  			}
			  		}
			  	?>

			</select>
			</div>
			
			<div class="span2"><strong>Satuan Kerja</strong></div>
			<div class="span">:</div>
			<div class="span3">
			<select class="span3" name="id_satuan_kerja">
			<option value="">- Satuan Kerja -</option>
			<?php
			  		foreach($mst_satuan_kerja->result_array() as $msk)
			  		{
			  			if($this->session->userdata('id_satuan_kerja')==$msk['id_satuan_kerja'])
			  			{
			  	?>
			  		<option value="<?php echo $msk['id_satuan_kerja']; ?>" selected="selected"><?php echo $msk['nama_satuan_kerja']; ?></option>
			  	<?php
			  			}
			  			else
			  			{
			  	?>
			  		<option value="<?php echo $msk['id_satuan_kerja']; ?>"><?php echo $msk['nama_satuan_kerja']; ?></option>
			  	<?php
			  			}
			  		}
			  	?>

			</select>
			</div>
			<div class="span2"><strong>Lokasi Kerja</strong></div>
			<div class="span">:</div>
			<div class="span3">
			<select class="span3" name="id_lokasi_kerja">
			<option value="">- Lokasi Kerja -</option>
			<?php
			  		foreach($mst_lokasi_kerja->result_array() as $msk)
			  		{
			  			if($this->session->userdata('id_lokasi_kerja')==$msk['id_lokasi_kerja'])
			  			{
			  	?>
			  		<option value="<?php echo $msk['id_lokasi_kerja']; ?>" selected="selected"><?php echo $msk['lokasi_kerja']; ?></option>
			  	<?php
			  			}
			  			else
			  			{
			  	?>
			  		<option value="<?php echo $msk['id_lokasi_kerja']; ?>"><?php echo $msk['lokasi_kerja']; ?></option>
			  	<?php
			  			}
			  		}
			  	?>
			</select>
			</div>
			<div class="span1"><strong>Golongan</strong></div>
			<div class="span">:</div>
			<div class="span4">
			
			<select class="span2" name="id_gol_awal">
			<option value="">- Golongan -</option>
				
			<?php
			  		foreach($mst_golongan->result_array() as $msk)
			  		{
			  			if($this->session->userdata('id_gol_awal')==$msk['id_golongan'])
			  			{
			  	?>
			  		<option value="<?php echo $msk['id_golongan']; ?>" selected="selected"><?php echo $msk['golongan']; ?></option>
			  	<?php
			  			}
			  			else
			  			{
			  	?>
			  		<option value="<?php echo $msk['id_golongan']; ?>"><?php echo $msk['golongan']; ?></option>
			  	<?php
			  			}
			  		}
			  	?>
			  	
			</select>
			s/d
			<select class="span2" name="id_gol_akhir">
			<option value="">- Golongan -</option>
			<?php
			  		foreach($mst_golongan->result_array() as $msk)
			  		{
			  			if($this->session->userdata('id_gol_akhir')==$msk['id_golongan'])
			  			{
			  	?>
			  		<option value="<?php echo $msk['id_golongan']; ?>" selected="selected"><?php echo $msk['golongan']; ?></option>
			  	<?php
			  			}
			  			else
			  			{
			  	?>
			  		<option value="<?php echo $msk['id_golongan']; ?>"><?php echo $msk['golongan']; ?></option>
			  	<?php
			  			}
			  		}
			  	?>
			  	
			</select>
			</div>
		<div class="span4 pull-right">
  		<a class="btn" href="<?php echo base_url(); ?>laporan_pegawai_urut_kepangkatan/export"><i class="icon-ok-circle"></i> Export ke Excell</a>
		  <button type="submit" class="btn btn-primary"><i class="icon-search icon-white"></i> Cari Data Laporan</button>
		  </div>
		<?php echo form_close(); ?>
		</div>
		</div>
	  </div><!-- /navbar-inner -->
	</div><!-- /navbar -->
	
	  <section>
	  <div>
	  	
	  </div>
  <table class="table table-hover table-condensed">
    <thead>
      <tr>
        <th>No.</th>
        <th>NIK</th>
        <th>Nama Pegawai</th>
        <th>Tempat/Tanggal Lahir</th>
		<th>Jenis Kelamin</th>
		<th>Agama</th>
		<th>Usia</th>
		<th>Golongan</th>
      </tr>
    </thead>
    <tbody>
	<?php
		$no=1;
		foreach($data_pegawai->result_array() as $dp)
		{
	?>
      <tr>
        <td><?php echo $no; ?></td>
        <td><?php echo $dp['nip']; ?></td>
        <td><?php echo $dp['nama_pegawai']; ?></td>
        <td><?php echo $dp['tempat_lahir'].' - '.$dp['tanggal_lahir']; ?></td>
        <td><?php echo $dp['jenis_kelamin']; ?></td>
        <td><?php echo $dp['agama']; ?></td>
        <td><?php echo $dp['usia']; ?></td>
        <td><?php echo $dp['golongan']; ?></td>
      </tr>
	 <?php
	 		$no++;
	 	}
	 ?>
    </tbody>
  </table>
	
  

</section>
  </div>



</div>

<div class="container">
<?php include "application/views/dashboard_admin/home/footer.php" ?>  
</div>

