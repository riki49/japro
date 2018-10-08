<?php
  $id="";
  $harga=5000;
  $tgl_produksi="";
  $jumlah="";
  $level ="";
  $namaproduk = "";
  ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Form tambah pesanan</title>
  <!-- Tell the browser to be responsive to screen width -->
  
  <!-- Bootstrap 3.3.7 -->
    <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
 
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  
  <!-- Daterange picker -->
  
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <link rel="stylesheet" href="<?php echo base_url()?>assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">

</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a class="logo">
      <span class="logo-lg"><b>JAPRO</b></span>
    </a>
    
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="<?php echo base_url()?>login/doLogout" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo base_url()?>assets/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo "Logout" ?></span>
            </a>
          </li>
          <!-- Control Sidebar Toggle Button -->
        </ul>
      </div>
    </nav>
  </header>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Tambah Pesanan
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('admin') ?>"><i class="fa fa-dashboard"></i> admin</a></li>
        <li class="active">tambah</li>
      </ol>
    </section>

    <!-- Main content -->
<section class="content">
      <div class="row">

        <div class="col-xs-12">
        <a href="<?php echo base_url()?>admin"><button type="button" class="btn bg-olive btn-flat margin">Kembali</button></a>
            <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Form Pengiriman</h3>
            </div>
            <!-- /.box-header --> 
            <!-- form start -->
            <form action="<?php echo base_url()?>pengelolaPesanan/createPesanan" method="post" class="form-horizontal">
              <div class="box-body">
                 <div class="form-group">
                  <label class="col-sm-2 control-label">pemesan</label>
                  <div class="col-sm-6">
                    <input type="text" name="pemesan"  class="form-control" id="success" />
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Tanggal Pesan</label>
                  <div class="col-sm-6">
                    <input type="date" name="tanggal"  class="form-control" id="tanggal" />
                  </div>
                </div>

                 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label" >nama produk</label>
                  <div class="col-sm-6">
                    <select name="produk" class="form-control" id="produk" onkeyup="sum();" >
                      <option value="makaroni">makaroni</option> 
                      <option value="siomay">siomay</option> 
                      <option value="bihun">bihun</option> 
                      <option value="pangsit">pangsit</option> 
                      <option value="batagor">batagor</option> 
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">level</label>
                  <div class="col-sm-6">
                    <select name="level" class="form-control" id="success">
                        <option value="aman">aman</option> 
                        <option value="siaga">siaga</option>    
                        <option value="waspada">waspada</option>    
                        <option value="bahaya">bahaya</option>    
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">jumlah pesan </label>

                  <div class="col-sm-6">
                    <input type="text" name="jumlah"  class="form-control" id="jumlahambil" onkeyup="sum();" />
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">harga satuan</label>
                  <div class="col-sm-6">
                    <input type="text" name="harga" readonly value="<?php echo $harga ?>"  class="form-control" id="harga" />
                  </div>
                </div>

                 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label"  >jumlah bayar</label>
                  <div class="col-sm-6">
                    <input readonly type="text" name="jumlahbayar" value="<?php echo $jumlah ?>"  class="form-control" id="jumlahbayar" />
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">lama waktu</label>
                  <div class="col-sm-6">
                    <input readonly type="text" name="waktu"  class="form-control" id="waktu" />
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Action</label>

                  <div class="col-sm-6">
                    <input type="submit" class="btn bg-olive btn-flat margin" value="Simpan">
                    <input type="reset" class="btn bg-maroon btn-flat margin" value="Ulangi">
                  </div>
                </div>
              </div>
            </form>
          </div>
          
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer>
    <div class="pull-right hidden-xs">
    </div>
  </footer>
<script>
  function sum() {
    var jmlharga = document.getElementById('harga').value;
    var jmlambil = document.getElementById('jumlahambil').value;
    var produk = document.getElementById('produk').value;
    var jmlbayar = parseInt(jmlharga) * parseInt(jmlambil);
    var waktu = 0;
    var masak = 'true';
    var sisa = jmlambil;

    if (produk == 'makaroni') {
      while (masak == 'true') {
        if (sisa > 5) {
          masak = 'true';
          sisa = sisa - 5;
          waktu = waktu + 20;
        } else { 
          masak = 'false';
          waktu = waktu + 20;
        }
      }
      waktu = waktu + (jmlambil * 5);
    } else  if (produk == 'siomay') {
      waktu = 5 * jmlambil;
    } else  if (produk == 'bihun') {
      while (masak == 'true') {
        if (sisa > 7) {
          masak = 'true';
          sisa = sisa - 7;
          waktu = waktu + 10;
        } else { 
          masak = 'false';
          waktu = waktu + 10;
        }
      }
      waktu = waktu + (jmlambil * 5);
    } else  if (produk == 'pangsit') {
      while (masak == 'true') {
        if (sisa > 7) {
          masak = 'true';
          sisa = sisa - 7;
          waktu = waktu + 15;
        } else { 
          masak = 'false';
          waktu = waktu + 15;
        }
      }
      waktu = waktu + (jmlambil * 5);
    } else {
      waktu = jmlambil * 5;
    }
    
    if (!isNaN(jmlbayar)) {
       document.getElementById('jumlahbayar').value = jmlbayar;
       document.getElementById('waktu').value = waktu;
    }
  }
</script>
</body>
</html>
