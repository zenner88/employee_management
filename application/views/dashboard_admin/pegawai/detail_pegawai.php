<?php include "application/views/dashboard_admin/home/header.php" ?>
<div class="container">
	<div class="well">
<!-- 		
	<header class="jumbotron subhead" id="overview">
		<ul class="nav nav-tabs">
		  <li class="nav-item"><a href="#data-pegawai" class="nav-link">Pegawai</a></li>
		  <li class="nav-item"><a href="#data-keluarga" class="nav-link">Keluarga</a></li>
		  <li class="nav-item"><a href="#data-pangkat" class="nav-link">Riwayat Pangkat</a></li>
		  <li class="nav-item"><a href="#data-jabatan" class="nav-link">Riwayat Jabatan</a></li>
		  <li class="nav-item"><a href="#data-pendidikan" class="nav-link">Pendidikan</a></li>
		  <li class="nav-item"><a href="#data-pelatihan" class="nav-link">Pelatihan</a></li>
		  <li class="nav-item"><a href="#data-penghargaan" class="nav-link">Penghargaan</a></li>
		  <li class="nav-item"><a href="#data-seminar" class="nav-link">Seminar</a></li>
		  <li class="nav-item"><a href="#data-organisasi" class="nav-link">Organisasi</a></li>
		  <li class="nav-item"><a href="#data-gaji" class="nav-link">Gaji Pokok</a></li>
		  <li class="nav-item"><a href="#data-hukuman" class="nav-link">Hukuman</a></li>
		  <li class="nav-item"><a href="#data-dp3" class="nav-link">Penilaian</a></li>
		</ul>
	</header> -->

