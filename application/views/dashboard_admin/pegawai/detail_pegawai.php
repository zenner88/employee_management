<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/theme-new/css/print.css">
<div class="col-md-12">
	<div style="text-align: center;"><h2>Data Karyawan</h2></div>
</div>
<div class="clearfix"></div>
<div class="col-md-8">
	<table class="table table-bordered">
		<tbody>
			<tr>
				<td class="col-md-3"><label class="font-10">Departemen <br> <i>Bagian</i></label></td>
				<td class="col-md-9"><?php echo $departemen ?></td>
			</tr>
		</tbody>
	</table>
</div>
<div class="col-md-12">
	<div class="col-md-6">
		<label>I. Data Pribadi</label>
	</div>
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
				<td><?php echo $sim; ?></td>
			</tr>
			<tr>
				<td>NPWP</td>
				<td><?php echo $no_npwp; ?></td>
			</tr>
			<tr>
				<td>Alamat Email</td>
				<td><?php echo $email_pegawai; ?></td>
			</tr>
			<tr>
				<td>Agama</td>
				<td><?php echo $agama; ?></td>
			</tr>
			<tr>
				<td>Suku Bangsa</td>
				<td>Sunda</td>
			</tr>
			<tr>
				<td>Status Pernikahan</td>
				<td>Menikah</td>
			</tr>
			
		</tbody>
	</table>
	<table class="table-alamat">
		<tbody>
			<tr>
				<td class="col-md-6">Alamat Tempat Tinggal Saat Ini</td>
				<td>Alamat Asal</td>
			</tr>
			<tr>
				<td class="no-border">
					<p>Alamat</p>
					<div class="col-md-6">Telepon Rumah</div>
					<div class="col-md-6">022123456</div>
					<div class="clearfix"></div>
					<div class="col-md-6">Telepon Selular</div>
					<div class="col-md-6">081234567890</div>
				</td>
				<td class="no-border">
					<p>Alamat</p>
					<div class="col-md-6">Telepon Rumah</div>
					<div class="col-md-6">022123456</div>
					<div class="clearfix"></div>
					<div class="col-md-6">Telepon Selular</div>
					<div class="col-md-6">081234567890</div>
				</td>
			</tr>
			<tr>
				<td>Status: Milik Sendiri</td>
				<td>Status: Kontrak</td>
			</tr>
		</tbody>
	</table>
	
</div>
<div class="col-md-12">
	<div class="col-md-6">
		<label>II. Latar Belakang Keluarga</label>
	</div>
</div>
<div class="col-md-12">
	<table class="table table-bordered">
		<tbody>
			<tr>
				<td>Hubungan</td>
				<td class="text-center">Nama</td>
				<td class="text-center">Tgl Lahir</td>
				<td class="text-center">Pendidikan Terakhir</td>
				<td class="text-center">Pekerjaan</td>
			</tr>
			<tr>
				<td>Pasangan</td>
				<td>Mutiara</td>
				<td>28-12-1980</td>
				<td>S1</td>
				<td>Wiraswasta</td>
			</tr>
			<tr>
				<td>Anak 1</td>
				<td>Muhammad</td>
				<td>5-09-2003</td>
				<td>SMA</td>
				<td>-</td>
			</tr>
			<tr>
				<td>Anak 2</td>
				<td>Aisyah</td>
				<td>7-7-2007</td>
				<td>SD</td>
				<td>-</td>
			</tr>
		</tbody>
		<tbody>
			<tr>
				<td colspan="5">Susunan Keluarga Termasuk Anda</td>
			</tr>
			<tr>
				<td>Hubungan</td>
				<td class="text-center">Nama</td>
				<td class="text-center">Tgl Lahir</td>
				<td class="text-center">Pendidikan Terakhir</td>
				<td class="text-center">Pekerjaan</td>
			</tr>
			<tr>
				<td>Ayah</td>
				<td>Bambang</td>
				<td>03-06-1960</td>
				<td>SD</td>
				<td>Wiraswasta</td>
			</tr>
			<tr>
				<td>Ibu</td>
				<td>Chyntia</td>
				<td>4-08-1962</td>
				<td>SD</td>
				<td>-</td>
			</tr>
			<tr>
				<td>Saudara 1</td>
				<td>Bram</td>
				<td>05-09-1980</td>
				<td>S1</td>
				<td>Wiraswasta</td>
			</tr>
			<tr>
				<td>Saudara 2</td>
				<td>Nina</td>
				<td>10-10-1990</td>
				<td>S1</td>
				<td>-</td>
			</tr>
		</tbody>
	</table>
</div>
<div class="col-md-12">
	<div class="col-md-6">
		<label>III. Latar Belakang Pendidikan dan Kemampuan Berbahasa</label>
	</div>
</div>
<div class="col-md-12">
	<div class="col-md-6">
		<p>1. Pendidikan Formal</p>
	</div>
