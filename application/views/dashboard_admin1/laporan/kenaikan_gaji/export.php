<?php
$nama_file = date('Y-m-d')."_laporan_kenaikan_gaji.xls";    
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
<td align="center">Usulan Kenaikan Gaji Berkala (UKGB)</td>
</tr>
<tr>
<td></td>
<td>
  <table cellpadding="8" style="border-collapse:collapse;" border="1">
       <tr>
        <th>No.</th>
        <th>NIP</th>
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
</td>
</tr>
</table>