<section>
  <div>
	<div class="page-header">
    	<h1>Data Pegawai</h1>
  	</div>
		<ul class="nav nav-tabs">
		<li class="nav-item"><a href="#dtpegawai" class="nav-link active" data-toggle="tab">Data Pegawai</a></li>
		<li class="nav-item"><a href="#dtpangkat" class="nav-link" data-toggle="tab">Data Pangkat</a></li>
		<li class="nav-item"><a href="#dtjabatan" class="nav-link" data-toggle="tab">Data Jabatan</a></li>
		<li class="nav-item"><a href="#dtfoto"  class="nav-link" data-toggle="tab">Foto Pegawai</a></li>
  </ul>
    <div id="myTabContent" class="tab-content">
        <div class="tab-pane active" id="dtpegawai">
				<div class="row">
				<div class="col-sm-12">
					<div class="card">
						<div class="card-block">

        <div class="control-group">
			<div class="span3"><strong>NIK</strong></div>
			<div class="span"></div>
			<div class="span6">
			  <input type="text" disabled="disabled" class="span6" name="nip" id="nip" value="<?php echo $nip; ?>" placeholder="NIP">
			</div>
		  </div>
		  <div class="control-group">
			<div class="span3"><strong>NIK Lama</strong></div>
			<div class="span"></div>
			<div class="span6">
			  <input type="text" disabled="disabled" class="span6" name="nip_lama" id="nip_lama" value="<?php echo $nip_lama; ?>" placeholder="NIP Lama">
			</div>
		  </div>
		  <div class="control-group">
			<div class="span3"><strong>Nomor Kartu Pegawai</strong></div>
			<div class="span"></div>
			<div class="span6">
			  <input type="text" disabled="disabled" class="span6" name="no_kartu_pegawai" id="no_kartu_pegawai" value="<?php echo $no_kartu_pegawai; ?>" placeholder="Nomor Kartu Pegawai">
			</div>
		  </div>
		  <div class="control-group">
			<div class="span3"><strong>Nama Pegawai</strong></div>
			<div class="span"></div>
			<div class="span6">
			  <input type="text" disabled="disabled" class="span6" name="nama_pegawai" id="nama_pegawai" value="<?php echo $nama_pegawai; ?>" placeholder="Nama Pegawai">
			</div>
		  </div>
		  <div class="control-group">
			<div class="span3"><strong>Tempat Lahir</strong></div>
			<div class="span"></div>
			<div class="span6">
			  <input type="text" disabled="disabled" class="span6" name="tempat_lahir" id="tempat_lahir" value="<?php echo $tempat_lahir; ?>" placeholder="Tempat Lahir">
			</div>
		  </div>
		  <div class="control-group">
			<div class="span3"><strong>Nomor NPWP</strong></div>
			<div class="span"></div>
			<div class="span6">
			  <input type="text" disabled="disabled" class="span6" name="no_npwp" id="no_npwp" value="<?php echo $no_npwp; ?>" placeholder="Nomor NPWP">
			</div>
		  </div>
		  <div class="control-group">
			<div class="span3"><strong>Nomor KTP</strong></div>
			<div class="span"></div>
			<div class="span6">
			  <input type="text" disabled="disabled" class="span6" name="no_npwp" id="no_KTP" value="<?php echo $no_KTP; ?>" placeholder="Nomor KTP">
			</div>
		  </div>
		  <div class="control-group">
			<div class="span3"><strong>Nomor KK</strong></div>
			<div class="span"></div>
			<div class="span6">
			  <input type="text" disabled="disabled" class="span6" name="no_KK" id="no_KTP" value="<?php echo $no_KTP; ?>" placeholder="Nomor KK">
			</div>
		  </div>
		  <div class="control-group">
			<div class="span3"><strong>Kartu BPJS Pegawai</strong></div>
			<div class="span"></div>
			<div class="span6">
			  <input type="text" disabled="disabled" class="span6" name="kartu_askes_pegawai" id="kartu_askes_pegawai" value="<?php echo $kartu_askes_pegawai; ?>" placeholder="Kartu BPJS Pegawai">
			</div>
		  </div>
		  <div class="control-group">
			<div class="span3"><strong>Tanggal Lahir</strong></div>
			<div class="span"></div>
			<div class="span6">
			  <input type="text" disabled="disabled" class="span6" name="tanggal_lahir" id="tanggal_lahir" value="<?php echo $tanggal_lahir; ?>" placeholder="Tanggal Lahir">
			</div>
		  </div>
		  <div class="control-group">
			<div class="span3"><strong>Jenis Kelamin</strong></div>
			<div class="span"></div>
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
			<div class="span"></div>
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
			<div class="span"></div>
			<div class="span6">
			  <input type="text" disabled="disabled" class="span6" name="usia" id="usia" value="<?php echo $usia; ?>" placeholder="Usia">
			</div>
		  </div>
		  <div class="control-group">
			<div class="span3"><strong>Status Pegawai</strong></div>
			<div class="span"></div>
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
			<div class="span"></div>
			<div class="span6">
			  <input type="text" disabled="disabled" class="span6" name="tanggal_pengangkatan_cpns" id="tanggal_pengangkatan_cpns" value="<?php echo $tanggal_pengangkatan_cpns; ?>" placeholder=
			  "Tanggal Pengangkatan Capeg">
			</div>
		  </div>
		  <div class="control-group">
			<div class="span3"><strong>Alamat</strong></div>
			<div class="span"></div>
			<div class="span6">
				<textarea disabled="disabled" class="span6" style="outline:none; resize:none;" name="alamat" id="alamat" placeholder=
			  "Alamat"><?php echo $alamat_pegawai; ?></textarea>
			</div>
		  </div>
    	</div>
    	</div>
    	</div>
    	</div>
    	</div>

        <div class="tab-pane fade" id="dtpangkat">
				<div class="row">
				<div class="col-sm-12">
					<div class="card">
						<div class="card-block">

          <div class="control-group">
			<div class="span3"><strong>Status Pegawai</strong></div>
			<div class="span"></div>
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
			<div class="span"></div>
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
			<div class="span"></div>
			<div class="span6">
			  <input type="text" disabled="disabled" class="span6" name="nomor_sk_pangkat" id="nomor_sk_pangkat" value="<?php echo $nomor_sk_pangkat; ?>" placeholder=
			  "Nomor SK Pangkat">
			</div>
		  </div>
          <div class="control-group">
			<div class="span3"><strong>Tanggal SK</strong></div>
			<div class="span"></div>
			<div class="span6">
			  <input type="text" disabled="disabled" class="span6" name="tanggal_sk_pangkat" id="tanggal_sk_pangkat" value="<?php echo $tanggal_sk_pangkat; ?>" placeholder=
			  "Tanggal SK Pangkat">
			</div>
		  </div>
          <div class="control-group">
			<div class="span3"><strong>Tanggal Mulai</strong></div>
			<div class="span"></div>
			<div class="span6">
			  <input type="text" disabled="disabled" class="span6" name="tanggal_mulai_pangkat" id="tanggal_mulai_pangkat" value="<?php echo $tanggal_mulai_pangkat; ?>" placeholder=
			  "Tanggal Mulai Pangkat">
			</div>
		  </div>
          <div class="control-group">
			<div class="span3"><strong>Tanggal Selesai</strong></div>
			<div class="span"></div>
			<div class="span6">
			  <input type="text" disabled="disabled" class="span6" name="tanggal_selesai_pangkat" id="tanggal_selesai_pangkat" value="<?php echo $tanggal_selesai_pangkat; ?>" placeholder=
			  "Tanggal Selesai Pangkat">
			</div>
		  </div>
        </div>
        </div>
        </div>
        </div>
        </div>
				
        <div class="tab-pane fade" id="dtjabatan">
				<div class="row">
				<div class="col-sm-12">
					<div class="card">
						<div class="card-block">

				<div class="control-group">
			<div class="span3"><strong>Kelompok Pegawai</strong></div>
			<div class="span"></div>
			<div class="span6">
			<select disabled="disabled" name="id_kelompok_pegawai">
			  	<?php
			  		foreach($mst_kelompok_pegawai->result_array() as $msj)
			  		{
			  			if($id_kelompok_pegawai==$msj['id_kelompok_pegawai'])
			  			{
			  	?>
			  		<option value="<?php echo $msj['id_kelompok_pegawai']; ?>" selected="selected"><?php echo $msj['nama_kelompok_pegawai']; ?></option>
			  	<?php
			  			}
			  			else
			  			{
			  	?>
			  		<option value="<?php echo $msj['id_kelompok_pegawai']; ?>"><?php echo $msj['nama_kelompok_pegawai']; ?></option>
			  	<?php
			  			}
			  		}
			  	?>
			</select>
			</div>
		  </div>
          <div class="control-group">
					
			<div class="span3"><strong>Status Jabatan</strong></div>
			<div class="span"></div>
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
			<div class="span"></div>
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
			<div class="span"></div>
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
			<div class="span"></div>
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
			<div class="span3"><strong>Lokasi Kerja</strong></div>
			<div class="span"></div>
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
			<div class="span3"><strong>Nomor SK</strong></div>
			<div class="span"></div>
			<div class="span6">
			  <input type="text" disabled="disabled" class="span6" name="nomor_sk_jabatan" id="nomor_sk_jabatan" value="<?php echo $nomor_sk_jabatan; ?>" placeholder=
			  "Nomor SK Jabatan">
			</div>
		  </div>
          <div class="control-group">
			<div class="span3"><strong>Tanggal SK</strong></div>
			<div class="span"></div>
			<div class="span6">
			  <input type="text" disabled="disabled" class="span6" name="tanggal_sk_jabatan" id="tanggal_sk_jabatan" value="<?php echo $tanggal_sk_jabatan; ?>" placeholder=
			  "Tanggal SK Jabatan">
			</div>
		  </div>
          <div class="control-group">
			<div class="span3"><strong>Tanggal Mulai</strong></div>
			<div class="span"></div>
			<div class="span6">
			  <input type="text" disabled="disabled" class="span6" name="tanggal_mulai_jabatan" id="tanggal_mulai_jabatan" value="<?php echo $tanggal_mulai_jabatan; ?>" placeholder=
			  "Tanggal Mulai Jabatan">
			</div>
		  </div>
          <div class="control-group">
			<div class="span3"><strong>Tanggal Selesai</strong></div>
			<div class="span"></div>
			<div class="span6">
			  <input type="text" disabled="disabled" class="span6" name="tanggal_selesai_jabatan" id="tanggal_selesai_jabatan" value="<?php echo $tanggal_selesai_jabatan; ?>" placeholder=
			  "Tanggal Selesai Jabatan">
			</div>
		  </div>
          <div class="control-group">
			<div class="span3"><strong>Pangkat</strong></div>
			<div class="span"></div>
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
			<div class="span"></div>
			<div class="span6">
			  <input type="text" disabled="disabled" class="span6" name="tmt_eselon" id="tmt_eselon" value="<?php echo $tmt_eselon; ?>" placeholder=
			  "TMT Pangkat">
			</div>
		  </div>
        </div>
        </div>
        </div>
        </div>
        </div>
				
	<div class="tab-pane fade" id="dtfoto">
	<div class="row">
				<div class="col-sm-12">
					<div class="card">
						<div class="card-block">
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
	</div>
	</div>
	</div>
	</div>	
