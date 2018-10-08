<?php 
$jumlahPesanan = 0;
 ?>
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
<div class="wrapper">
  <div class="content-wrapper">

    <!-- Main content -->
    <section class="content">
      <div class="row">

        <a href="<?php echo base_url()?>admin"><button 
        type="button" class="btn bg-olive btn-flat margin">
        kembali</button></a>
       
          <!-- /.box -->
            <div class="box-body">
               <h1>
                Pesanan yang Belum Dikirim
              </h1>
              
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th class="col-md-1">produk</th>
                    <th class="col-md-1">level</th>
                    <th class="col-md-1">jumlah</th>
                    <th class="col-md-1">harga</th>
                    <th class="col-md-1">lama waktu</th>
                    <th class="col-md-1">status</th>
                    <th class="col-md-1">Opsi</th>
                </tr>
                </thead>
                <tbody>
                <?php
                foreach ($urutanPesanan as $psn) : 
                ?>
                    <tr>
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
                         <?= $psn->waktu . " menit" ?>
                        </td>
                        <td>
                         <?= $psn->status?>
                        </td>
                        <?php 
                        $jumlahPesanan = $jumlahPesanan + 1;
                         ?>
                        <td>
                          <?php if ($psn->status == "tersedia"): ?>
                            <a onclick="if(confirm('Apakah pesanan ini akan dikirim ??')){ location.href='<?php echo base_url()?>pengelolaPesanan/kirimPesanan/<?php echo $psn->id;?>'}" class="btn btn-danger">kirim</a>
                          <?php endif ?>
                        </td>
                    </tr>
                   <?php 
                 endforeach;
                  ?>
                </tbody>
              </table>
              <div style="font-size: 20px; font-style: bold; color: red"><?php echo "Jumlah Pesanan belum terkirim = ". $jumlahPesanan ?></div>
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

<!-- jQuery 3 -->
<script src="<?php echo base_url()?>assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url()?>assets/bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url()?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->

<!-- Sparkline -->
<script src="<?php echo base_url()?>assets/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo base_url()?>assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="<?php echo base_url()?>assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url()?>assets/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url()?>assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url()?>assets/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url()?>assets/dist/js/demo.js"></script>

<script src="<?php echo base_url()?>assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url()?>assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
</body>
</html>
