<?php include "application/views/dashboard_admin/home/header.php" ?>
<div class="container">
  <div class="well">
  <div class="navbar navbar-inverse">
    <div class="navbar-inner">
    <div class="container">
      <a class="brand" href="#">Master Lokasi Pelatihan</a>
      <div class="nav-collapse">
      <ul class="nav">
        <li><a href="<?php echo base_url(); ?>master_lokasi_pelatihan/tambah" class="small-box"><i class="icon-plus-sign icon-white"></i> Tambah Lokasi Pelatihan</a></li>
      </ul>
      </div>
    <div class="span6 pull-right">
    <?php echo form_open('master_lokasi_pelatihan/cari','class="navbar-form pull-right"'); ?>
      <input type="text" class="span3" name="cari" placeholder="Masukkan kata kunci pencarian">
      <button type="submit" class="btn btn-primary"><i class="icon-search icon-white"></i> Cari Data</button>
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
        <th>Nama Lokasi Pelatihan</th>
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
        <td><?php echo $dp['nama_lokasi']; ?></td>
    <td>
          <div class="btn-group">
            <a class="btn btn-small small-box" href="<?php echo base_url(); ?>master_lokasi_pelatihan/detail/<?php echo $dp['id_lokasi_pelatihan']; ?>"><i class="icon-ok-circle"></i> Lihat Detail</a>
            <a class="btn btn-small dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="<?php echo base_url(); ?>master_lokasi_pelatihan/edit/<?php echo $dp['id_lokasi_pelatihan']; ?>" class="small-box"><i class="icon-pencil"></i> Edit Data</a></li>
              <li><a href="<?php echo base_url(); ?>master_lokasi_pelatihan/hapus/<?php echo $dp['id_lokasi_pelatihan']; ?>" onClick="return confirm('Anda yakin..???');"><i class="icon-trash"></i> Hapus Data</a></li>
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

<div class="container">
<?php include "application/views/dashboard_admin/home/footer.php" ?>  
</div>