</section>

<section id="data-keluarga">
<div class="row">
<div class="col-sm-12">
<div class="card">
<div class="card-block">
    	<h1>Data Keluarga</h1>
  	<table class="table stylish-table">
    <thead>
      <tr>
        <th>No.</th>
        <th>Nama Keluarga</th>
		<th>Tanggal Lahir</th>
        <th>Status Kawin</th>
        <th>Tanggal Nikah</th>
		<th>Pekerjaan</th>
		<th>Aksi</th>
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
		<td>
	        <div class="btn-group">
	          <a class="btn btn-small medium-box" href="<?php echo base_url(); ?>data_keluarga/detail/<?php echo $dk['id_data_keluarga']; ?>"><i class="icon-ok-circle"></i> Lihat Detail</a>
	          <a class="btn btn-small dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
	          <ul class="dropdown-menu">
	            <li><a href="<?php echo base_url(); ?>data_keluarga/edit/<?php echo $dk['id_data_keluarga']; ?>" class="medium-box"><i class="icon-pencil"></i> Edit Data</a></li>
	            <li><a href="<?php echo base_url(); ?>data_keluarga/hapus/<?php echo $dk['id_data_keluarga']; ?>" onClick="return confirm('Anda yakin..???');"><i class="icon-trash"></i> Hapus Data</a></li>
	          </ul>
	        </div><!-- /btn-group -->
		</td>
      </tr>
	 <?php
	 		$no++;
	 	}
	 ?>
    </tbody>
  </table>
