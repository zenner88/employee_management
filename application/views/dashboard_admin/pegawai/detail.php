<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/theme-new/css/print.css">
<div class="col-md-12">
	<div style="text-align: center;"><h2>Data Karyawan</h2></div>
</div>
<div class="clearfix"></div>
<div class="col-md-12">
	<div class="col-md-3">
		<img src="<?php echo base_url(); ?>asset/foto_pegawai/medium/<?php echo $foto; ?>">
	</div>
	<div class="col-md-5">
		<table class="table table-bordered">
		<tbody>
			<tr>
				<td class="col-md-3"><label class="font-10">Departemen <br> <i>Bagian</i></label></td>
				<td class="col-md-9"><?php //echo $departemen ?></td>
			</tr>
		</tbody>
	</table>	
	</div>
	
</div>
<div class="clearfix"></div>
<div class="col-md-12">
	<label>I. Data Pribadi</label>
</div>
<div class="col-md-12">
	
	<table class="table-data-diri">
		<tbody>
			<tr>
				<td class="col-md-3">Nama Lengkap</td>
				<td><?php echo $nama_pegawai; ?></td>
			</tr>
			<tr>
				<td>Tempat / Tanggal Lahir</td> 
				<td><?php echo $tempat_lahir; ?> / <?php echo $tanggal_lahir; ?></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td><?php echo $jenis_kelamin; ?></td>
			</tr>
			<tr>
				<td>No KTP</td>
				<td><?php echo $no_KTP; ?></td>
			</tr>
			<tr>
				<td>SIM</td>
				<td><?php //echo //$sim; ?></td>
			</tr>
			<tr>
				<td>NPWP</td>
				<td><?php echo $no_npwp; ?></td>
			</tr>
			<tr>
				<td>Alamat Email</td>
				<td><?php //echo $email_pegawai; ?></td>
			</tr>
			<tr>
				<td>Agama</td>
				<td><?php echo $agama; ?></td>
			</tr>
		</tbody>
	</table>	
</div>
<div class="col-md-12">
	<label>II. Latar Belakang Keluarga</label>
</div>
<div class="col-md-12">
	<?php if ($data_keluarga->num_rows() == 0) { ?>
		<table class="table table-bordered">
		    <thead>
		      <tr>
		        <th>No.</th>
		        <th>Nama Keluarga</th>
				<th>Tanggal Lahir</th>
				<th>Pekerjaan</th>
		      </tr>
		    </thead>
		    <tbody>
		    	<tr>
		    		<td></td>
			        <td></td>
					<td></td>
			        <td></td>
		    	</tr>
		    </tbody>
		</table>
	<?php } else { ?>
		<table class="table table-bordered">
			<thead>
		      <tr>
		        <th>No.</th>
		        <th>Nama Keluarga</th>
				<th>Tanggal Lahir</th>
				<th>Pekerjaan</th>
		      </tr>
		    </thead>
			<tbody>
			<?php
				$no=1;
				foreach($data_keluarga->result_array() as $dk) {
			?>
      			<tr>
        			<td><?php echo $no; ?></td>
       	 			<td><?php echo $dk['nama_anggota_keluarga']; ?></td>
        			<td><?php echo $dk['tanggal_lahir']; ?></td>
        			<td><?php echo $dk['pekerjaan']; ?></td>
      			</tr>
      		<?php $no++; } ?>
    		</tbody>
  		</table>
	<?php } ?>
	
    
</div>
<div class="col-md-12">
	<label>III. Latar Belakang Pendidikan dan Kemampuan Berbahasa</label>
</div>
<div class="col-md-12">
	<div class="col-md-6">
		<p>1. Pendidikan Formal</p>
	</div>
</div>
<div class="col-md-12">
	<?php if ($data_pendidikan->num_rows() == 0) { ?>
		<table class="table table-bordered">
		    <thead>
		      <tr>
		        <th>No.</th>
		        <th>Tingkat Pendidikan</th>
				<th>Jurusan</th>
		        <th>Teknik/Non Teknik</th>
		        <th>Sekolah</th>
				<th>Tanggal Lulus</th>
		      </tr>
		    </thead>
		    <tbody>
				<tr>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
		    </tbody>
		</table>
	<?php } else { ?> 
		<table class="table table-bordered">
		    <thead>
		      <tr>
		        <th>No.</th>
		        <th>Tingkat Pendidikan</th>
				<th>Jurusan</th>
		        <th>Teknik/Non Teknik</th>
		        <th>Sekolah</th>
				<th>Tanggal Lulus</th>
		      </tr>
		    </thead>
    		<tbody>
			<?php
				$no=1;
				foreach($data_pendidikan->result_array() as $dpn) {
			?>
		      <tr>
		        <td><?php echo $no; ?></td>
		        <td><?php echo $dpn['tingkat_pendidikan']; ?></td>
		        <td><?php echo $dpn['jurusan']; ?></td>
		        <td><?php echo $dpn['teknik_non_teknik']; ?></td>
		        <td><?php echo $dpn['sekolah']; ?></td>
		        <td><?php echo $dpn['tanggal_lulus']; ?></td>
		      </tr>
	 		<?php $no++; } ?>
    		</tbody>
    	</table>
	<?php } ?>

