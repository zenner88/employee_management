
<?php include "application/views/dashboard_admin/home/header.php" ?>

<div class="page-wrapper">
	<div class="container-fluid">

	<div class="row">
	<div class="col-sm-12">
		<div class="card">
			<div class="card-block">
<div class="pull-right">
	<?php echo form_open("master_status_pegawai/cari", 'class="navbar-form pull-right"'); ?>
	<input type="text" class="w-75 form-control" name="cari" placeholder="Cari Nama Pegawai">
	<button type="submit" class="btn btn-primary"><i class="fa fa-fw fa-search"></i></button>
	<?php echo form_close(); ?>
</div>
<h4 class="card-title">Master Status Pegawai <a href="<?php echo base_url(); ?>master_status_pegawai/tambah"><i class="fa fa-fw fa-plus"></i></h4>
	  <section>
  <table class="table table-hover table-condensed">
    <thead>
      <tr>
        <th>No.</th>
        <th>Status Pegawai</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
	<?php
		$no=$tot+1;
		foreach($status_pegawai->result_array() as $dp)
		{
	?>
      <tr>
        <td><?php echo $no; ?></td>
        <td><?php echo $dp['nama_status']; ?></td>
		<td>
	        <div class="btn-group">
	          <a class="btn btn-small small-box" href="<?php echo base_url(); ?>master_status_pegawai/detail/<?php echo $dp['id_status_pegawai']; ?>"><i class="icon-ok-circle"></i> Lihat Detail</a>
	          <a class="btn btn-small dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
	          <ul class="dropdown-menu">
	            <li><a href="<?php echo base_url(); ?>master_status_pegawai/edit/<?php echo $dp['id_status_pegawai']; ?>" class="small-box"><i class="icon-pencil"></i> Edit Data</a></li>
	            <li><a href="<?php echo base_url(); ?>master_status_pegawai/hapus/<?php echo $dp['id_status_pegawai']; ?>" onClick="return confirm('Anda yakin..???');"><i class="icon-trash"></i> Hapus Data</a></li>
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

	</div>
		</div>
	  </div><!-- /navbar-inner -->
	</div><!-- /navbar -->
    </div> <!-- /container -->
    <?php include "application/views/dashboard_admin/home/footer.php" ?>	
    