</div>
</div>
</div>
</div>
</section>

<section id="data-jabatan">
<div class="row">
<div class="col-sm-12">
<div class="card">
<div class="card-block">
    	<h1>Data Riwayat Jabatan</h1>  	
  	<table class="table stylish-table">
    <thead>
      <tr>
        <th>No.</th>
        <th>Status</th>
		<th>Penempatan</th>
        <th>Jabatan</th>
        <th>Unit Kerja</th>
		<th>Pangkat</th>
		<th>Aksi</th>
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
		<td>
	        <div class="btn-group">
	          <a class="btn btn-small medium-box" href="<?php echo base_url(); ?>data_riwayat_jabatan/detail/<?php echo $drj['id_riwayat_jabatan']; ?>"><i class="icon-ok-circle"></i> Lihat Detail</a>
	          <a class="btn btn-small dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
	          <ul class="dropdown-menu">
	            <li><a href="<?php echo base_url(); ?>data_riwayat_jabatan/edit/<?php echo $drj['id_riwayat_jabatan']; ?>" class="medium-box"><i class="icon-pencil"></i> Edit Data</a></li>
	            <li><a href="<?php echo base_url(); ?>data_riwayat_jabatan/hapus/<?php echo $drj['id_riwayat_jabatan']; ?>" onClick="return confirm('Anda yakin..???');"><i class="icon-trash"></i> Hapus Data</a></li>
	          </ul>
	        </div><!-- /btn-group -->
		</td>
      </tr>
	 <?php
	 		$no++;
	 	}
	 ?>
    </tbody>
  </table>
  </div>
  </div>
  </div>
  </div>
	</section>

