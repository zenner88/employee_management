<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?php echo $judul_lengkap.' - '.$instansi; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Bootstrap core CSS-->
    <link href="<?php echo base_url(); ?>/asset/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url(); ?>/asset/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- Page level plugin CSS-->
    <link href="<?php echo base_url(); ?>/asset/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
    <!-- Custom styles for this template-->
		<link href="<?php echo base_url(); ?>/asset/css/sb-admin.css" rel="stylesheet">
		<link href="<?php echo base_url(); ?>/asset/css/colors/blue.css" id="theme" rel="stylesheet">

  </head>

  <body class="fixed-nav sticky-footer bg-light" id="page-top">
    <nav class="navbar navbar-expand-sm navbar-light bg-light fixed-top" id="mainNav">
      <a class="navbar-brand" href="<?php echo base_url(); ?>"><?php echo $judul_pendek; ?></a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
            <a class="nav-link" href="<?php echo base_url(); ?>">
              <i class="fa fa-fw fa-dashboard"></i>
              <span class="nav-link-text">Dashboard</span>
            </a>
          </li>
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
            <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
              <i class="fa fa-fw fa-file"></i>
              <span class="nav-link-text">Master</span>
            </a>
            <ul class="sidenav-second-level collapse" id="collapseComponents">
								<li><a href="<?php echo base_url(); ?>master_status_pegawai"><i class="fa-tag"></i> Status Pegawai</a></li>
								<li><a href="<?php echo base_url(); ?>master_unit_kerja"><i class="fa-question-sign"></i> Unit Kerja</a></li>
								<li><a href="<?php echo base_url(); ?>master_satuan_kerja"><i class="fa-ok-sign"></i> Satuan Kerja</a></li>
								<!-- <li><a href="<?php echo base_url(); ?>master_ppk"><i class="fa-eye-open"></i> PPK</a></li> -->
								<li><a href="<?php echo base_url(); ?>master_kelompok_pegawai"><i class="fa-briefcase"></i> Kelompok Pegawai</a></li>                  
								<li><a href="<?php echo base_url(); ?>master_golongan"><i class="fa-random"></i> Golongan</a></li>
								<li><a href="<?php echo base_url(); ?>master_eselon"><i class="fa-retweet"></i> Pangkat</a></li>
								<li><a href="<?php echo base_url(); ?>master_pelatihan"><i class="fa-folder-open"></i> Pelatihan</a></li>
								<li><a href="<?php echo base_url(); ?>master_jabatan"><i class="fa-hdd"></i> Jabatan</a></li>
								<li><a href="<?php echo base_url(); ?>master_status_jabatan"><i class="fa-tasks"></i> Status Jabatan</a></li>
								<li><a href="<?php echo base_url(); ?>master_penghargaan"><i class="fa-filter"></i> Penghargaan</a></li>
								<li><a href="<?php echo base_url(); ?>master_hukuman"><i class="fa-briefcase"></i> Hukuman</a></li>
								<li><a href="<?php echo base_url(); ?>master_lokasi_pelatihan"><i class="fa-fullscreen"></i> Lokasi Pelatihan</a></li>
								<li><a href="<?php echo base_url(); ?>master_lokasi_kerja"><i class="fa-briefcase"></i> Lokasi Kerja</a></li>
            </ul>
          </li>
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Example Pages">
            <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseExamplePages" data-parent="#exampleAccordion">
              <i class="fa fa-fw fa-book"></i>
              <span class="nav-link-text">Panduan</span>
            </a>
            <ul class="sidenav-second-level collapse" id="collapseExamplePages">
								<li><a href="<?php echo base_url(); ?>panduan_administrator"><i class="fa-fire"></i> Administrator</a></li>
								<li><a href="<?php echo base_url(); ?>panduan_operator"><i class="fa-asterisk"></i> Operator</a></li>
								<li><a href="<?php echo base_url(); ?>panduan_executive"><i class="fa-leaf"></i> Executive</a></li>
            </ul>
          </li>
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Menu Levels">
            <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti" data-parent="#exampleAccordion">
              <i class="fa fa-fw fa-tables"></i>
              <span class="nav-link-text">Laporan</span>
            </a>
            <ul class="sidenav-second-level collapse" id="collapseMulti">
								<li><a href="<?php echo base_url(); ?>laporan_pegawai_unit_satuan"><i class="fa-tag"></i> Laporan Pegawai - Unit Kerja dan Satuan Kerja</a></li>
								<li><a href="<?php echo base_url(); ?>laporan_pegawai_penempatan_kerja"><i class="fa-question-sign"></i> Laporan Pegawai - Penempatan Kerja</a></li>
								<li><a href="<?php echo base_url(); ?>laporan_pegawai_ikut_pelatihan"><i class="fa-ok-sign"></i> Laporan Pegawai - Mengikuti Pelatihan</a></li>
								<li><a href="<?php echo base_url(); ?>laporan_pegawai_status_golongan"><i class="fa-eye-open"></i> Laporan Pegawai - Status Pegawai dan Golongan</a></li>
								<li><a href="<?php echo base_url(); ?>laporan_pegawai_struktural_fungsional"><i class="fa-random"></i> Laporan Pegawai - Struktural dan Fungsional</a></li>
								<li><a href="<?php echo base_url(); ?>laporan_pegawai_urut_kepangkatan"><i class="fa-retweet"></i> Laporan Daftar Urut Kepangkatan</a></li>
								<li><a href="<?php echo base_url(); ?>kenaikan_pangkat"><i class="fa-eye-open"></i> Rencana Usulan Kenaikan Pangkat (RUKP)</a></li>
								<li><a href="<?php echo base_url(); ?>kenaikan_gaji"><i class="fa-eye-open"></i> Usulan Kenaikan Gaji Berkala (UKGB)</a></li>
								<li><a href="<?php echo base_url(); ?>laporan_pegawai_unit_satuan"><i class="fa-tag"></i> Laporan Pegawai - Dosen</a></li>
								<li><a href="<?php echo base_url(); ?>laporan_pegawai_unit_satuan"><i class="fa-tag"></i> Laporan Pegawai - Staf</a></li>
            </ul>
          </li>
				</ul>
				
        <ul class="navbar-nav sidenav-toggler">
          <li class="nav-item">
            <a class="nav-link text-center" id="sidenavToggler">
              <i class="fa fa-fw fa-angle-left"></i>
            </a>
          </li>
        </ul>
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <form class="form-inline my-2 my-sm-0 mr-sm-2">
              <div class="input-group">
                <input class="form-control" type="text" placeholder="Search for...">
                <span class="input-group-btn">
                  <button class="btn btn-primary" type="button">
                    <i class="fa fa-search"></i>
                  </button>
                </span>
              </div>
            </form>
          </li>
          <li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle mr-sm-2" id="alertsDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<i class="fa fa-fw fa-bell"></i>
						<span class="d-sm-none">Alerts
							<span class="badge badge-pill badge-warning">6 New</span>
						</span>
						<span class="indicator text-warning d-none d-sm-block">
							<i class="fa fa-fw fa-circle"></i>
						</span>
					</a>
					<div class="dropdown-menu" aria-labelledby="alertsDropdown">
						<!-- <h6 class="dropdown-header">New Alerts:</h6>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="#">
							<span class="text-success">
								<strong>
									<i class="fa fa-long-arrow-up fa-fw"></i>Status Update</strong>
							</span>
							<span class="small float-right text-muted">11:21 AM</span>
							<div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
						</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="#">
							<span class="text-danger">
								<strong>
									<i class="fa fa-long-arrow-down fa-fw"></i>Status Update</strong>
							</span>
							<span class="small float-right text-muted">11:21 AM</span>
							<div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
						</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="#">
							<span class="text-success">
								<strong>
									<i class="fa fa-long-arrow-up fa-fw"></i>Status Update</strong>
							</span>
							<span class="small float-right text-muted">11:21 AM</span>
							<div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
						</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item small" href="#">View all alerts</a> -->
					</div>
				</li>
				<li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle mr-sm-2" id="messagesDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fa fa-fw fa-user"></i><?php echo $this->session->userdata('nama'); ?>
				
            <div class="dropdown-menu" >
              <a class="dropdown-item" href="<?php echo base_url(); ?>app/change_password">
								<i class="fa fa-fw fa-wrench"></i> Pengaturan Akun
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">
								<i class="fa fa-fw fa-briefcase"></i> Manajemen User
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">
								<i class="fa fa-fw fa-sign-out"></i> Log Out
              </a>
            </div>
          </li>
        </ul>
      </div>
		</nav>
		<!-- gfasdgjkahsld asdhaskjdhajskdhakjsdh aksjdh kajshd -->
	
