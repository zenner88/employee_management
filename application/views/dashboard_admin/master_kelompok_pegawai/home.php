
<?php include "application/views/dashboard_admin/home/header.php" ?>
<div class="page-wrapper">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-12">
        <div class="card">
          <div class="card-block">
            <div class="pull-right">
              <?php echo form_open('master_kelompok_pegawai/cari','class="navbar-form pull-right"'); ?>
      <input type="text" class="span3" name="cari" placeholder="Masukkan kata kunci pencarian">
      <button type="submit" class="btn btn-primary"><i class="icon-search icon-white"></i> Cari Data</button>
    <?php echo form_close(); ?>
            </div>
            <h4 class="card-title">Master Kelompok Pegawai<a href="<?php echo base_url(); ?>master_kelompok_pegawai/tambah"><i class="fa fa-fw fa-plus"></i> </a></h4>
            <section>
  <table class="table table-hover table-condensed">
    <thead>
      <tr>
        <th>No.</th>
        <th>Nama Kelompok Pegawai</th>
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
        <td><?php echo $dp['nama_kelompok_pegawai']; ?></td>
    <td>
          <div class="btn-group">
            <a class="btn btn-small small-box" href="<?php echo base_url(); ?>master_kelompok_pegawai/detail/<?php echo $dp['id_kelompok_pegawai']; ?>"><i class="icon-ok-circle"></i> Lihat Detail</a>
            <a class="btn btn-small dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="<?php echo base_url(); ?>master_kelompok_pegawai/edit/<?php echo $dp['id_kelompok_pegawai']; ?>" class="small-box"><i class="icon-pencil"></i> Edit Data</a></li>
              <li><a href="<?php echo base_url(); ?>master_kelompok_pegawai/hapus/<?php echo $dp['id_kelompok_pegawai']; ?>" onClick="return confirm('Anda yakin..???');"><i class="icon-trash"></i> Hapus Data</a></li>
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
    </div>
  </div>
</div>

<?php include "application/views/dashboard_admin/home/footer.php" ?>

