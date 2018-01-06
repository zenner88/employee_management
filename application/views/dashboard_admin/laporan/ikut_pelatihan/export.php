<?php
$nama_file = date('Y-m-d')."_laporan_pegawai_ikut_pelatihan.xls";    
header("Pragma: public");   
header("Expires: 0");   
header("Cache-Control: must-revalidate, post-check=0,pre-check=0");     
header("Content-Type: application/force-download");     
header("Content-Type: application/octet-stream");   
header("Content-Type: application/download");   
header("Content-Disposition: attachment;filename=".$nama_file."");  
header("Content-Transfer-Encoding: binary ");
?>
<table>
<tr>
<td></td>
<td align="center">Laporan Pegawai Yang  Pernah Mengikuti Pelatihan/Diklat Pada Satuan Kerja Tertentu</td>
</tr>
<tr>
<td></td>
<td>
  <table cellpadding="8" style="border-collapse:collapse;" border="1">
      <tr height="40" style="background-color:#EA7D57;">
        <td>Nomor</td>
        <td>NIK</td>
        <td>Nama Pegawai</td>
        <td>Lokasi Pelatihan</td>
        <td>Tanggal Sertifikat</td>
        <td>Jam Pelatihan</td>
      </tr>
	<?php
		$no=1;
		foreach($data_pegawai->result_array() as $dp)
		{
	?>
      <tr height="35">
        <td><?php echo $no; ?></td>
        <td><?php echo $dp['nip'].'<font color="white">_</font>'; ?></td>
        <td><?php echo $dp['nama_pegawai'] ?></td>
        <td><?php echo $dp['lokasi_pelatihan'] ?></td>
        <td><?php echo $dp['tanggal_sertifikat'] ?></td>
        <td><?php echo $dp['jam_pelatihan'] ?></td>
      </tr>
	 <?php
	 		$no++;
	 	}
	 ?>
  </table>
</td>
</tr>
</table>