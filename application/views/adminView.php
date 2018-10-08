
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Master Admin</title>

  <link rel="stylesheet" href="<?php echo base_url()?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url()?>assets/dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="<?php echo base_url()?>assets/dist/css/skins/_all-skins.min.css">
  
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
              <span class="hidden-xs"><?php echo "Logout"; ?></span>
            </a>
        </ul>
      </div>
    </nav>
  </header>
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Main content -->
    <section class="content">
      <div class="row">

        <div class="col-xs-12">
        <a href="<?php echo base_url()?>admin/createPesanan"><button 
        type="button" class="btn bg-olive btn-flat margin">
        tambah pesanan</button></a>

        <a href="<?php echo base_url()?>admin/urutkanPesanan"><button 
        type="button" class="btn bg-olive btn-flat margin">
        urutkan</button></a>

        <a href="<?php echo base_url()?>admin/cetak"><button 
        type="button" class="btn bg-olive btn-flat margin">
        print</button></a>
          <!-- /.box -->

            <div class="box-body">
              <h1>
                Semua Pesanan Produk
              </h1>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th class="col-md-1">pemesan</th>
                    <th class="col-md-1">Tanggal input</th>
                    <th class="col-md-1">produk</th>
                    <th class="col-md-1">level</th>
                    <th class="col-md-1">jumlah</th>
                    <th class="col-md-1">harga satuan</th>
                    <th class="col-md-1">total bayar</th>
                    <th class="col-md-1">Status</th>
                    <th class="col-md-1">waktu</th>
                </tr>
                </thead>
                <tbody>
                <?php
                foreach ($dataPesanan as $psn) : 
                ?>
                    <tr>
                        <td>
                         <?= $psn->pemesan ?>
                        </td>
                        <td>
                          <?= date('d F Y', strtotime($psn->tanggal)) ?>
                        </td>
                        <td>
                          <?= $psn->produk ?>
                        </td>
                        <td>
                          <?= $psn->level?>
                        </td>
                        <td>
                          <?= $psn->jumlah?>
                        </td>
                        <td>
                          <?= $psn->harga?>
                        </td>

                        <td>
                          <?= $psn->harga * $psn->jumlah?>
                        </td>
                        <td>
                          <?= $psn->status?>
                        </td>
                        <td>
                          <?= $psn->waktu . " menit"?>
                        </td>
<!-- 
                        <td>
                          <?php if ($psn->status == 'tersedia'): ?>
                            <a onclick="if(confirm('Apakah pesanan ini telah selesai ??')){ location.href='<?php echo base_url()?>pengelolaPesanan/deletePesanan/<?php echo $psn->id;?>'}" class="btn btn-danger">kirim</a>
                          <?php endif ?>
                        </td> -->
                    </tr>
                   <?php 
                 endforeach;
                  ?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
            </div>
            <!-- /.box-body -->
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
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab"></div>
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

</body>
</html>
