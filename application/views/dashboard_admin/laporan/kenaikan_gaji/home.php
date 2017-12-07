<?php include "application/views/dashboard_admin/home/header.php" ?>
<div class="container">
    <div class="well">
  <div class="navbar navbar-inverse">
    <div class="navbar-inner">
    <div class="container">
      <a class="brand" href="#">Usulan Kenaikan Gaji Berkala (UKGB)</a>
    <div class="span6 pull-right">
    <?php
      echo form_open("kenaikan_gaji/set",'class="navbar-form pull-right"');
    ?>
      <div class="span2"><strong>Tahun</strong></div>
      <div class="span">:</div>
      <div class="span3">
      <select class="span3" name="id_satuan_kerja">
      <option value="">- Tahun -</option>
      <option value="Semua">Semua</option>
      <option value="2017">2017</option>
      </select>
    </div>
    <div class="span4 pull-right">
      <a class="btn" href="<?php echo base_url(); ?>kenaikan_gaji/export"><i class="icon-ok-circle"></i> Export ke Excell</a>
      <button type="submit" class="btn btn-primary"><i class="icon-search icon-white"></i> Cari Data Laporan</button>
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
    <th>Pangkat / Golongan</th>
    <th>Keterangan</th>
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
        <td><?php echo $dp['uraian']; ?> <?php echo $dp['golongan']; ?></td>
        <td><?php 
    $awal = $dp['SUBSTRING(tanggal_sk,-4)'];
  $tambah = 2;
  $next = $awal+$tambah;
    echo $dp['LEFT(f.tanggal_sk, CHAR_LENGTH(tanggal_sk)-5)']; ?>&nbsp;<?php echo $next; ?>
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





</div>

<div class="container">
<?php include "application/views/dashboard_admin/home/footer.php" ?>  
</div>

