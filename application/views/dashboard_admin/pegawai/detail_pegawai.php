<?php include "application/views/dashboard_admin/home/header.php" ?>
    <div class="container">
	
	<div class="well">
	  <div class="row">
		<div class="span">
		  <h3><?php echo $judul_lengkap.' '.$instansi; ?></h3>
		  <p><?php echo $alamat; ?></p>
		</div>
	  </div>
	</div>
	
	<header class="jumbotron subhead" id="overview">
	  <div class="subnav">
		<ul class="nav nav-pills">
		  <li><a href="#data-pegawai">Pegawai</a></li>
		  <li><a href="#data-keluarga">Keluarga</a></li>
		  <li><a href="#data-pangkat">Riwayat Pangkat</a></li>
		  <li><a href="#data-jabatan">Riwayat Jabatan</a></li>
		  <li><a href="#data-pendidikan">Pendidikan</a></li>
		  <li><a href="#data-pelatihan">Pelatihan</a></li>
		  <li><a href="#data-penghargaan">Penghargaan</a></li>
		  <li><a href="#data-seminar">Seminar</a></li>
		  <li><a href="#data-organisasi">Organisasi</a></li>
		  <li><a href="#data-gaji">Gaji Pokok</a></li>
		  <li><a href="#data-hukuman">Hukuman</a></li>
		  <li><a href="#data-dp3">Penilaian</a></li>
		  <li><a href="#data-pekerjaan" class="line-menu">Riwayat Pekerjaan</a></li>
		  <li><a href="#data-atasan_pekerjaan" class="line-menu">Atasan Pekerjaan</a></li>
		  <li><a href="#data-kesehatan" class="line-menu">Riwayat Kesehatan</a></li>
		  <li><a href="#data-referensi" class="line-menu">Referensi</a></li>
		  <li><a href="#data-lain" class="line-menu">Lain - Lain</a></li>
		</ul>
	  </div>
	</header>