</div>
<div class="col-md-12">
	<p>2. Pendidikan Non Formal (termasuk Kursus, Pelatihan, Seminar, Lokakarya)</p>
</div>
<div class="col-md-12">
	<?php if ($data_seminar->num_rows() == 0) { ?>
	<table class="table table-bordered">
	    <thead>
	      <tr>
	        <th>No.</th>
	        <th>Uraian</th>
			<th>Lokasi</th>
	        <th>Tanggal</th>
	      </tr>
	    </thead>
    	<tbody>
		  <tr>
	        <td></td>
	        <td></td>
			<td></td>
	        <td></td>
	      </tr>
    	</tbody>
  	</table>
	<?php } else {  ?> 
	<table class="table table-bordered">
	    <thead>
	      <tr>
	        <th>No.</th>
	        <th>Uraian</th>
			<th>Lokasi</th>
	        <th>Tanggal</th>
	      </tr>
	    </thead>
    	<tbody>
		<?php
			$no=1;
			foreach($data_seminar->result_array() as $ds) {
		?>
	      <tr>
	        <td><?php echo $no; ?></td>
	        <td><?php echo $ds['uraian']; ?></td>
	        <td><?php echo $ds['lokasi']; ?></td>
	        <td><?php echo $ds['tanggal']; ?></td>
	      </tr>
	 	<?php $no++; } ?>
    	</tbody>
  	</table>
  	<?php } ?>
</div>
<div class="col-md-12">
	<label>IV. Latar Belakang Organisasi dan Prestasi</label>
</div>
<div class="col-md-12">
	<div class="col-md-12">
		<p>1. Aktivitas Sosial</p>
	</div>
</div>
<div class="col-md-12">
	<?php if ($data_pelatihan->num_rows() == 0) { ?>
		<table class="table table-bordered">
			<thead>
				<tr>
			    	<th>No.</th>
			        <th>Nama Pelatihan</th>
					<th>Lokasi</th>
			        <th>Tanggal Sertifikat</th>
			        <th>Jam Pelatihan</th>
					<th>Negara</th>
			    </tr>
			</thead>
			<tbody>
				<tr>
			    	<td></td>
			        <td></td>
					<td></td>
			        <td></td>
			        <td></td>
					<td></td>
			    </tr>
			</tbody>
		</table>
	<?php } else {  ?> 
		<table class="table table-bordered">
		    <thead>
		      <tr>
		        <th>No.</th>
		        <th>Nama Pelatihan</th>
				<th>Lokasi</th>
		        <th>Tanggal Sertifikat</th>
		        <th>Jam Pelatihan</th>
				<th>Negara</th>
		      </tr>
		    </thead>
    		<tbody>
			<?php
				$no=1;
				foreach($data_pelatihan->result_array() as $dpl) {
			?>
		      <tr>
		        <td><?php echo $no; ?></td>
		        <td><?php echo $dpl['nama_pelatihan']; ?></td>
		        <td><?php echo $dpl['lokasi']; ?></td>
		        <td><?php echo $dpl['tanggal_sertifikat']; ?></td>
		        <td><?php echo $dpl['jam_pelatihan']; ?></td>
		        <td><?php echo $dpl['negara']; ?></td>
		      </tr>
	 		<?php $no++; } ?>
    		</tbody>
  		</table>
	<?php } ?>
	
</div>
<div class="col-md-12">
	<p>2. Penghargaan</p>
</div>
<div class="col-md-12">
	<?php if ($data_penghargaan->num_rows() == 0) { ?>
		<table class="table table-bordered">
		    <thead>
		      <tr>
		        <th>No.</th>
		        <th>Nama Penghargaan</th>
		      </tr>
		    </thead>
		    <tbody>
		    	<tr>
		    		<td></td>
		    		<td></td>
		    	</tr>
		    </tbody>
		</table>
	<?php } else { ?> 
		<table class="table table-bordered">
			<thead>
		      <tr>
		        <th>No.</th>
		        <th>Nama Penghargaan</th>
		      </tr>
    		</thead>
    		<tbody>
			<?php
				$no=1;
				foreach($data_penghargaan->result_array() as $drj) {
			?>
		      <tr>
		        <td><?php echo $no; ?></td>
		        <td><?php echo $drj['nama_penghargaan']; ?></td>
		      </tr>
	 		<?php $no++; } ?>
    		</tbody>
  		</table>
	<?php } ?>
	
