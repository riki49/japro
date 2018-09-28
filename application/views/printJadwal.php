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
  <tr id='judul' align="center">
    <th style="background-color: #000000;" >Nomer Induk </th>
    <th style="background-color: #000000;" >Nama Lengkap</th>
    <th style="background-color: #000000;">kelamin</th>
    <th style="background-color: #000000;">Tempat/Tanggal Lahir</th>
    <th style="background-color: #000000;">Nama Kampung</th>
    <th style="background-color: #000000;">RW/RW</th>

 </tr>
  <?php 
  $total=0;
    foreach ($dataPesanan as $key) :   
  ?>
  <tr>
  <td><?php echo $key->pemesan?></td>
  <td><?php echo $key->tanggal?></td>
  <td><?php echo $key->produk?></td>
  <td><?php echo $key->level?></td>
  <td><?php echo $key->jumlah?></td>
  <td><?php echo $key->harga?></td>

  <?php $total = $total + 1; ?>
  </tr>
  <?php endforeach; ?>
  <td style="border: none;"><?php echo "total warga  : ".$total; ?></td>
</table>
</body>
</html>