<section id="data-pegawai">
  <div class="well">
  		<div class="col-md-8">
  			<div class="page-header">
    			<h1>Data Pegawai</h1>
  			</div>
  		</div>
  		
  			<div class="col-md-4 pull-right">
				<a class="btn" href="<?php echo base_url(); ?>pegawai/detail/<?php echo $this->session->userdata('id_pegawai'); ?>"><i class="icon-ok-circle"></i> Export ke PDF</a>			
			</div>
  		
  	
	
	
	<ul id="myTab" class="nav nav-tabs">
        <li class="active"><a href="#dtpegawai" data-toggle="tab">Data Pegawai</a></li>
        <li><a href="#dtpangkat" data-toggle="tab">Data Pangkat</a></li>
        <li><a href="#dtjabatan" data-toggle="tab">Data Jabatan</a></li>
        <li><a href="#dtfoto" data-toggle="tab">Foto Pegawai</a></li>
    </ul>
    <div id="myTabContent" class="tab-content">
        <div class="tab-pane fade in active" id="dtpegawai">
        <div class="control-group">
			<div class="span3"><strong>Nomor NPWP</strong></div>
			<div class="span">:</div>
			<div class="span6">
			  <input type="text" disabled="disabled" class="span6" name="no_npwp" id="no_npwp" value="<?php echo $no_npwp; ?>" placeholder="Nomor NPWP">
			</div>
		  </div>
		  <div class="control-group">
			<div class="span3"><strong>Nomor KTP</strong></div>
			<div class="span">:</div>
			<div class="span6">
			  <input type="text" disabled="disabled" class="span6" name="no_npwp" id="no_KTP" value="<?php echo $no_KTP; ?>" placeholder="Nomor KTP">
			</div>
		  </div>
		  <div class="control-group">
			<div class="span3"><strong>Nomor KK</strong></div>
			<div class="span">:</div>
			<div class="span6">
			  <input type="text" disabled="disabled" class="span6" name="no_KK" id="no_KTP" value="<?php echo $no_KTP; ?>" placeholder="Nomor KK">
			</div>
		  </div>
		  <div class="control-group">
			<div class="span3"><strong>Nomor BPJS Pegawai</strong></div>
			<div class="span">:</div>
			<div class="span6">
			  <input type="text" disabled="disabled" class="span6" name="kartu_askes_pegawai" id="kartu_askes_pegawai" value="<?php echo $kartu_askes_pegawai; ?>" placeholder="Kartu BPJS Pegawai">
			</div>
		  </div>
        <div class="control-group">
			<div class="span3"><strong>NIK</strong></div>
			<div class="span">:</div>
			<div class="span6">
			  <input type="text" disabled="disabled" class="span6" name="nip" id="nip" value="<?php echo $nip; ?>" placeholder="NIP">
			</div>
		  </div>
		  <div class="control-group">
			<div class="span3"><strong>NIK Lama</strong></div>
			<div class="span">:</div>
			<div class="span6">
			  <input type="text" disabled="disabled" class="span6" name="nip_lama" id="nip_lama" value="<?php echo $nip_lama; ?>" placeholder="NIP Lama">
			</div>
		  </div>
		  
		  <div class="control-group">
			<div class="span3"><strong>Nama Pegawai</strong></div>
			<div class="span">:</div>
			<div class="span6">
			  <input type="text" disabled="disabled" class="span6" name="nama_pegawai" id="nama_pegawai" value="<?php echo $nama_pegawai; ?>" placeholder="Nama Pegawai">
			</div>
		  </div>
		  <div class="control-group">
			<div class="span3"><strong>Tempat Lahir</strong></div>
			<div class="span">:</div>
			<div class="span6">
			  <input type="text" disabled="disabled" class="span6" name="tempat_lahir" id="tempat_lahir" value="<?php echo $tempat_lahir; ?>" placeholder="Tempat Lahir">
			</div>
		  </div>
		  
		  
		  <div class="control-group">
			<div class="span3"><strong>Tanggal Lahir</strong></div>
			<div class="span">:</div>
			<div class="span6">
			  <input type="text" disabled="disabled" class="span6" name="tanggal_lahir" id="tanggal_lahir" value="<?php echo $tanggal_lahir; ?>" placeholder="Tanggal Lahir">
			</div>
		  </div>
		  <div class="control-group">
			<div class="span3"><strong>Jenis Kelamin</strong></div>
			<div class="span">:</div>
			<div class="span6">
				<select disabled="disabled" data-placeholder="Jenis Kelamin" class="chzn-select" style="width:500px;" tabindex="2" name="jenis_kelamin" id="jenis_kelamin">
					<?php
					$laki="";$perempuan="";$kosong1="";
					if($jenis_kelamin=="Laki-Laki"){ $laki='selected="selected"';$perempuan="";$kosong1=""; }
					else if($jenis_kelamin=="Perempuan"){ $laki='';$perempuan='selected="selected"';$kosong1=""; }
					else { $laki='';$perempuan='';$kosong1='selected="selected"'; }
					?>
          			<option value="" <?php echo $kosong1; ?>></option>
          			<option value="Laki-Laki" <?php echo $laki; ?>>Laki-Laki</option>
          			<option value="Perempuan" <?php echo $perempuan; ?>>Perempuan</option>
				</select>
			</div>
		  </div>
		  <div class="control-group">
			<div class="span3"><strong>Agama</strong></div>
			<div class="span">:</div>
			<div class="span6">
				<select disabled="disabled" data-placeholder="Agama" class="chzn-select" style="width:500px;" tabindex="2" name="agama" id="agama">
					<?php
					$islam="";$hindu="";$budha="";$protestan="";$katolik="";$konghucu="";$lainnya="";$kosong="";$kristen="";
					if($agama==""){ $islam='';$hindu='';$budha='';$protestan='';$katolik='';$konghucu='';$lainnya='';$kosong='selected="selected"';$kristen=""; }
					else if($agama=="Hindu"){ $islam='';$hindu='selected="selected"';$budha='';$protestan='';$katolik='';$konghucu='';$lainnya='';$kristen="";$kosong=""; }
					else if($agama=="Budha"){ $islam='';$hindu='';$budha='selected="selected"';$protestan='';$katolik='';$konghucu='';$lainnya='';$kristen="";$kosong=""; }
					else if($agama=="Kristen"){ $islam='';$hindu='';$budha='';$protestan='';$katolik='';$konghucu='';$lainnya='';$kosong="";$kristen='selected="selected"'; }
					else if($agama=="Kristen Protestan"){ $islam='';$hindu='';$budha='';$protestan='selected="selected"';$katolik='';$konghucu='';$kristen="";$lainnya='';$kosong=""; }
					else if($agama=="Kristen Katolik"){ $islam='';$hindu='';$budha='';$protestan='';$katolik='selected="selected"';$konghucu='';$kristen="";$lainnya='';$kosong=""; }
					else if($agama=="Konghucu"){ $islam='';$hindu='';$budha='';$protestan='';$katolik='';$konghucu='selected="selected"';$lainnya='';$kristen="";$kosong=""; }
					else if($agama=="Lainnya"){ $islam='';$hindu='';$budha='';$protestan='';$katolik='';$konghucu='';$lainnya='selected="selected"';$kristen="";$kosong=""; }
					else if($agama=="Islam"){ $islam='selected="selected"';$hindu='';$budha='';$protestan='';$katolik='';$konghucu='';$lainnya='';$kristen="";$kosong=""; }
					?>
          			<option value="" <?php echo $kosong; ?>></option>
          			<option value="Islam" <?php echo $islam; ?>>Islam</option>
          			<option value="Hindu" <?php echo $hindu; ?>>Hindu</option>
          			<option value="Budha" <?php echo $budha; ?>>Budha</option>
          			<option value="Kristen" <?php echo $kristen; ?>>Kristen</option>
          			<option value="Kristen Protestan" <?php echo $protestan; ?>>Kristen Protestan</option>
          			<option value="Kristen Katolik" <?php echo $katolik; ?>>Kristen Katolik</option>
          			<option value="Konghucu" <?php echo $konghucu; ?>>Konghucu</option>
          			<option value="Lainnya" <?php echo $lainnya; ?>>Lainnya</option>
				</select>
			</div>
		  </div>
		  <div class="control-group">
			<div class="span3"><strong>Usia</strong></div>
			<div class="span">:</div>
			<div class="span6">
			  <input type="text" disabled="disabled" class="span6" name="usia" id="usia" value="<?php echo $usia; ?>" placeholder="Usia">
			</div>
		  </div>
		  <div class="control-group">
			<div class="span3"><strong>Status Pegawai</strong></div>
			<div class="span">:</div>
			<div class="span6">
				<select disabled="disabled" data-placeholder="Status Pegawai" class="chzn-select" style="width:500px;" tabindex="2" name="status_pegawai" id="status_pegawai">
          			<option value=""></option>
					<?php
						foreach($mst_status_pegawai->result_array() as $sp)
						{
							if($sp['id_status_pegawai']==$status_pegawai)
							{
					?>
						<option value="<?php echo $sp['id_status_pegawai']; ?>" selected="selected"><?php echo $sp['nama_status']; ?></option>
					<?php
							}
							else
							{
					?>
						<option value="<?php echo $sp['id_status_pegawai']; ?>"><?php echo $sp['nama_status']; ?></option>
					<?php
							}
						}
					?>
				</select>
			</div>
		  </div>
		  <div class="control-group">
			<div class="span3"><strong>Tanggal Pengangkatan CAPEG</strong></div>
			<div class="span">:</div>
			<div class="span6">
			  <input type="text" disabled="disabled" class="span6" name="tanggal_pengangkatan_cpns" id="tanggal_pengangkatan_cpns" value="<?php echo $tanggal_pengangkatan_cpns; ?>" placeholder=
			  "Tanggal Pengangkatan Capeg">
			</div>
		  </div>
		  <div class="control-group">
			<div class="span3"><strong>Alamat</strong></div>
			<div class="span">:</div>
			<div class="span6">
				<textarea disabled="disabled" class="span6" style="outline:none; resize:none;" name="alamat" id="alamat" placeholder=
			  "Alamat"><?php echo $alamat_pegawai; ?></textarea>
			</div>
		  </div>
    	</div>
        <div class="tab-pane fade" id="dtpangkat">
          <div class="control-group">
			<div class="span3"><strong>Status Pegawai</strong></div>
			<div class="span">:</div>
			<div class="span6">
			<select disabled="disabled" name="status_pegawai_pangkat">
			  	<?php
			  		foreach($mst_status_pegawai->result_array() as $msp)
			  		{
			  			if($status_pegawai_pangkat==$msp['id_status_pegawai'])
			  			{
			  	?>
			  		<option value="<?php echo $msp['id_status_pegawai']; ?>" selected="selected"><?php echo $msp['nama_status']; ?></option>
			  	<?php
			  			}
			  			else
			  			{
			  	?>
			  		<option value="<?php echo $msp['id_status_pegawai']; ?>"><?php echo $msp['nama_status']; ?></option>
			  	<?php
			  			}
			  		}
			  	?>
			</select>
			</div>
		  </div>
          <div class="control-group">
			<div class="span3"><strong>Golongan</strong></div>
			<div class="span">:</div>
			<div class="span6">
			<select disabled="disabled" name="id_golongan">
			  	<?php
			  		foreach($mst_golongan->result_array() as $mg)
			  		{
			  			if($id_golongan==$mg['id_golongan'])
			  			{
			  	?>
			  		<option value="<?php echo $mg['id_golongan']; ?>" selected="selected"><?php echo $mg['golongan']; ?></option>
			  	<?php
			  			}
			  			else
			  			{
			  	?>
			  		<option value="<?php echo $mg['id_golongan']; ?>"><?php echo $mg['golongan']; ?></option>
			  	<?php
			  			}
			  		}
			  	?>
			</select>
			</div>
		  </div>
          <div class="control-group">
			<div class="span3"><strong>Nomor SK</strong></div>
			<div class="span">:</div>
			<div class="span6">
			  <input type="text" disabled="disabled" class="span6" name="nomor_sk_pangkat" id="nomor_sk_pangkat" value="<?php echo $nomor_sk_pangkat; ?>" placeholder=
			  "Nomor SK Pangkat">
			</div>
		  </div>
          <div class="control-group">
			<div class="span3"><strong>Tanggal SK</strong></div>
			<div class="span">:</div>
			<div class="span6">
			  <input type="text" disabled="disabled" class="span6" name="tanggal_sk_pangkat" id="tanggal_sk_pangkat" value="<?php echo $tanggal_sk_pangkat; ?>" placeholder=
			  "Tanggal SK Pangkat">
			</div>
		  </div>
          <div class="control-group">
			<div class="span3"><strong>Tanggal Mulai</strong></div>
			<div class="span">:</div>
			<div class="span6">
			  <input type="text" disabled="disabled" class="span6" name="tanggal_mulai_pangkat" id="tanggal_mulai_pangkat" value="<?php echo $tanggal_mulai_pangkat; ?>" placeholder=
			  "Tanggal Mulai Pangkat">
			</div>
		  </div>
          <div class="control-group">
			<div class="span3"><strong>Tanggal Selesai</strong></div>
			<div class="span">:</div>
			<div class="span6">
			  <input type="text" disabled="disabled" class="span6" name="tanggal_selesai_pangkat" id="tanggal_selesai_pangkat" value="<?php echo $tanggal_selesai_pangkat; ?>" placeholder=
			  "Tanggal Selesai Pangkat">
			</div>
		  </div>
        </div>
        <div class="tab-pane fade" id="dtjabatan">
        	<div class="control-group">
			<div class="span3"><strong>Lokasi Kerja</strong></div>
			<div class="span">:</div>
			<div class="span6">
			<select data-placeholder="Lokasi Kerja" disabled="disabled" class="chzn-select" style="width:500px;" tabindex="2" name="lokasi_kerja" id="lokasi_kerja">
			<option value=""></option>
			  	<?php
			  		foreach($mst_lokasi_kerja->result_array() as $me)
			  		{
			  			if($lokasi_kerja==$me['id_lokasi_kerja'])
			  			{
			  	?>
			  		<option value="<?php echo $me['id_lokasi_kerja']; ?>" selected="selected"><?php echo $me['lokasi_kerja']; ?></option>
			  	<?php
			  			}
			  			else
			  			{
			  	?>
			  		<option value="<?php echo $me['id_lokasi_kerja']; ?>"><?php echo $me['lokasi_kerja']; ?></option>
			  	<?php
			  			}
			  		}
			  	?>
			</select>
			</div>
		  </div>
          <div class="control-group">
			<div class="span3"><strong>Status Jabatan</strong></div>
			<div class="span">:</div>
			<div class="span6">
			<select disabled="disabled" name="id_status_jabatan">
			  	<?php
			  		foreach($mst_stts_jabatan->result_array() as $msj)
			  		{
			  			if($id_status_jabatan==$msj['id_status_jabatan'])
			  			{
			  	?>
			  		<option value="<?php echo $msj['id_status_jabatan']; ?>" selected="selected"><?php echo $msj['nama_jabatan']; ?></option>
			  	<?php
			  			}
			  			else
			  			{
			  	?>
			  		<option value="<?php echo $msj['id_status_jabatan']; ?>"><?php echo $msj['nama_jabatan']; ?></option>
			  	<?php
			  			}
			  		}
			  	?>
			</select>
			</div>
		  </div>
          <div class="control-group">
			<div class="span3"><strong>Jabatan</strong></div>
			<div class="span">:</div>
			<div class="span6">
			<select disabled="disabled" name="id_jabatan">
			  	<?php
			  		foreach($mst_jabatan->result_array() as $mj)
			  		{
			  			if($id_jabatan==$mj['id_jabatan'])
			  			{
			  	?>
			  		<option value="<?php echo $mj['id_jabatan']; ?>" selected="selected"><?php echo $mj['nama_jabatan']; ?></option>
			  	<?php
			  			}
			  			else
			  			{
			  	?>
			  		<option value="<?php echo $mj['id_jabatan']; ?>"><?php echo $mj['nama_jabatan']; ?></option>
			  	<?php
			  			}
			  		}
			  	?>
			</select>
			</div>
		  </div>
          <div class="control-group">
			<div class="span3"><strong>Unit Kerja</strong></div>
			<div class="span">:</div>
			<div class="span6">
			<select disabled="disabled" name="id_unit_kerja">
			  	<?php
			  		foreach($mst_unit_kerja->result_array() as $muk)
			  		{
			  			if($id_unit_kerja==$muk['id_unit_kerja'])
			  			{
			  	?>
			  		<option value="<?php echo $muk['id_unit_kerja']; ?>" selected="selected"><?php echo $muk['nama_unit_kerja']; ?></option>
			  	<?php
			  			}
			  			else
			  			{
			  	?>
			  		<option value="<?php echo $muk['id_unit_kerja']; ?>"><?php echo $muk['nama_unit_kerja']; ?></option>
			  	<?php
			  			}
			  		}
			  	?>
			</select>
			</div>
		  </div>
          <div class="control-group">
			<div class="span3"><strong>Satuan Kerja</strong></div>
			<div class="span">:</div>
			<div class="span6">
			<select disabled="disabled" name="id_satuan_kerja">
			  	<?php
			  		foreach($mst_satuan_kerja->result_array() as $msk)
			  		{
			  			if($id_satuan_kerja==$msk['id_satuan_kerja'])
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
		  </div>
          
          <div class="control-group">
			<div class="span3"><strong>Nomor SK</strong></div>
			<div class="span">:</div>
			<div class="span6">
			  <input type="text" disabled="disabled" class="span6" name="nomor_sk_jabatan" id="nomor_sk_jabatan" value="<?php echo $nomor_sk_jabatan; ?>" placeholder=
			  "Nomor SK Jabatan">
			</div>
		  </div>
          <div class="control-group">
			<div class="span3"><strong>Tanggal SK</strong></div>
			<div class="span">:</div>
			<div class="span6">
			  <input type="text" disabled="disabled" class="span6" name="tanggal_sk_jabatan" id="tanggal_sk_jabatan" value="<?php echo $tanggal_sk_jabatan; ?>" placeholder=
			  "Tanggal SK Jabatan">
			</div>
		  </div>
          <div class="control-group">
			<div class="span3"><strong>Tanggal Mulai</strong></div>
			<div class="span">:</div>
			<div class="span6">
			  <input type="text" disabled="disabled" class="span6" name="tanggal_mulai_jabatan" id="tanggal_mulai_jabatan" value="<?php echo $tanggal_mulai_jabatan; ?>" placeholder=
			  "Tanggal Mulai Jabatan">
			</div>
		  </div>
          <div class="control-group">
			<div class="span3"><strong>Tanggal Selesai</strong></div>
			<div class="span">:</div>
			<div class="span6">
			  <input type="text" disabled="disabled" class="span6" name="tanggal_selesai_jabatan" id="tanggal_selesai_jabatan" value="<?php echo $tanggal_selesai_jabatan; ?>" placeholder=
			  "Tanggal Selesai Jabatan">
			</div>
		  </div>
          <div class="control-group">
			<div class="span3"><strong>Pangkat</strong></div>
			<div class="span">:</div>
			<div class="span6">
			<select disabled="disabled" name="id_eselon">
			  	<?php
			  		foreach($mst_eselon->result_array() as $me)
			  		{
			  			if($id_eselon==$me['id_eselon'])
			  			{
			  	?>
			  		<option value="<?php echo $me['id_eselon']; ?>" selected="selected"><?php echo $me['nama_eselon']; ?></option>
			  	<?php
			  			}
			  			else
			  			{
			  	?>
			  		<option value="<?php echo $me['id_eselon']; ?>"><?php echo $me['nama_eselon']; ?></option>
			  	<?php
			  			}
			  		}
			  	?>
			</select>
			</div>
		  </div>
          <div class="control-group">
			<div class="span3"><strong>TMT Pangkat</strong></div>
			<div class="span">:</div>
			<div class="span6">
			  <input type="text" disabled="disabled" class="span6" name="tmt_eselon" id="tmt_eselon" value="<?php echo $tmt_eselon; ?>" placeholder=
			  "TMT Pangkat">
			</div>
		  </div>
        </div>
	<div class="tab-pane fade" id="dtfoto">
        
			<?php
				$ft = $foto;
				if($ft=="")
				{
					$ft="no-img.jpg";
				}
			?>
          <div class="control-group">
			<label class="control-label" for="nip">Foto Pegawai</label>
			<div class="controls">
			<p><img src="<?php echo base_url(); ?>asset/foto_pegawai/medium/<?php echo $ft; ?>" /></p>
			</div>
		</div>
	</div>
    </div>
	</div>
</section>

<section id="data-keluarga">
  <div class="well">
	<div class="page-header">
    	<h1>Data Keluarga</h1>
  	</div>
  	<table class="table table-hover table-condensed">
    <thead>
      <tr>
        <th>No.</th>
        <th>Nama Keluarga</th>
		<th>Tanggal Lahir</th>
        <th>Status Kawin</th>
        <th>Tanggal Nikah</th>
		<th>Pekerjaan</th>
      </tr>
    </thead>
    <tbody>
	<?php
		$no=1;
		foreach($data_keluarga->result_array() as $dk)
		{
	?>
      <tr>
        <td><?php echo $no; ?></td>
        <td><?php echo $dk['nama_anggota_keluarga']; ?></td>
        <td><?php echo $dk['tanggal_lahir']; ?></td>
        <td><?php echo $dk['status_kawin']; ?></td>
        <td><?php echo $dk['tanggal_nikah']; ?></td>
        <td><?php echo $dk['pekerjaan']; ?></td>
      </tr>
	 <?php
	 		$no++;
	 	}
	 ?>
    </tbody>
  </table>
  </div>
</section>

<section id="data-pangkat">
  <div class="well">
	<div class="page-header">
    	<h1>Data Riwayat Pangkat</h1>
  	</div>
  	
  	<table class="table table-hover table-condensed">
    <thead>
      <tr>
        <th>No.</th>
        <th>Golongan</th>
		<th>Status</th>
        <th>Nomor SK</th>
        <th>Tanggal SK</th>
		<th>Tanggal Mulai</th>
		<th>Tanggal Selesai</th>
		<th>Masa Kerja</th>
      </tr>
    </thead>
    <tbody>
	<?php
		$no=1;
		foreach($data_riwayat_pangkat->result_array() as $drp)
		{
	?>
      <tr>
        <td><?php echo $no; ?></td>
        <td><?php echo $drp['golongan']; ?></td>
        <td><?php echo $drp['status']; ?></td>
        <td><?php echo $drp['nomor_sk']; ?></td>
        <td><?php echo $drp['tanggal_sk']; ?></td>
        <td><?php echo $drp['tanggal_mulai']; ?></td>
        <td><?php echo $drp['tanggal_selesai']; ?></td>
        <td><?php echo $drp['masa_kerja']; ?></td>
      </tr>
	 <?php
	 		$no++;
	 	}
	 ?>
    </tbody>
  </table>
  </div>
</section>

<section id="data-jabatan">
  <div class="well">
	<div class="page-header">
    	<h1>Data Riwayat Jabatan</h1>
  	</div>
  	
  	<table class="table table-hover table-condensed">
    <thead>
      <tr>
        <th>No.</th>
        <th>Status</th>
		<th>Penempatan</th>
        <th>Jabatan</th>
        <th>Unit Kerja</th>
		<th>Pangkat</th>
      </tr>
    </thead>
    <tbody>
	<?php
		$no=1;
		foreach($data_riwayat_jabatan->result_array() as $drj)
		{
	?>
      <tr>
        <td><?php echo $no; ?></td>
        <td><?php echo $drj['status']; ?></td>
        <td><?php echo $drj['penempatan']; ?></td>
        <td><?php echo $drj['nama_jabatan']; ?></td>
        <td><?php echo $drj['nama_unit_kerja']; ?></td>
        <td><?php echo $drj['nama_eselon']; ?></td>
		
      </tr>
	 <?php
	 		$no++;
	 	}
	 ?>
    </tbody>
  </table>
  </div>
</section>

<section id="data-pendidikan">
  <div class="well">
	<div class="page-header">
    	<h1>Data Pendidikan</h1>
  	</div>
  	
  	<table class="table table-hover table-condensed">
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
		foreach($data_pendidikan->result_array() as $dpn)
		{
	?>
      <tr>
        <td><?php echo $no; ?></td>
        <td><?php echo $dpn['tingkat_pendidikan']; ?></td>
        <td><?php echo $dpn['jurusan']; ?></td>
        <td><?php echo $dpn['teknik_non_teknik']; ?></td>
        <td><?php echo $dpn['sekolah']; ?></td>
        <td><?php echo $dpn['tanggal_lulus']; ?></td>
      </tr>
	 <?php
	 		$no++;
	 	}
	 ?>
    </tbody>
  </table>
  </div>

</section>

<section id="data-pelatihan">
  <div class="well">
	<div class="page-header">
    	<h1>Data Pelatihan</h1>
  	</div>
  	
  	<table class="table table-hover table-condensed">
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
		foreach($data_pelatihan->result_array() as $dpl)
		{
	?>
      <tr>
        <td><?php echo $no; ?></td>
        <td><?php echo $dpl['nama_pelatihan']; ?></td>
        <td><?php echo $dpl['lokasi']; ?></td>
        <td><?php echo $dpl['tanggal_sertifikat']; ?></td>
        <td><?php echo $dpl['jam_pelatihan']; ?></td>
        <td><?php echo $dpl['negara']; ?></td>
      </tr>
	 <?php
	 		$no++;
	 	}
	 ?>
    </tbody>
  </table>
  </div>
</section>

<section id="data-penghargaan">
  <div class="well">
	<div class="page-header">
    	<h1>Data Penghargaan</h1>
  	</div>
  	
  	<table class="table table-hover table-condensed">
    <thead>
      <tr>
        <th>No.</th>
        <th>Nama Penghargaan</th>
		<th>Nomor SK</th>
        <th>Tanggal SK</th>
      </tr>
    </thead>
    <tbody>
	<?php
		$no=1;
		foreach($data_penghargaan->result_array() as $drj)
		{
	?>
      <tr>
        <td><?php echo $no; ?></td>
        <td><?php echo $drj['nama_penghargaan']; ?></td>
        <td><?php echo $drj['nomor_sk']; ?></td>
        <td><?php echo $drj['tanggal_sk']; ?></td>
      </tr>
	 <?php
	 		$no++;
	 	}
	 ?>
    </tbody>
  </table>
  </div>
</section>

<section id="data-seminar">
  <div class="well">
	<div class="page-header">
    	<h1>Data Seminar</h1>
  	</div>
  	
  	<table class="table table-hover table-condensed">
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
		foreach($data_seminar->result_array() as $ds)
		{
	?>
      <tr>
        <td><?php echo $no; ?></td>
        <td><?php echo $ds['uraian']; ?></td>
        <td><?php echo $ds['lokasi']; ?></td>
        <td><?php echo $ds['tanggal']; ?></td>
      </tr>
	 <?php
	 		$no++;
	 	}
	 ?>
    </tbody>
  </table>
  </div>
</section>

<section id="data-organisasi">
  <div class="well">
	<div class="page-header">
    	<h1>Data Organisasi</h1>
  	</div>
  	
  	<table class="table table-hover table-condensed">
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
		foreach($data_organisasi->result_array() as $do)
		{
	?>
      <tr>
        <td><?php echo $no; ?></td>
        <td><?php echo $do['uraian']; ?></td>
        <td><?php echo $do['lokasi']; ?></td>
        <td><?php echo $do['tanggal']; ?></td>
      </tr>
	 <?php
	 		$no++;
	 	}
	 ?>
    </tbody>
  </table>
  </div>
</section>

<section id="data-gaji">
  <div class="well">
	<div class="page-header">
    	<h1>Data Gaji Pokok</h1>
  	</div>
  	
  	<table class="table table-hover table-condensed">
    <thead>
      <tr>
        <th>No.</th>
        <th>Golongan</th>
		<th>Nomor SK</th>
        <th>Tanggal SK</th>
        <th>Gaji Pokok</th>
		<th>Tanggal Mulai</th>
		<th>Tanggal Selesai</th>
      </tr>
    </thead>
    <tbody>
	<?php
		$no=1;
		foreach($data_gaji_pokok->result_array() as $dgp)
		{
	?>
      <tr>
        <td><?php echo $no; ?></td>
        <td><?php echo $dgp['golongan']; ?></td>
        <td><?php echo $dgp['nomor_sk']; ?></td>
        <td><?php echo $dgp['tanggal_sk']; ?></td>
        <td><?php echo "Rp. ".number_format($dgp['gaji_pokok'],2,',','.'); ?></td>
        <td><?php echo $dgp['tanggal_mulai']; ?></td>
        <td><?php echo $dgp['tanggal_selesai']; ?></td>
      </tr>
	 <?php
	 		$no++;
	 	}
	 ?>
    </tbody>
  </table>
  </div>
</section>

<section id="data-hukuman">
  <div class="well">
	<div class="page-header">
    	<h1>Data Hukuman</h1>
  	</div>
  	
  	<table class="table table-hover table-condensed">
    <thead>
      <tr>
        <th>No.</th>
        <th>Nama Hukuman</th>
		<th>Nomor SK</th>
        <th>Tanggal SK</th>
        <th>Tanggal Mulai</th>
		<th>Tanggal Selesai</th>
		<th>Masa Berlaku</th>
      </tr>
    </thead>
    <tbody>
	<?php
		$no=1;
		foreach($data_hukuman->result_array() as $dh)
		{
	?>
      <tr>
        <td><?php echo $no; ?></td>
        <td><?php echo $dh['nama_hukuman']; ?></td>
        <td><?php echo $dh['nomor_sk']; ?></td>
        <td><?php echo $dh['tanggal_sk']; ?></td>
        <td><?php echo $dh['tanggal_mulai']; ?></td>
        <td><?php echo $dh['tanggal_selesai']; ?></td>
        <td><?php echo $dh['masa_berlaku']; ?></td>
      </tr>
	 <?php
	 		$no++;
	 	}
	 ?>
    </tbody>
  </table>
  </div>
</section>

<section id="data-dp3">
  <div class="well">
	<div class="page-header">
    	<h1>Data Penilaian Atasan</h1>
  	</div>
  	
  	<table class="table table-hover table-condensed">
    <thead>
      <tr>
        <th>No.</th>
        <th>Tahun</th>
		<th>Rata-Rata</th>
		<th>Atasan</th>
        <th>Penilai</th>
        <th>Mengetahui</th>
      </tr>
    </thead>
    <tbody>
	<?php
		$no=1;
		foreach($data_dp3->result_array() as $dp3)
		{
	?>
      <tr>
        <td><?php echo $no; ?></td>
        <td><?php echo $dp3['tahun']; ?></td>
        <td><?php echo $dp3['rata_rata']; ?></td>
        <td><?php echo $dp3['atasan']; ?></td>
        <td><?php echo $dp3['penilai']; ?></td>
        <td><?php echo $dp3['mengetahui']; ?></td>
      </tr>
	 <?php
	 		$no++;
	 	}
	 ?>
    </tbody>
  </table>
  </div>
</section>
<section id="data-dp3">
  <div class="well">
	<div class="page-header">
    	<h1>Data Riwayat Jabatan</h1>
  	</div>
  	
  	<table class="table table-hover table-condensed">
    <thead>
      <tr>
        <th>No.</th>
        <th>Nama Perusahaan</th>
		<th>Jabatan</th>
        <th>Dari Tanggal</th>
        <th>Sampai Tanggal</th>
      </tr>
    </thead>
    <tbody>
	<?php
		$no=1;
		foreach($data_dp3->result_array() as $dp3)
		{
	?>
      <tr>
        <td><?php echo $no; ?></td>
        <td><?php echo $dp3['tahun']; ?></td>
        <td><?php echo $dp3['rata_rata']; ?></td>
        <td><?php echo $dp3['atasan']; ?></td>
        <td><?php echo $dp3['penilai']; ?></td>
        <td><?php echo $dp3['mengetahui']; ?></td>
      </tr>
	 <?php
	 		$no++;
	 	}
	 ?>
    </tbody>
  </table>
  </div>
</section>
<section id="data-pekerjaan">
	  <div class="well">
		<div class="page-header">
	    	<h1>Data Riwayat Pekerjaan</h1>
	  	</div>
	  	<table class="table table-hover table-condensed">
	    <thead>
	      <tr>
	        <th>No.</th>
	        <th>Nama Perusahaan</th>
			<th>Jabatan</th>
			<th>Dari Tanggal</th>
	        <th>Sampai Tanggal</th>
			
	      </tr>
	    </thead>
	    <tbody>
		<?php
			$no=1;
			foreach($data_riwayat_pekerjaan->result_array() as $dp3)
			{
		?>
	      <tr>
	        <td><?php echo $no; ?></td>
	        <td><?php echo $dp3['nama_perusahaan'] ?></td>
	        <td><?php echo $dp3['bidang_perusahaan'] ?></td>
	        <td><?php echo $dp3['tanggal_awal_pekerjaan'] ?></td>
	        <td><?php echo $dp3['tanggal_akhir_pekerjaan'] ?></td>
			
	      </tr>
		 <?php
		 		$no++;
		 	}
		 ?>
	    </tbody>
	  </table>
	  </div>
	</section>
	<section id="data-pekerjaan">
	  <div class="well">
		<div class="page-header">
	    	<h1>Data Atasan Pekerjaan</h1>
	  	</div>
	  	<table class="table table-hover table-condensed">
	    <thead>
	      <tr>
	        <th>No.</th>
	        <th>Nama</th>
			<th>Jabatan</th>
			<th>Perusahaan</th>
	        <th>No Telepon</th>
			
	      </tr>
	    </thead>
	    <tbody>
		<?php
			$no=1;
			foreach($data_atasan_pekerjaan->result_array() as $dp3)
			{
		?>
	      <tr>
	        <td><?php echo $no; ?></td>
	        <td><?php echo $dp3['nama_atasan_pekerjaan'] ?></td>
	        <td><?php echo $dp3['jabatan_atasan_pekerjaan'] ?></td>
	        <td><?php echo $dp3['perusahaan_atasan_pekerjaan'] ?></td>
	        <td><?php echo $dp3['nomor_telepon_pekerjaan'] ?></td>
			
	      </tr>
		 <?php
		 		$no++;
		 	}
		 ?>
	    </tbody>
	  </table>
	  </div>
	</section>
	<section id="data-kesehatan">
	  <div class="well">
		<div class="page-header">
	    	<h1>Data Riwayat Kesehatan</h1>
	  	</div>

	  	<table class="table table-hover table-condensed">
	    <thead>
	      <tr>
	        <th>No.</th>
	        <th>Nama Penyakit</th>
			<th>Tanggal Dirawat</th>
			
	      </tr>
	    </thead>
	    <tbody>
		<?php
			$no=1;
			foreach($data_riwayat_kesehatan->result_array() as $dp3)
			{
		?>
	      <tr>
	        <td><?php echo $no; ?></td>
	        <td><?php echo $dp3['nama_penyakit'] ?></td>
	        <td><?php echo $dp3['tanggal_riwayat'] ?></td>
			
	      </tr>
		 <?php
		 		$no++;
		 	}
		 ?>
	    </tbody>
	  </table>
	  </div>
	</section>
	<section id="data-referensi">
	  <div class="well">
		<div class="page-header">
	    	<h1>Data Referensi</h1>
	  	</div>

	  	<table class="table table-hover table-condensed">
	    <thead>
	      <tr>
	        <th>No.</th>
	        <th>Nama</th>
			<th>Hubungan</th>
			<th>No Telp</th>
			<th>Jabatan</th>
			<th>Perusahaan</th>
	      </tr>
	    </thead>
	    <tbody>
		<?php
			$no=1;
			foreach($data_referensi->result_array() as $dp3)
			{
		?>
	      <tr>
	        <td><?php echo $no; ?></td>
	        <td><?php echo $dp3['nama_referensi'] ?></td>
	        <td><?php echo $dp3['hubungan_referensi'] ?></td>
			<td><?php echo $dp3['no_telepon_referensi'] ?></td>
			<td><?php echo $dp3['jabatan_referensi'] ?></td>
			<td><?php echo $dp3['perusahaan_referensi'] ?></td>
	      </tr>
		 <?php
		 		$no++;
		 	}
		 ?>
	    </tbody>
	  </table>
	  </div>
	</section>
	<section id="data-referensi">
	  <div class="well">
		<div class="page-header">
	    	<h1>Data Lain - Lain</h1>
	  	</div>

	  	<table class="table table-hover table-condensed">
	    <thead>
	      <tr>
	        <th>No.</th>
	        <th>Pertanyaan</th>
			<th>Keterangan</th>
	      </tr>
	    </thead>
	    <tbody>
		<?php
			$no=1;
			foreach($data_lain->result_array() as $dp3)
			{
		?>
	      <tr>
	        <td><?php echo $no; ?></td>
	        <td><?php foreach ($mst_pertanyaan->result_array() as $key) {
	        	if ($key['id_pertanyaan'] == $dp3['id_pertanyaan']) {
	        		echo $key['nama_pertanyaan'];
	        	}
	        } ?></td>
	        <td><?php echo $dp3['keterangan'] ?></td>
	      </tr>
		 <?php
		 		$no++;
		 	}
		 ?>
	    </tbody>
	  </table>
	  </div>
	</section>
<div class="container">
<?php include "application/views/dashboard_admin/home/footer.php" ?>	
</div>   
