<!DOCTYPE>
<html>
<head>
<style>

<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td {
    border: 1px solid #000000;
    text-align: left;
    padding: 8px;
}
th {
    border: 1px solid #000000;
    text-align: left;
    padding: 8px;
    color: #ffffff;
    /*background-color: #000000;*/
}
tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
</style>
</head>
<body> 
  <table id="t01" align="center">
    <tr>
      <th style="border: none;"><img src="<?php echo base_url() ?>/assets/images/ok.png" width="100" ></th>
      <th style="border: none; color: black" ><div>Laporan Warga Desa</div></th>
    </tr>
  </table>
  <div align="center">
  </div>
    
<hr>
<h3 align="center">
</h3><br>
<table id="t01" align="center">
  <tr align="center">
    <th >Nomer Induk </th>
    <th >Nama Lengkap</th>
    <th >kelamin</th>
    <th >Tempat/Tanggal Lahir</th>
    <th >Nama Kampung</th>
    <th >RW/RW</th>
    <th >status</th>
    <th >Pekerjaan</th>
    <th >agama</th>

 </tr>
  <?php 
  $total=0;
    foreach ($report as $key) :   
  ?>
  <tr>
  <td><?php echo $key->nik?></td>
  <td><?php echo $key->nama?></td>
  <td><?php echo $key->kelamin?></td>
  <td><?php echo $key->tempat."/".$key->tanggal?></td>
  <td><?php echo $key->alamat?></td>
  <td><?php echo $key->rt."/".$key->rw?></td>
  <td><?php echo $key->status?></td>
  <td><?php echo $key->pekerjaan?></td>
  <td><?php echo $key->agama?></td>

  <?php $total = $total + 1; ?>
  </tr>
  <?php endforeach; ?>
  <td style="border: none;"><?php echo "total warga  : ".$total; ?></td>
</table>
</body>
</html>
