<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url(); ?>asset/images/favicon.png">
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url(); ?>asset/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo base_url(); ?>asset/css/style.css" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="<?php echo base_url(); ?>asset/css/colors/blue.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body class="fix-header fix-sidebar card-no-border">
<!-- ============================================================== -->
<!-- Preloader - style you can find in spinners.css -->
<!-- ============================================================== -->
<div class="preloader">
		<svg class="circular" viewBox="25 25 50 50">
				<circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
</div>
<!-- ============================================================== -->
<!-- Main wrapper - style you can find in pages.scss -->
<!-- ============================================================== -->
<div id="main-wrapper">
		<!-- ============================================================== -->
		<!-- Topbar header - style you can find in pages.scss -->
		<!-- ============================================================== -->
		<header class="topbar">
				<nav class="navbar top-navbar navbar-toggleable-sm navbar-light">
						<!-- ============================================================== -->
						<!-- Logo -->
						<!-- ============================================================== -->
						<div class="navbar-header">
								<a class="navbar-brand" href="index.html">
										<!-- Logo icon -->
										<b>
												<!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
												<!-- Dark Logo icon -->
												<img src="<?php echo base_url(); ?>asset/images/logo-icon.png" alt="homepage" class="dark-logo" />
												
										</b>
										<!--End Logo icon -->
										<!-- Logo text -->
										<span>
												<!-- dark Logo text -->
												<img src="<?php echo base_url(); ?>asset/images/logo-text.png" alt="homepage" class="dark-logo" />
										</span>
								</a>
						</div>
						<!-- ============================================================== -->
						<!-- End Logo -->
						<!-- ============================================================== -->
						<div class="navbar-collapse">
								<!-- ============================================================== -->
								<!-- toggle and nav items -->
								<!-- ============================================================== -->
								<ul class="navbar-nav mr-auto mt-md-0 ">
										<!-- This is  -->
										<li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
										<li class="nav-item hidden-sm-down">
												<form class="app-search p-l-20">
														<input type="text" class="form-control" placeholder="Search for..."> <a class="srh-btn"><i class="ti-search"></i></a>
												</form>
										</li>
								</ul>
								<!-- ============================================================== -->
								<!-- User profile and search -->
								<!-- ============================================================== -->
								<ul class="navbar-nav my-lg-0">
										<li class="nav-item dropdown">
												<a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="<?php echo base_url(); ?>asset/images/users/6.png" alt="user" class="profile-pic m-r-5" /><?php echo $this->session->userdata('nama'); ?></a>
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
		</header>
		<aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
												<li>
												<a class="waves-effect" href="<?php echo base_url(); ?>">
													<i class="fa fa-fw fa-home" aria-hidden="true"></i>
													Dashboard
												</a>
											</li>
											<li>
											<a class="waves-effect">
													<i class="fa fa-fw fa-files-o"></i>
													Master
												</a>
												<ul>
														<li><a href="<?php echo base_url(); ?>master_status_pegawai"><i class="fa fa-fw fa-file-o"></i> Status Pegawai</a></li>
														<li><a href="<?php echo base_url(); ?>master_unit_kerja"><i class="fa fa-fw fa-file-o"></i>  Unit Kerja</a></li>
														<li><a href="<?php echo base_url(); ?>master_satuan_kerja"><i class="fa fa-fw fa-file-o"></i>  Satuan Kerja</a></li>
														<!-- <li><a href="<?php echo base_url(); ?>master_ppk"><i class="fa-eye-open"></i> PPK</a></li> -->
														<li><a href="<?php echo base_url(); ?>master_kelompok_pegawai"><i class="fa fa-fw fa-file-o"></i>  Kelompok Pegawai</a></li>                  
														<li><a href="<?php echo base_url(); ?>master_golongan"><i class="fa fa-fw fa-file-o"></i>  Golongan</a></li>
														<li><a href="<?php echo base_url(); ?>master_eselon"><i class="fa fa-fw fa-file-o"></i>  Pangkat</a></li>
														<li><a href="<?php echo base_url(); ?>master_pelatihan"><i class="fa fa-fw fa-file-o"></i>  Pelatihan</a></li>
														<li><a href="<?php echo base_url(); ?>master_jabatan"><i class="fa fa-fw fa-file-o"></i>  Jabatan</a></li>
														<li><a href="<?php echo base_url(); ?>master_status_jabatan"><i class="fa fa-fw fa-file-o"></i>  Status Jabatan</a></li>
														<li><a href="<?php echo base_url(); ?>master_penghargaan"><i class="fa fa-fw fa-file-o"></i>  Penghargaan</a></li>
														<li><a href="<?php echo base_url(); ?>master_hukuman"><i class="fa fa-fw fa-file-o"></i>  Hukuman</a></li>
														<li><a href="<?php echo base_url(); ?>master_lokasi_pelatihan"><i class="fa fa-fw fa-file-o"></i>  Lokasi Pelatihan</a></li>
														<li><a href="<?php echo base_url(); ?>master_lokasi_kerja"><i class="fa fa-fw fa-file-o"></i> Lokasi Kerja</a></li>
												</ul>
											</li>
											<li>
											<a class="waves-effect">
													<i class="fa fa-fw fa-book"></i>
													Panduan
												</a>
												<ul>
														<li><a href="<?php echo base_url(); ?>panduan_administrator"><i class="fa fa-fw fa-check-circle-o"></i>  Administrator</a></li>
														<li><a href="<?php echo base_url(); ?>panduan_operator"><i class="fa fa-fw fa-check-circle-o"></i>Operator</a></li>
														<li><a href="<?php echo base_url(); ?>panduan_executive"><i class="fa fa-fw fa-check-circle-o"></i> Executive</a></li>
												</ul>
											</li>
											<li>
												<a class="waves-effect">
													<i class="fa fa-fw fa-file-text"></i>
													Laporan
												</a>
												<ul>
														<li><a href="<?php echo base_url(); ?>laporan_pegawai_unit_satuan"><i class="fa fa-fw fa-paste"></i>  Unit Kerja dan Satuan Kerja</a></li>
														<li><a href="<?php echo base_url(); ?>laporan_pegawai_penempatan_kerja"><i class="fa fa-fw fa-paste"></i>  Penempatan Kerja</a></li>
														<li><a href="<?php echo base_url(); ?>laporan_pegawai_ikut_pelatihan"><i class="fa fa-fw fa-paste"></i>  Mengikuti Pelatihan</a></li>
														<li><a href="<?php echo base_url(); ?>laporan_pegawai_status_golongan"><i class="fa fa-fw fa-paste"></i>  Status Pegawai dan Golongan</a></li>
														<li><a href="<?php echo base_url(); ?>laporan_pegawai_struktural_fungsional"><i class="fa fa-fw fa-paste"></i>  Struktural dan Fungsional</a></li>
														<li><a href="<?php echo base_url(); ?>laporan_pegawai_urut_kepangkatan"><i class="fa fa-fw fa-paste"></i> Laporan Daftar Urut Kepangkatan</a></li>
														<li><a href="<?php echo base_url(); ?>kenaikan_pangkat"><i class="fa fa-fw fa-paste"></i> Rencana Usulan Kenaikan Pangkat (RUKP)</a></li>
														<li><a href="<?php echo base_url(); ?>kenaikan_gaji"><i class="fa fa-fw fa-paste"></i> Usulan Kenaikan Gaji Berkala (UKGB)</a></li>
														<li><a href="<?php echo base_url(); ?>laporan_pegawai_unit_satuan"><i class="fa fa-fw fa-paste"></i>  Dosen</a></li>
														<li><a href="<?php echo base_url(); ?>laporan_pegawai_unit_satuan"><i class="fa fa-fw fa-paste"></i>  Staf</a></li>
												</ul>
											</li>
                    </ul>
                  
                </nav>
                <!-- End Sidebar navigation -->
            </div>
						<!-- End Sidebar scroll-->
						
        </aside>
   