</div>
<div class="col-md-12">
	<table class="table table-bordered">
		<tbody>
			<tr>
				<td class="text-center">Tingkat</td>
				<td class="text-center">Sekolah / Perguruan Tinggi</td>
				<td class="text-center">Jurusan</td>
				<td class="text-center">Dari Bulan / Tahun</td>
				<td class="text-center">Samapi Bulan / Tahun</td>
				<td class="text-center">IPK</td>
			</tr>
			<tr>
				<td>SLTA</td>
				<td>SMA Budi Karya</td>
				<td>IPA</td>
				<td>1994</td>
				<td>1997</td>
				<td>-</td>
			</tr>
			<tr>
				<td>S1</td>
				<td>Universitas Budi Karya</td>
				<td>Teknik Sipil</td>
				<td>1997</td>
				<td>2001</td>
				<td>3.5</td>
			</tr>
		</tbody>
	</table>
</div>
<div class="col-md-12">
	<div class="col-md-12">
		<p>2. Pendidikan Non Formal (termasuk Kursus, Pelatihan, Seminar, Lokakarya)</p>
	</div>
</div>
<div class="col-md-12">
	<table class="table table-bordered">
		<tbody>
			<tr>
				<td class="text-center">Nama Kursus Atau Pelatihan</td>
				<td class="text-center">Pelatihan</td>
				<td class="text-center">tgl / bln / thn</td>
				<td class="text-center">Keterangan</td>
			</tr>
			<tr>
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
			</tr>
		</tbody>
	</table>
</div>
<div class="col-md-12">
	<div class="col-md-12">
		<p>3. Mohon Berikan tanda checklist sesuai dengan kemampuan bahasa anda</p>
	</div>
</div>
<div class="col-md-12">
	<table class="table table-bordered">
		<tbody>
			<tr>
				<td class="text-center">Bahasa Asing yang dikuasai</td>
				<td class="text-center">Lisan</td>
				<td class="text-center">Tulisan</td>
			</tr>
			<tr>
				<td>Bahasa Inggris</td>
				<td>
					<div class="col-md-1">
						<input type="checkbox" name="" checked>
					</div>
					<div class="col-md-4">
						<label>Active</label>
					</div>
					<div class="col-md-1">
						<input type="checkbox" name="">
					</div>
					<div class="col-md-4">
						<label>Passive</label>
					</div>
				</td>
				<td>
					<div class="col-md-1">
						<input type="checkbox" name="" checked>
					</div>
					<div class="col-md-4">
						<label>Active</label>
					</div>
					<div class="col-md-1">
						<input type="checkbox" name="">
					</div>
					<div class="col-md-4">
						<label>Passive</label>
					</div>
				</td>
			</tr>
			<tr>
				<td>Bahasa</td>
				<td>
					<div class="col-md-1">
						<input type="checkbox" name="">
					</div>
					<div class="col-md-4">
						<label>Active</label>
					</div>
					<div class="col-md-1">
						<input type="checkbox" name="">
					</div>
					<div class="col-md-4">
						<label>Passive</label>
					</div>
				</td>
				<td>
					<div class="col-md-1">
						<input type="checkbox" name="" checked>
					</div>
					<div class="col-md-4">
						<label>Active</label>
					</div>
					<div class="col-md-1">
						<input type="checkbox" name="">
					</div>
					<div class="col-md-4">
						<label>Passive</label>
					</div>
				</td>
			</tr>
		</tbody>
	</table>
</div>
<div class="col-md-12">
	<div class="col-md-12">
		<label>IV. Latar Belakang Organisasi dan Prestasi</label>
	</div>
</div>
<div class="col-md-12">
	<div class="col-md-12">
		<p>1. Aktivitas Sosial</p>
	</div>
</div>
<div class="col-md-12">
	<table class="table table-bordered">
		<tbody>
			<tr>
				<td class="text-center">Nama Organisasi</td>
				<td class="text-center">Bidang</td>
				<td class="text-center">Periode Kepesertaan</td>
				<td class="text-center">Keterangan</td>
			</tr>
			<tr>
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
			</tr>
		</tbody>
	</table>
</div>
<div class="col-md-12">
	<div class="col-md-12">
		<p>2. Penghargaan</p>
	</div>
</div>
<div class="col-md-12">
	<table class="table table-bordered">
		<tbody>
			<tr>
				<td class="text-center">Prestasi</td>
				<td class="text-center">Tahun</td>
				<td class="text-center">Keterangan</td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td></td>
			</tr>
		</tbody>
	</table>
</div>
<div class="col-md-12">
	<div class="col-md-12">
		<label>V. Pengalaman Kerja</label>
	</div>
</div>
<div class="col-md-12">
	<div class="col-md-12">
		<p>1. Mohon Isi dimulai dari Pekerjaan Terakhir</p>
	</div>
