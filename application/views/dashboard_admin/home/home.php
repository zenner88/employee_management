<?php include "application/views/dashboard_admin/home/header.php" ?>
<div class="page-wrapper">
	<div class="container-fluid">
		<h3 class="text-themecolor m-b-0 m-t-0"><?php echo $judul_lengkap.' '.$instansi; ?></h3>
		<p><?php echo $alamat; ?></p>
		<div class="row">
				<!-- Column -->
				<div class="col-sm-6">
				<div class="card">
				<div class="card-block">
						<center class="m-t-30"> <img src="../assets/images/users/5.jpg" class="img-circle" width="150" />
								<h4 class="card-title m-t-10">Roni Habibi</h4>
								<h6 class="card-subtitle">Accoubts Manager Amix corp</h6>
								<div class="row text-center justify-content-md-center">
										<div class="col-4"><a href="javascript:void(0)" class="link"><i class="icon-people"></i> <font class="font-medium">254</font></a></div>
										<div class="col-4"><a href="javascript:void(0)" class="link"><i class="icon-messages"></i> <font class="font-medium">54</font></a></div>
								</div>
						</center>
				</div>
		</div>
						<div class="card">
								<div class="card-block">
										<h4 class="card-title">Weekly</h4>
										<div class="text-right">
												<h2 class="font-light m-b-0"><i class="ti-arrow-up text-info"></i> 5,000</h2>
												<span class="text-muted">Todays</span>
										</div>
										<span class="text-info">30%</span>
										<div class="progress">
												<div class="progress-bar bg-info" role="progressbar" style="width: 30%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
								</div>
						</div>
				</div>
				<!-- Column -->
				<!-- Column -->
				<div class="col-sm-6">
						<!-- column -->
						<div class="col-sm-12">
						<div class="card">
								<div class="card-block">
										<h4 class="card-title">Statistics</h4>
										<div class="flot-chart">
												<div class="flot-chart-content" id="flot-line-chart"></div>
										</div>
								</div>
						</div>
				</div>
				<!-- column -->
				</div>
				<!-- Column -->
		</div>
			<div class="row">
				<div class="col-sm-12">
					<div class="card">
						<div class="card-block">
						<div class="pull-right">
							<?php echo form_open("dashboard_admin/cari", 'class="navbar-form pull-right"'); ?>
							<input type="text" class="w-75 form-control" name="cari" placeholder="Cari Nama Pegawai">
							<button type="submit" class="btn btn-primary"><i class="fa fa-fw fa-search"></i></button>
							<?php echo form_close(); ?>
						</div>
						<h4 class="card-title">Data Pegawai <a href="<?php echo base_url(); ?>pegawai/tambah"><i class="fa fa-fw fa-plus"></i></h4>
							<div class="table-responsive m-t-40">
									<table class="table stylish-table">
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
							</div>
						</div>
					</div>
				</div>
			</div>

<!-- Kenaikan pangkat -->
<div class="row">
<div class="col-sm-12">
	<div class="card">
		<div class="card-block">
		<h4 class="card-title">Rencana Usulan Kenaikan Pangkat (RUKP)</h4>
		
<div class="table-responsive m-t-40">
	  <table class="table stylish-table">
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
	</div
	</div>
	
	</div>
		</div>
	  </div>
	</div>
<?php include "application/views/dashboard_admin/home/footer.php" ?>	