<section id="data-pendidikan"> 

	<div class="row">
	<div class="col-sm-12">
	<div class="card">
	<div class="card-block">
	
	    	<h1>Data Pendidikan</h1>
  	
  	<table class="table stylish-table">
    <thead>
      <tr>
        <th>No.</th>
        <th>Tingkat Pendidikan</th>
		<th>Jurusan</th>
        <th>Teknik/Non Teknik</th>
        <th>Sekolah</th>
		<th>Tanggal Lulus</th>
		<th>Aksi</th>
		<th>Bukti Scan</th>

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
		<td>
	        <div class="btn-group">
	          <a class="btn btn-small medium-box" href="<?php echo base_url(); ?>data_pendidikan/detail/<?php echo $dpn['id_pendidikan']; ?>"><i class="icon-ok-circle"></i> Lihat Detail</a>
	          <a class="btn btn-small dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
	          <ul class="dropdown-menu">
	            <li><a href="<?php echo base_url(); ?>data_pendidikan/edit/<?php echo $dpn['id_pendidikan']; ?>" class="medium-box"><i class="icon-pencil"></i> Edit Data</a></li>
	            <li><a href="<?php echo base_url(); ?>data_pendidikan/hapus/<?php echo $dpn['id_pendidikan']; ?>" onClick="return confirm('Anda yakin..???');"><i class="icon-trash"></i> Hapus Data</a></li>
	          </ul>
	        </div><!-- /btn-group -->
		</td>
      </tr>
	 <?php
	 		$no++;
	 	}
	 ?>
    </tbody>
  </table>
  </div>
  </div>
  </div>
  </div>
	</section>

<section id="data-pelatihan">
	<div class="row">
	<div class="col-sm-12">
	<div class="card">
	<div class="card-block">
    	<h1>Data Pelatihan</h1>
  	
  	<table class="table stylish-table">
    <thead>
      <tr>
        <th>No.</th>
        <th>Nama Pelatihan</th>
		<th>Lokasi</th>
        <th>Tanggal Sertifikat</th>
        <th>Jam Pelatihan</th>
		<th>Negara</th>
		<th>Aksi</th>
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
		<td>
	        <div class="btn-group">
	          <a class="btn btn-small medium-box" href="<?php echo base_url(); ?>data_pelatihan/detail/<?php echo $dpl['id_pelatihan']; ?>"><i class="icon-ok-circle"></i> Lihat Detail</a>
	          <a class="btn btn-small dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
	          <ul class="dropdown-menu">
	            <li><a href="<?php echo base_url(); ?>data_pelatihan/edit/<?php echo $dpl['id_pelatihan']; ?>" class="medium-box"><i class="icon-pencil"></i> Edit Data</a></li>
	            <li><a href="<?php echo base_url(); ?>data_pelatihan/hapus/<?php echo $dpl['id_pelatihan']; ?>" onClick="return confirm('Anda yakin..???');"><i class="icon-trash"></i> Hapus Data</a></li>
	          </ul>
	        </div><!-- /btn-group -->
		</td>
      </tr>
	 <?php
	 		$no++;
	 	}
	 ?>
    </tbody>
  </table>
</div>
</div>
</div>
</div>
</section>

<section id="data-penghargaan">
<div class="row">
<div class="col-sm-12">
<div class="card">
<div class="card-block">
		<h1>Data Penghargaan</h1>  	
  	<table class="table stylish-table">
    <thead>
      <tr>
        <th>No.</th>
        <th>Nama Penghargaan</th>
		<th>Nomor SK</th>
        <th>Tanggal SK</th>
		<th>Aksi</th>
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
		<td>
	        <div class="btn-group">
	          <a class="btn btn-small medium-box" href="<?php echo base_url(); ?>data_penghargaan/detail/<?php echo $drj['id_penghargaan']; ?>"><i class="icon-ok-circle"></i> Lihat Detail</a>
	          <a class="btn btn-small dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
	          <ul class="dropdown-menu">
	            <li><a href="<?php echo base_url(); ?>data_penghargaan/edit/<?php echo $drj['id_penghargaan']; ?>" class="medium-box"><i class="icon-pencil"></i> Edit Data</a></li>
	            <li><a href="<?php echo base_url(); ?>data_penghargaan/hapus/<?php echo $drj['id_penghargaan']; ?>" onClick="return confirm('Anda yakin..???');"><i class="icon-trash"></i> Hapus Data</a></li>
	          </ul>
	        </div><!-- /btn-group -->
		</td>
      </tr>
	 <?php
	 		$no++;
	 	}
	 ?>
    </tbody>
  </table>
