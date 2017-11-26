<?php
$nama_file = date('Y-m-d')."_laporan_kenaikan_pangkat.xls";    
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
<td align="center">Rencana Usulan Kenaikan Pangkat (RUKP)</td>
</tr>
<tr>
<td></td>
<td>
  <table cellpadding="8" style="border-collapse:collapse;" border="1">
      <tr height="40" style="background-color:#EA7D57;">
        <td>Nomor</td>
        <td>NIP</td>
        <td>Nama Pegawai</td>
        <td>Jabatan</td>
		<td>Pangkat / Golongan lama</td>
		<td>Menjadi</td>
        
      </tr>
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
	$tambah = 4;
	$next = $awal+$tambah;
		echo $dp['ura']; ?>&nbsp;<?php echo $dp['gol'];?><BR>
        <?php echo $dp['LEFT(tanggal_sk_pangkat, CHAR_LENGTH(tanggal_sk_pangkat)-5)']; ?>&nbsp;<?php echo $next; ?>
        </td>
      </tr>
	 <?php
	 		$no++;
	 	}
	 ?>
  </table>
</td>
</tr>
</table>