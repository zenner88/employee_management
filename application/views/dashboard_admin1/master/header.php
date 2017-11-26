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
	
	<header class="jumbotron subhead" id="overview">
	  <div class="subnav">
		<ul class="nav nav-pills">
		  <li><a href="<?php echo base_url(); ?>pegawai/edit/<?php echo $this->session->userdata("kode_pegawai"); ?>">Pegawai</a></li>
		  <li><a href="<?php echo base_url(); ?>data_keluarga/index/<?php echo $this->session->userdata("kode_pegawai"); ?>">Keluarga</a></li>
		  <li><a href="<?php echo base_url(); ?>data_riwayat_pangkat/index/<?php echo $this->session->userdata("kode_pegawai"); ?>">Riwayat Pangkat</a></li>
		  <li><a href="<?php echo base_url(); ?>data_riwayat_jabatan/index/<?php echo $this->session->userdata("kode_pegawai"); ?>">Riwayat Jabatan</a></li>
		  <li><a href="<?php echo base_url(); ?>data_pendidikan/index/<?php echo $this->session->userdata("kode_pegawai"); ?>">Pendidikan</a></li>
		  <li><a href="<?php echo base_url(); ?>data_pelatihan/index/<?php echo $this->session->userdata("kode_pegawai"); ?>">Pelatihan</a></li>
		  <li><a href="<?php echo base_url(); ?>data_penghargaan/index/<?php echo $this->session->userdata("kode_pegawai"); ?>">Penghargaan</a></li>
		  <li><a href="<?php echo base_url(); ?>data_seminar/index/<?php echo $this->session->userdata("kode_pegawai"); ?>">Seminar</a></li>
		  <li><a href="<?php echo base_url(); ?>data_organisasi/index/<?php echo $this->session->userdata("kode_pegawai"); ?>">Organisasi</a></li>
		  <li><a href="<?php echo base_url(); ?>data_gaji_pokok/index/<?php echo $this->session->userdata("kode_pegawai"); ?>">Gaji Pokok</a></li>
		  <li><a href="<?php echo base_url(); ?>data_hukuman/index/<?php echo $this->session->userdata("kode_pegawai"); ?>">Hukuman</a></li>
		  <li><a href="<?php echo base_url(); ?>data_dp3/index/<?php echo $this->session->userdata("kode_pegawai"); ?>">DP3</a></li>
		</ul>
	  </div>
	</header>

