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
      <th style="border: none; width:60%"><img src="<?php echo base_url() ?>/assets/images/circle.png" width="50" ></th>
      <th style="border: none; color: black; width:150" >Laporan Pesanan Produk</th>
    </tr>
  </table>
  <div align="center">
  </div>
    
<hr>
<h3 align="center">
</h3>
<br>
<table id="t01" align="center">
  <tr id='judul' align="center">
    <th style="background-color: #000000; width: 90px">pemesan</th>
    <th style="background-color: #000000; width: 90px">tanggal</th>
    <th style="background-color: #000000; width: 90px">produk</th>
    <th style="background-color: #000000; width: 90px">level</th>
    <th style="background-color: #000000; width: 90px">jumlah</th>
    <th style="background-color: #000000; width: 90px">harga</th>

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
  <td style="border: none;"><?php echo "total pesanan  : ".$total; ?></td>
</table>
<br>
<div style="text-align: center; padding-top: 100px; padding-bottom: 20px">Pesanan terkirim</div>
<table id="t01" align="center">
  <tr id='judul' align="center">
    <th style="background-color: #000000; width: 90px">pemesan</th>
    <th style="background-color: #000000; width: 90px">tanggal</th>
    <th style="background-color: #000000; width: 90px">produk</th>
    <th style="background-color: #000000; width: 90px">level</th>
    <th style="background-color: #000000; width: 90px">jumlah</th>
    <th style="background-color: #000000; width: 90px">harga</th>

 </tr>
  <?php 
    foreach ($dataPesanan as $key) :   
  ?>
  <tr>
  <td><?php echo $key->pemesan?></td>
  <td><?php echo $key->tanggal?></td>
  <td><?php echo $key->produk?></td>
  <td><?php echo $key->level?></td>
  <td><?php echo $key->jumlah?></td>
  <td><?php echo $key->harga?></td>
  </tr>
  <?php endforeach; ?>
</table>
</body>
</html>