</div>
<div class="col-md-12">
	
	<table class="table-data-diri">
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
			
		</tbody>
	</table>
	<table class="table-alamat">
		<tbody>
			<tr>
				<td colspan="2">Mohon gambarkan posisi anda saat ini dalam struktur organisasi</td>
			</tr>
			<tr>
				<td class="no-border" colspan="2">
					
				</td>
			</tr>
		</tbody>
	</table>
	
</div>
<div class="col-md-12">
	
	<table class="table-data-diri">
		<tbody>
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
			
		</tbody>
	</table>

	
</div>
<div class="col-md-12">
	
	<table class="table-data-diri">
		<tbody>
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

	
</div>
<div class="col-md-12">
	<div class="col-md-12">
		<p>2. Sebutkan orang - orang yang pernah menjadi atasan dalam karier Anda dalam perushaan di atas!</p>
	</div>
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
	<div class="col-md-12">
		<p>3. Pernahkah anda melakukan pembaharuan / perubahan selama anda bekerja jelaskan</p>
	</div>
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
	<div class="col-md-12">
		<label>VI. Riwayat Kesehatan</label>
	</div>
</div>
<div class="col-md-12">
	<div class="col-md-12">
		<p>1. Silahkan berikan tanda checklist dan keterangan sesuai dengan riwayat kesehatan anda</p>
	</div>
</div>
<div class="col-md-12">
	<table class="table table-bordered">
		<tbody>
			<tr>
				<td><input type="checkbox" name=""></td>
				<td class="text-center">Penyakit</td>
				<td class="text-center">Pernah dirawat pada (tgl / bln/ thn)</td>
				<td class="text-center">Keterangan</td>
			</tr>
			<tr>
				<td><input type="checkbox" name=""></td>
				<td>Jantung</td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td><input type="checkbox" name=""></td>
				<td>Hipertensi</td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td><input type="checkbox" name=""></td>
				<td>Diabetes</td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td><input type="checkbox" name=""></td>
				<td>Hepatitis</td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td><input type="checkbox" name=""></td>
				<td>Kanker</td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td><input type="checkbox" name=""></td>
				<td>TBC</td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td><input type="checkbox" name=""></td>
				<td>Asma</td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td><input type="checkbox" name=""></td>
				<td>AIDS</td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td><input type="checkbox" name=""></td>
				<td>Penyakit Lainnya</td>
				<td></td>
				<td></td>
			</tr>
		</tbody>
	</table>
</div>
<div class="col-md-12">
	<div class="col-md-12">
		<label>VII. Referensi</label>
	</div>
</div>
<div class="col-md-12">
	<div class="col-md-12">
		<p>1. Silahkan tulis nama kerabat untuk referensi anda</p>
	</div>
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
	<div class="col-md-12">
		<p>2. Silahkan tulis nama orang yang dapat dihubungi segera dalam keadaan mendesak / darurat</p>
	</div>
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
	<div class="col-md-12">
		<label>VIII. Lain - Lain</label>
	</div>
</div>
<div class="col-md-12">
	<div class="col-md-12">
		<p>1. Silahkan Beri tanda checklist dan keterangan sesuai dengan kesediaan Anda!</p>
	</div>
</div>
<div class="col-md-12">
	
	<table class="table-data-diri">
		<tbody>
			<tr>
				<td><input type="checkbox" name=""></td>
				<td>Ketersediaan Anda perihal</td>
				<td>Keterangan</td>
			</tr>
			<tr>
				<td><input type="checkbox" name=""></td>
				<td>melakukan perjalanan dinas</td>
				<td></td>
			</tr>		
		</tbody>
	</table>
	<table class="table-alamat">
		<tbody>
			<tr>
				<td>Apakah anda memiliki keluarga, kerabat, atau teman yang bekerja di YBPI? sebutkan?</td>
				<td><input type="checkbox" name=""></td>
			</tr>
			<tr>
				<td>Apakah anda pernah melamar ke YBPI sebelumnya?, jika ya, kapan dan untuk posisi apa?</td>
				<td><input type="checkbox" name=""></td>
			</tr>		
			<tr>
				<td>Apakah Anda pernah terlibat dengan pihak Kepolisian berkaitan dengan isu pelanggaran kriminal, persidangan atau pelanggaran perdata?</td>
				<td><input type="checkbox" name=""></td>
			</tr>
			<tr>
				<td>Apakah Anda memiliki kepemilikan atau keterikatan dengan perusahaan lain?</td>
				<td><input type="checkbox" name=""></td>
			</tr>	
			<tr>
				<td>Jika Anda diterima, kapan Anda dapat mulai bekerja?</td>
				<td><input type="checkbox" name=""></td>
			</tr>
		</tbody>
	</table>
	
</div>
<div class="col-md-12">
	<div class="col-md-12">
		<p>Dengan ini Saya menyatakan bahwa semua data yang Saya tuliskan diatas adalah benar. Saya menyadari bahwa ketidakjujuran mengenai data-data di atas dapat mengakibatkan pembatalan atau pemutusan hubungan kerja dari pihak perusahaan. </p>
	</div>
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