</div>
<div class="col-md-12">
	<label>V. Pengalaman Kerja</label>
</div>
<div class="col-md-12">
	<p>1. Mohon Isi dimulai dari Pekerjaan Terakhir</p>
</div>
<div class="col-md-12">
	<?php if ($data_riwayat_pekerjaan->num_rows() == 0) { ?>
		<table class="table table-bordered">
		<tbody>
			<tr>
				<td class="col-md-3">1. Nama Perusahaan</td>
				<td></td>
			</tr>
			<tr>
				<td>Bergerak di Bidang</td> 
				<td></td>
			</tr>
			<tr>
				<td>Jabatan</td>
				<td></td>
			</tr>
			<tr>
				<td>Dari (Bln / thn) - Sampai (Bln / Thn)</td>
				<td></td>
			</tr>
			<tr>
				<td>Gambaran Pekerjaan</td>
				<td></td>
			</tr>
			<tr>
				<td colspan="2">Mohon gambarkan posisi anda saat ini dalam struktur organisasi</td>
			</tr>
			<tr>
				<td class="no-border" colspan="2">
					
				</td>
			</tr>
			<tr>
				<td class="col-md-3">2. Nama Perusahaan</td>
				<td></td>
			</tr>
			<tr>
				<td>Bergerak di Bidang</td> 
				<td></td>
			</tr>
			<tr>
				<td>Jabatan</td>
				<td></td>
			</tr>
			<tr>
				<td>Dari (Bln / thn) - Sampai (Bln / Thn)</td>
				<td></td>
			</tr>
			<tr>
				<td>Alasan Berhenti</td>
				<td></td>
			</tr>
			<tr>
				<td class="col-md-3">3. Nama Perusahaan</td>
				<td></td>
			</tr>
			<tr>
				<td>Bergerak di Bidang</td> 
				<td></td>
			</tr>
			<tr>
				<td>Jabatan</td>
				<td></td>
			</tr>
			<tr>
				<td>Dari (Bln / thn) - Sampai (Bln / Thn)</td>
				<td></td>
			</tr>
			<tr>
				<td>Alasan Berhenti</td>
				<td></td>
			</tr>
		</tbody>
	</table>
	<?php } else { ?> 
	
		<table class="table table-bordered">
		<tbody>
			<?php
				$no=1;
				foreach($data_riwayat_pekerjaan->result_array() as $drj) {
			?>
			<tr>
				<td class="col-md-3"><?php echo $no ?> Nama Perusahaan</td>
				<td><?php echo $drj['nama_perusahaan']; ?></td>
			</tr>
			<tr>
				<td>Bergerak di Bidang</td> 
				<td><?php echo $drj['bidang_perusahaan']; ?></td>
			</tr>
			<tr>
				<td>Jabatan</td>
				<td><?php echo $drj['jabatan_perusahaan']; ?></td>
			</tr>
			<tr>
				<td>Dari (Bln / thn) - Sampai (Bln / Thn)</td>
				<td><?php echo $drj['tanggal_awal_pekerjaan']; ?> - <?php echo $drj['tanggal_akhir_pekerjaan']; ?></td>
			</tr>
			<tr>
				<td>Alasan Berhenti</td>
				<td><?php echo $drj['alasan_berhenti']; ?></td>
			</tr>
			<?php $no++; } ?>
		</tbody>
	</table>
  		
	<?php } ?>
		
</div>
<div class="col-md-12">
	<p>2. Sebutkan orang - orang yang pernah menjadi atasan dalam karier Anda dalam perushaan di atas!</p>
</div>
<div class="col-md-12">
	<table class="table table-bordered">
		<tbody>
			<tr>
				<td class="text-center">No</td>
				<td class="text-center">Nama</td>
				<td class="text-center">Jabatan</td>
				<td class="text-center">Perusahaan</td>
				<td class="text-center">Nomor Kontak</td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
		</tbody>
	</table>
</div>
<div class="col-md-12">
	<p>3. Pernahkah anda melakukan pembaharuan / perubahan selama anda bekerja jelaskan</p>
</div>
<div class="col-md-12">
	<table class="table-pembaharuan">
		<tbody>
			<tr>
				<td></td>
			</tr>
		</tbody>
	</table>
</div>
<div class="col-md-12">
	<label>VI. Riwayat Kesehatan</label>
</div>
<div class="col-md-12">
	<p>1. Silahkan berikan tanda checklist dan keterangan sesuai dengan riwayat kesehatan anda</p>
