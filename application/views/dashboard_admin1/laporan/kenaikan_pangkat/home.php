<?php 
require_once('/asset/hed.php');
?>	
    <div class="container">
	
	<div class="well">
	  <div class="row">
		<div class="span">
		  <h3><?php echo $judul_lengkap.' '.$instansi; ?></h3>
		  <p><?php echo $alamat; ?></p>
		</div>
	  </div>
	</div>

  <div class="well">
	<div class="navbar navbar-inverse">
	  <div class="navbar-inner">
		<div class="container">
		  <a class="brand" href="#">Rencana Usulan Kenaikan Pangkat (RUKP)</a>
		<div class="span6 pull-right">
		<?php
			echo form_open("kenaikan_pangkat/set",'class="navbar-form pull-right"');
		?>
			<div class="span2"><strong>Tahun</strong></div>
			<div class="span">:</div>
			<div class="span3">
			<select class="span3" name="id_satuan_kerja">
			<option value="">- Tahun -</option>
			<?php
			if($this->session->userdata('id_satuan_kerja')=="Semua")
			{
			?>
				<option value="Semua" selected="selected">Semua</option>
			<?php
			}
			else
			{
			?>
				<option value="Semua">Semua</option>
			<?php
			}
			  		
			  	?>
			  		<option value="2008">2012</option>
                    <option value="2009">2013</option>
                    <option value="2010">2014</option>
                    <option value="2011">2015</option>
                    <option value="2012">2016</option>
                    <option value="2013">2017</option>			  	
			  		<option value="2014">2018</option>
                    <option value="2015">2019</option>
                    <option value="2016">2020</option>
					<option value="2017">2021</option>
					<option value="2018">2022</option>
					<option value="2019">2023</option>
					<option value="2020">2024</option>
					<option value="2021">2025</option>
					<option value="2022">2026</option>
					<option value="2023">2027</option>
					<option value="2024">2028</option>
					<option value="2025">2029</option>
					<option value="2026">2030</option>
                    
			  	
			</select>
		</div>
		<div class="span4 pull-right">
  		<a class="btn" href="<?php echo base_url(); ?>kenaikan_pangkat/export"><i class="icon-ok-circle"></i> Export ke Excell</a>
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
        <th>NIP</th>
        <th>Nama Pegawai</th>
        <th>Jabatan</th>
		<th>Pangkat / Golongan lama</th>
		<th>Menjadi</th>
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
        <td><?php echo $dp['nama_jabatan']; ?></td>
        <td><?php echo $dp['uraian']; ?> <?php echo $dp['golongan']; ?> <BR><?php echo $dp['tanggal_sk_pangkat']; ?></td>
        <td><?php 
		$awal = $dp['SUBSTRING(tanggal_sk_pangkat,-4)'];
	$tambah = 4;
	$next = $awal+$tambah;
		echo $dp['ura']; ?>&nbsp;<?php echo $dp['gol'];?><BR>
        <?php echo $dp['LEFT(tanggal_sk_pangkat, CHAR_LENGTH(tanggal_sk_pangkat)-5)']; ?>&nbsp;<?php echo $next; ?>
        </td>
      </tr>
	 <?php
	 		$no++;
	 	}
	 ?>
    </tbody>
  </table>
	
  

</section>
  </div>


      <footer class="well">
        <p><?php echo $credit; ?></p>
      </footer>

    </div> <!-- /container -->

  </body>
</html>