</div>
</div>
</div>
</div>
</section>

<section id="data-seminar">
<div class="row">
<div class="col-sm-12">
<div class="card">
<div class="card-block">

    	<h1>Data Seminar</h1>  	
  	<table class="table stylish-table">
    <thead>
      <tr>
        <th>No.</th>
        <th>Uraian</th>
		<th>Lokasi</th>
        <th>Tanggal</th>
		<th>Aksi</th>
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
		<td>
	        <div class="btn-group">
	          <a class="btn btn-small medium-box" href="<?php echo base_url(); ?>data_seminar/detail/<?php echo $ds['id_seminar']; ?>"><i class="icon-ok-circle"></i> Lihat Detail</a>
	          <a class="btn btn-small dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
	          <ul class="dropdown-menu">
	            <li><a href="<?php echo base_url(); ?>data_seminar/edit/<?php echo $ds['id_seminar']; ?>" class="medium-box"><i class="icon-pencil"></i> Edit Data</a></li>
	            <li><a href="<?php echo base_url(); ?>data_seminar/hapus/<?php echo $ds['id_seminar']; ?>" onClick="return confirm('Anda yakin..???');"><i class="icon-trash"></i> Hapus Data</a></li>
	          </ul>
	        </div><!-- /btn-group -->
		</td>
      </tr>
	 <?php
	 		$no++;
	 	}
	 ?>
    </tbody>
  </table>
  </div>
	</div>
	</div>
	</div>
	</section>

<section id="data-organisasi">	
<div class="row">
<div class="col-sm-12">
<div class="card">
<div class="card-block">
    	<h1>Data Organisasi</h1>  	
  	<table class="table stylish-table">
    <thead>
      <tr>
        <th>No.</th>
        <th>Uraian</th>
		<th>Lokasi</th>
        <th>Tanggal</th>
		<th>Aksi</th>

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
		<td>
	        <div class="btn-group">
	          <a class="btn btn-small medium-box" href="<?php echo base_url(); ?>data_organisasi/detail/<?php echo $do['id_organisasi']; ?>"><i class="icon-ok-circle"></i> Lihat Detail</a>
	          <a class="btn btn-small dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
	          <ul class="dropdown-menu">
	            <li><a href="<?php echo base_url(); ?>data_riwayat_pangkat/edit/<?php echo $do['id_organisasi']; ?>" class="medium-box"><i class="icon-pencil"></i> Edit Data</a></li>
	            <li><a href="<?php echo base_url(); ?>data_riwayat_pangkat/hapus/<?php echo $do['id_organisasi']; ?>" onClick="return confirm('Anda yakin..???');"><i class="icon-trash"></i> Hapus Data</a></li>
	          </ul>
	        </div><!-- /btn-group -->
		</td>
      </tr>
	 <?php
	 		$no++;
	 	}
	 ?>
    </tbody>
  </table>
</div>
</div>
</div>
</div>
</section>