</div>
<div class="col-md-12">
	<?php if ($data_riwayat_kesehatan->num_rows() == 0) { ?>
		<table class="table table-bordered">
		<thead>
			<tr>
				<th>No.</th>
				<th class="text-center">Penyakit</th>
				<th class="text-center">Pernah dirawat pada (tgl / bln/ thn)</th>
				<th class="text-center">Keterangan</th>
			</tr>
		</thead>
		<tbody>
			
			<tr>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
		</tbody>
	</table>
	<?php } else { ?> 
		<table class="table table-bordered">
			<thead>
		      <tr>
		        <th>No.</th>
				<th class="text-center">Penyakit</th>
				<th class="text-center">Pernah dirawat pada (tgl / bln/ thn)</th>
				<th class="text-center">Keterangan</th>
		      </tr>
    		</thead>
    		<tbody>
			<?php
				$no=1;
				foreach($data_riwayat_kesehatan->result_array() as $drj) {
			?>
		      <tr>
		        <td><?php echo $no; ?></td>
		        <td><?php echo $drj['nama_penyakit']; ?></td>
		        <td><?php echo $drj['tanggal_riwayat']; ?></td>
		        <td><?php echo $drj['keterangan']; ?></td>
		      </tr>
	 		<?php $no++; } ?>
    		</tbody>
  		</table>
	<?php } ?>
	
</div>
<div class="col-md-12">
	<label>VII. Referensi</label>
</div>
<div class="col-md-12">
	<p>1. Silahkan tulis nama kerabat untuk referensi anda</p>
</div>
<div class="col-md-12">
	<table class="table table-bordered">
		<tbody>
			<tr>
				<td class="col-md-3">Nama</td>
				<td></td>
				<td class="col-md-3">No Telepon</td>
				<td></td>
			</tr>
			<tr>
				<td>Jabatan</td>
				<td></td>
				<td>Perusahaan</td>
				<td></td>
			</tr>
			<tr>
				<td>Hubungan</td>
				<td colspan="3"></td>
			</tr>
		</tbody>
	</table>
</div>
<div class="col-md-12">
	<p>2. Silahkan tulis nama orang yang dapat dihubungi segera dalam keadaan mendesak / darurat</p>
</div>
<div class="col-md-12">
	<table class="table table-bordered">
		<tbody>
			<tr>
				<td class="col-md-3">Nama</td>
				<td></td>
				<td class="col-md-3">No Telepon</td>
				<td></td>
			</tr>
			<tr>
				<td>Jabatan</td>
				<td></td>
				<td>Perusahaan</td>
				<td></td>
			</tr>
			<tr>
				<td>Hubungan</td>
				<td colspan="3"></td>
			</tr>
		</tbody>
	</table>
</div>
<div class="col-md-12">
	<label>VIII. Lain - Lain</label>
</div>
<div class="col-md-12">
	<p>1. Silahkan Beri tanda checklist dan keterangan sesuai dengan kesediaan Anda!</p>
</div>
<div class="col-md-12">
	
	<table class="table-data-diri">
		<tbody>
			<tr>
				<td></td>
				<td>Ketersediaan Anda perihal</td>
				<td>Keterangan</td>
			</tr>
			<tr>
				<td></td>
				<td>melakukan perjalanan dinas</td>
				<td></td>
			</tr>		
		</tbody>
	</table>
	<table class="table-alamat">
		<tbody>
			<tr>
				<td>Apakah anda memiliki keluarga, kerabat, atau teman yang bekerja di YBPI? sebutkan?</td>
				<td></td>
			</tr>
			<tr>
				<td>Apakah anda pernah melamar ke YBPI sebelumnya?, jika ya, kapan dan untuk posisi apa?</td>
				<td></td>
			</tr>		
			<tr>
				<td>Apakah Anda pernah terlibat dengan pihak Kepolisian berkaitan dengan isu pelanggaran kriminal, persidangan atau pelanggaran perdata?</td>
				<td></td>
			</tr>
			<tr>
				<td>Apakah Anda memiliki kepemilikan atau keterikatan dengan perusahaan lain?</td>
				<td></td>
			</tr>	
			<tr>
				<td>Jika Anda diterima, kapan Anda dapat mulai bekerja?</td>
				<td></td>
			</tr>
		</tbody>
	</table>
	
</div>
<div class="col-md-12">
	<p>Dengan ini Saya menyatakan bahwa semua data yang Saya tuliskan diatas adalah benar. Saya menyadari bahwa ketidakjujuran mengenai data-data di atas dapat mengakibatkan pembatalan atau pemutusan hubungan kerja dari pihak perusahaan. </p>
</div>
<div class="col-md-8"></div>
<div class="col-md-2 padding5 pull-right">
	<hr>
</div>
<div class="col-md-2 padding5 pull-right">
	<hr>
</div>
<div class="clearfix"></div>
<div class="col-md-8"></div>
<div class="col-md-3 pull-right">
	<div class="border-line"></div>
</div>