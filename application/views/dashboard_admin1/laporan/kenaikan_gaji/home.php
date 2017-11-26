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
		  <a class="brand" href="#">Usulan Kenaikan Gaji Berkala (UKGB)</a>
		<div class="span6 pull-right">
		<?php
			echo form_open("kenaikan_gaji/set",'class="navbar-form pull-right"');
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
			  		<option value="2010">2012</option>
                    <option value="2011">2013</option>
                    <option value="2012">2014</option>
                    <option value="2013">2015</option>
                    <option value="2014">2016</option>
                    <option value="2015">2017</option>			  	
			  		<option value="2016">2018</option>
                    <option value="2017">2019</option>
                    <option value="2018">2020</option>
					<option value="2019">2021</option>
					<option value="2020">2022</option>
					<option value="2021">2023</option>
					<option value="2022">2024</option>
					<option value="2023">2025</option>
					<option value="2024">2026</option>
					<option value="2025">2027</option>
					<option value="2026">2028</option>
					
                    
			  	
			</select>
		</div>
		<div class="span4 pull-right">
  		<a class="btn" href="<?php echo base_url(); ?>kenaikan_gaji/export"><i class="icon-ok-circle"></i> Export ke Excell</a>
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
		<th>Pangkat / Golongan</th>
		<th>Keterangan</th>
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
        <td><?php echo $dp['uraian']; ?> <?php echo $dp['golongan']; ?></td>
        <td><?php 
		$awal = $dp['SUBSTRING(tanggal_sk,-4)'];
	$tambah = 2;
	$next = $awal+$tambah;
		echo $dp['LEFT(f.tanggal_sk, CHAR_LENGTH(tanggal_sk)-5)']; ?>&nbsp;<?php echo $next; ?>
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