<section id="data-gaji">
<div class="row">
<div class="col-sm-12">
<div class="card">
<div class="card-block">
    	<h1>Data Gaji Pokok</h1>
  	
  	<table class="table stylish-table">
    <thead>
      <tr>
        <th>No.</th>
        <th>Golongan</th>
		<th>Nomor SK</th>
        <th>Tanggal SK</th>
        <th>Gaji Pokok</th>
		<th>Tanggal Mulai</th>
		<th>Tanggal Selesai</th>
		<th>Aksi</th>
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
		<td>
	        <div class="btn-group">
	          <a class="btn btn-small medium-box" href="<?php echo base_url(); ?>data_gaji_pokok/detail/<?php echo $dgp['id_gaji_pokok']; ?>"><i class="icon-ok-circle"></i> Lihat Detail</a>
	          <a class="btn btn-small dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
	          <ul class="dropdown-menu">
	            <li><a href="<?php echo base_url(); ?>data_gaji_pokok/edit/<?php echo $dgp['id_gaji_pokok']; ?>" class="medium-box"><i class="icon-pencil"></i> Edit Data</a></li>
	            <li><a href="<?php echo base_url(); ?>data_gaji_pokok/hapus/<?php echo $dgp['id_gaji_pokok']; ?>" onClick="return confirm('Anda yakin..???');"><i class="icon-trash"></i> Hapus Data</a></li>
	          </ul>
	        </div><!-- /btn-group -->
		</td>
      </tr>
	 <?php
	 		$no++;
	 	}
	 ?>
    </tbody>
  </table>
</div>
</div>
</div>
</div>
</section>

<section id="data-hukuman">
<div class="row">
<div class="col-sm-12">
<div class="card">
<div class="card-block">

    	<h1>Data Hukuman</h1>
  	
  	<table class="table stylish-table">
    <thead>
      <tr>
        <th>No.</th>
        <th>Nama Hukuman</th>
		<th>Nomor SK</th>
        <th>Tanggal SK</th>
        <th>Tanggal Mulai</th>
		<th>Tanggal Selesai</th>
		<th>Masa Berlaku</th>
		<th>Aksi</th>
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
		<td>
	        <div class="btn-group">
	          <a class="btn btn-small medium-box" href="<?php echo base_url(); ?>data_hukuman/detail/<?php echo $dh['id_hukuman']; ?>"><i class="icon-ok-circle"></i> Lihat Detail</a>
	          <a class="btn btn-small dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
	          <ul class="dropdown-menu">
	            <li><a href="<?php echo base_url(); ?>data_hukuman/edit/<?php echo $dh['id_hukuman']; ?>" class="medium-box"><i class="icon-pencil"></i> Edit Data</a></li>
	            <li><a href="<?php echo base_url(); ?>data_hukuman/hapus/<?php echo $dh['id_hukuman']; ?>" onClick="return confirm('Anda yakin..???');"><i class="icon-trash"></i> Hapus Data</a></li>
	          </ul>
	        </div><!-- /btn-group -->
		</td>
      </tr>
	 <?php
	 		$no++;
	 	}
	 ?>
    </tbody>
  </table>
  </div>
  </div>
  </div>
  </div>
	</section>

<section id="data-dp3">
	<div class="row">
	<div class="col-sm-12">
	<div class="card">
	<div class="card-block">	
    	<h1>Data Penilaian Atasan</h1>
  	</div>
  	
  	<table class="table stylish-table">
    <thead>
      <tr>
        <th>No.</th>
        <th>Tahun</th>
		<th>Rata-Rata</th>
		<th>Atasan</th>
        <th>Penilai</th>
        <th>Mengetahui</th>
		<th>Aksi</th>
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
		<td>
	        <div class="btn-group">
	          <a class="btn btn-small medium-box" href="<?php echo base_url(); ?>data_dp3/detail/<?php echo $dp3['id_dp3']; ?>"><i class="icon-ok-circle"></i> Lihat Detail</a>
	          <a class="btn btn-small dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
	          <ul class="dropdown-menu">
	            <li><a href="<?php echo base_url(); ?>data_dp3/edit/<?php echo $dp3['id_dp3']; ?>" class="medium-box"><i class="icon-pencil"></i> Edit Data</a></li>
	            <li><a href="<?php echo base_url(); ?>data_dp3/hapus/<?php echo $dp3['id_dp3']; ?>" onClick="return confirm('Anda yakin..???');"><i class="icon-trash"></i> Hapus Data</a></li>
	          </ul>
	        </div><!-- /btn-group -->
		</td>
      </tr>
	 <?php
	 		$no++;
	 	}
	 ?>
    </tbody>
  </table>
</div>
</div>
</div>
</div>

    </div>
</div>
<?php include "application/views/dashboard_admin/home/footer.php" ?>	