<div class="content-wrapper">
<div class="container-fluid">	
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
		  <a class="brand" href="#">Data Pegawai</a>
		  <div class="nav-collapse">
			<ul class="nav">
			  <li><a href="<?php echo base_url(); ?>pegawai/tambah" class="medium-box"><i class="fa-plus-sign fa-white"></i> Tambah Data Pegawai</a></li>
			</ul>
		  </div>
		<div class="span6 pull-right">
		<?php echo form_open("dashboard_admin/cari", 'class="navbar-form pull-right"'); ?>
		  <input type="text" class="span3" name="cari" placeholder="Masukkan kata kunci pencarian">
		  <button type="submit" class="btn btn-primary"><i class="fa-search fa-white"></i> Cari Data Pegawai</button>
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
        <th>Golongan</th>
        <th>Kelompok Pegawai</th>        
		<th>Status Pegawai</th>
		<th>Aksi</th>
      </tr>
    </thead>
    <tbody>
	<?php
		$no=$tot+1;
		foreach($data_pegawai->result_array() as $dp)
		{
	?>
      <tr>
        <td><?php echo $no; ?></td>
        <td><?php echo $dp['nip']; ?></td>
        <td><?php echo $dp['nama_pegawai']; ?></td>
        <td><?php echo $dp['golongan']; ?></td>
        <td><?php echo $dp['nama_kelompok_pegawai']; ?></td>        
        <td><?php echo $dp['nama_status']; ?></td>
		<td>
	        <div class="btn-group">
	          <a class="btn btn-small" href="<?php echo base_url(); ?>pegawai/detail/<?php echo $dp['id_pegawai']; ?>"><i class="fa-ok-circle"></i> Lihat Detail</a>
	          <a class="btn btn-small dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
	          <ul class="dropdown-menu">
	            <li><a href="<?php echo base_url(); ?>pegawai/edit/<?php echo $dp['id_pegawai']; ?>"><i class="fa-pencil"></i> Edit Data</a></li>
	            <li><a href="<?php echo base_url(); ?>pegawai/hapus/<?php echo $dp['id_pegawai']; ?>" onClick="return confirm('Anda yakin..???');"><i class="fa-trash"></i> Hapus Data</a></li>
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
	<div class="pagination pagination-centered">
		<ul>
		<?php
		echo $paginator;
		?>
		</ul>
	</div>
	
  

</section>
  </div>
<!-- Kenaikan pangkat -->
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
                    
			  	
			</select>
		</div>
		<div class="span4 pull-right">
  		<a class="btn" href="<?php echo base_url(); ?>kenaikan_pangkat/export"><i class="fa-ok-circle"></i> Export ke Excell</a>
		  <button type="submit" class="btn btn-primary"><i class="fa-search fa-white"></i> Cari Data Laporan</button>
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
	$tambah = 2;
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
<!-- end kenaikan pangkat -->
      <footer class="well">
        <p><?php echo $credit; ?></p>
      </footer>

	</div> <!-- /container -->
</div>
		<!-- Bootstrap core JavaScript-->
		<script src="<?php echo base_url(); ?>asset/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>asset/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url(); ?>asset/vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="<?php echo base_url(); ?>asset/vendor/chart.js/Chart.min.js"></script>
    <script src="<?php echo base_url(); ?>asset/vendor/datatables/jquery.dataTables.js"></script>
    <script src="<?php echo base_url(); ?>asset/vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url(); ?>asset/js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="<?php echo base_url(); ?>asset/js/sb-admin-datatables.min.js"></script>
    <script src="<?php echo base_url(); ?>asset/js/sb-admin-charts.min.js"></script>
  </body>
</html>
