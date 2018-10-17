<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Toko Desi</title>
	<!-- Bootstrap Styles-->
    <link href="<?php echo base_url() ?>/assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FontAwesome Styles-->
    <link href="<?php echo base_url() ?>/assets/css/font-awesome.css" rel="stylesheet" />
     <!-- Morris Chart Styles-->
   
        <!-- Custom Styles-->
    <link href="<?php echo base_url() ?>/assets/css/custom-styles.css" rel="stylesheet" />
     <!-- Google Fonts-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
     <!-- TABLE STYLES-->
    <!-- <link href="<?php echo base_url() ?>/assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" /> -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">

</head>
<body>
 <div id="wrapper">
   
        <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <!-- <li> -->
                        <!-- <a href="<?php echo base_url().'Dashboard' ?>"><i class="fa fa-dashboard"></i> Dashboard</a> -->
                    <!-- </li> -->
                    <li>
                        <a href="<?php echo base_url().'transaksi'?>"><i class="fa fa-edit"></i> Transaksi </a>
                    </li>
                    
                    <li>
                        <a href="<?php echo base_url().'kategori'?>"><i class="fa fa-desktop"></i> Kategori Barang</a>
                    </li>
                    
                    <li>
                        <a href="<?php echo base_url().'barang'?>"><i class="fa fa-bar-chart-o"></i> Stok Barang</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url().'operator'?>"><i class="fa fa-qrcode"></i> Operator Sistem</a>
                    </li>

                    <li>
                        <a href="#"><i class="fa fa-sitemap"></i> Lihat Laporan<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="<?php echo base_url().'transaksi/laporan'?>">Laporan Periode</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url().'transaksi/excel'?>">Cetak Laporan Excel</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url().'transaksi/pdf'?>" target="_blank">Cetak Laporan PDF</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="<?php echo base_url().'auth/logout'?>"><i class="fa fa-fw fa-file"></i> Keluar</a>
                    </li>
                </ul>

            </div>

        </nav>

    </div>

<!-- jQuery 3 -->
<script src="<?php echo base_url()?>assets/bower_components/jquery/dist/jquery.min.js"></script>
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
