<?php 
$judul_pendek=""; 
$credit=""; 
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?php echo $judul_lengkap.' - '.$instansi; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="<?php echo base_url(); ?>asset/theme-new/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>asset/theme-new/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>asset/theme-new/css/docs.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/theme-new/css/bootstrap-datepicker3.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/theme-new/css/bootstrap-datetimepicker.min.css" />

<script src="<?php echo base_url(); ?>asset/theme-new/js/moment.min.js"></script> 
<script type="text/javascript" src="<?php echo base_url(); ?>asset/theme-new/js/moment-with-locales.js"></script> 
	
    <script src="<?php echo base_url(); ?>asset/theme-new/js/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>asset/theme-new/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>asset/theme-new/js/bootstrap-datepicker.js"></script>
  <script src="<?php echo base_url(); ?>asset/theme-new/js/bootstrap-datetimepicker.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
        $(function () {
            $('#datetimepicker2').datetimepicker({
              locale: 'id',
              defaultDate: new Date(),
              format: 'YYYY-MM-DD'
            }).on('dp.change', function(e) {
              console.log(e.date);
              var age = GetAge(e.date._d);
              console.log(age);
              $('#usia').val('');
              $('#usia').val(age);

    });
            function GetAge(birthDate) {
    var today = new Date();
    var year = today.getFullYear() - birthDate.getFullYear();
    //var month = today.getMonth() - birthDate.getMonth();
    var monthday = today.getMonth();
    var monthbirthdate = birthDate.getMonth();
      if (monthday >= monthbirthdate)
        var month = monthday - monthbirthdate;
      else {
        year--;
        var month = 12 + monthday -monthbirthdate;
      }
   
    var age = year + 'thn' + ' ' + Math.abs(month) + 'bln';
    return age;
}
            
        });
    });
</script>
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="<?php echo base_url(); ?>"><?php echo $judul_pendek; ?></a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li><a href="<?php echo base_url(); ?>"><i class="icon-home icon-white"></i> Beranda</a></li>
			  <li class="dropdown">
			  	<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-book icon-white"></i> Master <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="<?php echo base_url(); ?>master_status_pegawai"><i class="icon-tag"></i> Status Pegawai</a></li>
                  <li><a href="<?php echo base_url(); ?>master_unit_kerja"><i class="icon-question-sign"></i> Unit Kerja</a></li>
                  <li><a href="<?php echo base_url(); ?>master_satuan_kerja"><i class="icon-ok-sign"></i> Satuan Kerja</a></li>
                  <!-- <li><a href="<?php echo base_url(); ?>master_ppk"><i class="icon-eye-open"></i> PPK</a></li> -->
                  <li><a href="<?php echo base_url(); ?>master_golongan"><i class="icon-random"></i> Golongan</a></li>
                  <li><a href="<?php echo base_url(); ?>master_eselon"><i class="icon-retweet"></i> Pangkat</a></li>
                  <li><a href="<?php echo base_url(); ?>master_pelatihan"><i class="icon-folder-open"></i> Pelatihan</a></li>
                  <li><a href="<?php echo base_url(); ?>master_jabatan"><i class="icon-hdd"></i> Jabatan</a></li>
                  <li><a href="<?php echo base_url(); ?>master_status_jabatan"><i class="icon-tasks"></i> Status Jabatan</a></li>
                  <li><a href="<?php echo base_url(); ?>master_penghargaan"><i class="icon-filter"></i> Penghargaan</a></li>
                  <li><a href="<?php echo base_url(); ?>master_hukuman"><i class="icon-briefcase"></i> Hukuman</a></li>
                  <li><a href="<?php echo base_url(); ?>master_lokasi_pelatihan"><i class="icon-fullscreen"></i> Lokasi Pelatihan</a></li>
                  <li><a href="<?php echo base_url(); ?>master_lokasi_kerja"><i class="icon-briefcase"></i> Lokasi Kerja</a></li>
                  <li><a href="<?php echo base_url(); ?>master_jenis_pegawai"><i class="icon-briefcase"></i> Jenis Pegawai</a></li>
                  <li><a href="<?php echo base_url(); ?>master_jabatan_fungsional"><i class="icon-briefcase"></i> Jabatan Fungsional</a></li>
                  <li><a href="<?php echo base_url(); ?>master_pertanyaan"><i class="icon-briefcase"></i> Pertanyaan</a></li>
                </ul>
              </li>
			  <li class="dropdown">
			  	<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-comment icon-white"></i> Panduan <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="#"><i class="icon-fire"></i> Administrator</a></li>
                  <li><a href="#"><i class="icon-asterisk"></i> Operator</a></li>
                  <li><a href="#"><i class="icon-leaf"></i> Executive</a></li>
                </ul>
              </li>
			  <li class="dropdown">
			  	<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-tasks icon-white"></i> Laporan <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="<?php echo base_url(); ?>laporan_pegawai_unit_satuan"><i class="icon-tag"></i> Laporan Pegawai - Unit Kerja dan Satuan Kerja</a></li>
                  <li><a href="<?php echo base_url(); ?>laporan_pegawai_penempatan_kerja"><i class="icon-question-sign"></i> Laporan Pegawai - Penempatan Kerja</a></li>
                  <li><a href="<?php echo base_url(); ?>laporan_pegawai_ikut_pelatihan"><i class="icon-ok-sign"></i> Laporan Pegawai - Mengikuti Pelatihan</a></li>
                  <li><a href="<?php echo base_url(); ?>laporan_pegawai_status_golongan"><i class="icon-eye-open"></i> Laporan Pegawai - Status Pegawai dan Golongan</a></li>
                  <li><a href="<?php echo base_url(); ?>laporan_pegawai_struktural_fungsional"><i class="icon-random"></i> Laporan Pegawai - Struktural dan Fungsional</a></li>
                  <li><a href="<?php echo base_url(); ?>laporan_pegawai_urut_kepangkatan"><i class="icon-retweet"></i> Laporan Daftar Urut Kepangkatan</a></li>
				                  <li><a href="<?php echo base_url(); ?>kenaikan_pangkat"><i class="icon-eye-open"></i> Rencana Usulan Kenaikan Pangkat (RUKP)</a></li>
                   <li><a href="<?php echo base_url(); ?>kenaikan_gaji"><i class="icon-eye-open"></i> Usulan Kenaikan Gaji Berkala (UKGB)</a></li>
                   <li><a href="<?php echo base_url(); ?>laporan_pegawai_unit_satuan"><i class="icon-tag"></i> Laporan Pegawai - Dosen</a></li>
                   <li><a href="<?php echo base_url(); ?>laporan_pegawai_unit_satuan"><i class="icon-tag"></i> Laporan Pegawai - Staf</a></li>
                </ul>
              </li>
            </ul>
            <div class="btn-group pull-right">
			  <button class="btn btn-primary"><i class="icon-user icon-white"></i> <?php echo $this->session->userdata('nama'); ?></button>
			  <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
				<span class="caret"></span>
			  </button>
			  <ul class="dropdown-menu">
				<li><a href="<?php echo base_url(); ?>app/change_password"><i class="icon-wrench"></i> Pengaturan Akun</a></li>
				<li><a href="<?php echo base_url(); ?>manage_user"><i class="icon-tasks"></i> Manajemen User</a></li>
				<li><a href="<?php echo base_url(); ?>app/logout"><i class="icon-off"></i> Log Out</a></li>
			  </ul>
			</div>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>
	
