<?php include "application/views/dashboard_admin/home/header.php" ?>
<div class="container">
  <div class="well">
          
  <div class="navbar navbar-inverse">
    <div class="navbar-inner">
    <div class="container">
      <a class="brand" href="#">Master Satuan Kerja</a>
      <div class="nav-collapse">
      <ul class="nav">
        <li><a href="<?php echo base_url(); ?>master_satuan_kerja/tambah" class="small-box"><i class="icon-plus-sign icon-white"></i> Tambah Satuan Kerja</a></li>
      </ul>
      </div>
    <div class="span6 pull-right">
    <?php echo form_open('master_satuan_kerja/cari','class="navbar-form pull-right"'); ?>
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
        <th>Nama Satuan Kerja</th>
        <th>Parent Unit</th>
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
        <td><?php echo $dp['nama_satuan_kerja']; ?></td>
        <td><?php echo $dp['parent_unit']; ?></td>
    <td>
          <div class="btn-group">
            <a class="btn btn-small small-box" href="<?php echo base_url(); ?>master_satuan_kerja/detail/<?php echo $dp['id_satuan_kerja']; ?>"><i class="icon-ok-circle"></i> Lihat Detail</a>
            <a class="btn btn-small dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="<?php echo base_url(); ?>master_satuan_kerja/edit/<?php echo $dp['id_satuan_kerja']; ?>" class="small-box"><i class="icon-pencil"></i> Edit Data</a></li>
              <li><a href="<?php echo base_url(); ?>master_satuan_kerja/hapus/<?php echo $dp['id_satuan_kerja']; ?>" onClick="return confirm('Anda yakin..???');"><i class="icon-trash"></i> Hapus Data</a></li>
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

