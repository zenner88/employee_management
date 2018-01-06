<?php include "application/views/dashboard_admin/home/header.php" ?>
<div class="container">
  <div class="well">
	<div class="navbar navbar-inverse">
	  <div class="navbar-inner">
		<div class="container">
		  <a class="brand" href="#">Laporan Pegawai - Mengikuti Pelatihan</a>
		<div class="span6 pull-right">
		<?php
			echo form_open("laporan_pegawai_ikut_pelatihan/set",'class="navbar-form pull-right"');
		?>
			<div class="span2"><strong>Satuan Kerja</strong></div>
			<div class="span">:</div>
			<div class="span3">
			<select class="span3" name="id_satuan_kerja">
			<option value="">- Satuan Kerja -</option>
			<?php
			if($this->session->userdata('id_satuan_kerja')=="Semua")
			{
			?>
				<option value="Semua" selected="selected">Semua Satuan Kerja</option>
			<?php
			}
			else
			{
			?>
				<option value="Semua">Semua Satuan Kerja</option>
			<?php
			}
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
			
		<div class="span4 pull-right">
  		<a class="btn" href="<?php echo base_url(); ?>laporan_pegawai_ikut_pelatihan/export"><i class="icon-ok-circle"></i> Export ke Excell</a>
		  <button type="submit" class="btn btn-primary"><i class="icon-search icon-white"></i> Cari Data Laporan</button>
		 </div>
		<?php echo form_close(); ?>
		</div>
		</div>
	  </div><!-- /navbar-inner -->
	</div><!-- /navbar -->
	
	  <section>
  <table class="table table-hover table-condensed">
    <thead>
      <tr>
        <th>No.</th>
        <th>NIK</th>
        <th>Nama Pegawai</th>
        <th>Nama Pelatihan</th>
		<th>Lokasi Pelatihan</th>
		<th>Tanggal Sertifikat</th>
		<th>Jam Pelatihan</th>
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
        <td><?php echo $dp['nama_pelatihan']; ?></td>
        <td><?php echo $dp['lokasi_pelatihan']; ?></td>
        <td><?php echo $dp['tanggal_sertifikat']; ?></td>
        <td><?php echo $dp['jam_pelatihan']; ?></td>
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
