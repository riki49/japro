<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Kumpulan Data Warga</title>


  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="assets/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="assets/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="assets/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="assets/dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="assets/bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="assets/bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="assets/bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

<link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
<link href="assets/css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="assets/css/font-awesome.css" rel="stylesheet">
<!--css-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="New Shop Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="assets/js/jquery.min.js"></script>
<link href='//fonts.googleapis.com/css?family=Cagliostro' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,800italic,800,700italic,700,600italic,600,400italic,300italic,300' rel='stylesheet' type='text/css'>
<!--search jQuery-->
    <script src="assets/js/main.js"></script>
<!--search jQuery-->
  <script src="assets/js/responsiveslides.min.js"></script>

<!-- jquery -->

<script src="assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- ChartJS -->
<script src="assets/bower_components/chart.js/Chart.js"></script>
<!-- FastClick -->
<script src="assets/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="assets/dist/js/demo.js"></script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script>
    $(function () {
      $("#slider").responsiveSlides({
        auto: true,
        nav: true,
        speed: 100,
        namespace: "callbacks",
        pager: true,
      });
    });


      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['RW', 'Hektar'],
          ['RW1',     11],
          ['RW2',      2],
          ['RW3',  2],
          ['RW4', 2],
          ['RW5',    7]
        ]);

        var options = {
          title: 'lUAR WILAYAH RW dalam Hektar'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
</script>

</head>
<div class="heder-bottom">
                <div class="container">
                    <div class="logo-nav-left">
                            <h1><a>kudawar<span>kumpulan data warga</span></a></h1>
                        </div>
                    </div>
                </div>

<body class="hold-transition skin-blue sidebar-mini">

<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a  class="logo">
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li>
            <a href="<?php echo base_url('') ?>" class="glyphicon glyphicon-dashboard" > Beranda
            </a>
          </li>
          <li class="dropdown notifications-menu">
              <!-- /. tools -->
            <a href="<?php echo base_url('login') ?>"  class="fa fa-circle-o" > login
            </a>
          </li>
          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            </a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
 

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
 

    <!-- Main content -->
    <section class="content">
      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <section class="col-lg-7 connectedSortable">
          <!-- Custom tabs (Charts with tabs)-->
          <div class="nav-tabs-custom">
            <!-- Tabs within a box -->
            <ul class="nav nav-tabs pull-right">
              <li class="active"><a href="#revenue-chart" data-toggle="tab">jumlah penduduk per RW</a></li>
              <li><a href="#sales-chart" data-toggle="tab">Luas Wilayah RW</a></li>
              <li class="pull-left header"><i class="fa fa-inbox"></i> Data Desa</li>
            </ul>
            <div class="tab-content no-padding">
              <!-- Morris chart - Sales -->
              <div class="chart tab-pane active" id="revenue-chart" style="position: relative; height: 300px;"></div>

              <div class="chart tab-pane" id="sales-chart" style="position: relative; height: 300px;">
                  <div id="piechart" style="width: 100%; height: 500px;"></div>
              </div>
            </div>
          </div>
          <!-- /.nav-tabs-custom -->

          <!-- Chat box -->
          <div class="box box-success">
            <div class="box-header">
              <!-- <i class="fa fa-comments-o"></i> -->

              <h3 class="box-title" >visi</h3>
            </div>
            <div class="box-body chat" style="text-align: justify;" id="chat-box">
              <div class="item">
                <!-- <img src="dist/img/user3-128x128.jpg" alt="user image" class="offline"> -->

                <p>
                   Terbangunnya Tata Kelola Pemerintah Desa yang Baik dan Bersih guna Mewujudkan Pemerintahan Desa yang Adil, Makmur dan Sejahtera.
                </p>
              </div>
              <!-- /.item -->
              <!-- /.item -->
            </div>
          </div>
          <!-- /.box (chat box) -->

          <!-- TO DO List -->
          <div class="box box-primary">
            <div class="box-header">
              <i class="ion ion-clipboard"></i>

              <h3 class="box-title">Misi</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <p>Melakukan Reformasi sistem kinerja Aparatur Pemerintahn Desa guna Meningkatkan kualitas Pelayanan Masyarakat;
            Menyelenggarakan Pemerintahan yang Bersih, terbebas dari Korupsi serta bentuk-bentuk Penyelenggaraan Lainnya;
            Menyelenggarakan Urusan Pemerintah Desa secara terbuka dan bertanggungjawaban sesuai dengan Peraturan Perundang-undangan;
            Meningkatkan Perekonomian Masyarakat melalui Penciptaan Lapangan Kerja seluas-luasnya dengan berbasis pada Potensi Asli Desa;
            Memberdayakan Pemerintahan , Dusun RT dan RW secara Profesional da Proposional;
            Meningkatkan Mutu Kesejahteraan Masyarakat untuk mencapai taraf kehidupan yang lebih baik dan layak.</p>
            </div>
          </div>
          <!-- /.box -->







          <!-- BAR CHART -->
     <!--      <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Bar Chart</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <div class="chart">
                <canvas id="barChart" style="height:230px"></canvas>
              </div>
            </div>
            <!-- /.box-body -->
          <!-- </div> --> 
          <!-- /.box -->






          <!-- quick email widget -->
          <div class="box box-info">
            <div class="box-header">
              <!-- <i class="fa fa-envelope"></i> -->

              <!-- <h3 class="box-title">Quick Email</h3> -->
              <div class="pull-right box-tools">
                <!-- <button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip" -->
                        <!-- title="Remove"> -->
                  <!-- <i class="fa fa-times"></i></button> -->
              </div>
            </div>
            <div class="box-body">
              <p></p>
            </div>
          </div>

        </section>
        <!-- /.Left col -->
        <!-- right col (We are only adding the ID to make the widgets sortable)-->
        <section class="col-lg-5 connectedSortable">

          <div class="box box-solid bg-light-blue-gradient">
            <div class="box-header">
              <h3 class="box-title">
                STAF DESA
              </h3>
            </div>
            <div class="box-footer no-border">
             <div class="banner-w3">
                        <div class="demo-1">            
                            <div id="example1" class="core-slider core-slider__carousel example_1">
                                <div class="core-slider_viewport">
                                    <div class="core-slider_list">
                                        <div class="core-slider_item">
                                            <img src="assets/images/1.jpg" class="img-responsive" alt="">
                                        </div>
                                         <div class="core-slider_item">
                                             <img src="assets/images/3.jpg" class="img-responsive" alt="">
                                         </div>
                                        <div class="core-slider_item">
                                              <img src="assets/images/2.jpg" class="img-responsive" alt="">
                                        </div>
                                        <div class="core-slider_item">
                                              <img src="assets/images/4.jpg" class="img-responsive" alt="">
                                        </div>
                                     </div>
                                </div>
                                <div class="core-slider_nav">
                                    <div class="core-slider_arrow core-slider_arrow__right"></div>
                                    <div class="core-slider_arrow core-slider_arrow__left"></div>
                                </div>
                                <div class="core-slider_control-nav"></div>
                            </div>
                        </div>
                        <link href="assets/css/coreSlider.css" rel="stylesheet" type="text/css">
                        <script src="assets/js/coreSlider.js"></script>
                        <script>
                        $('#example1').coreSlider({
                          pauseOnHover: false,
                          interval: 3000,
                          controlNavEnabled: true
                        });

                        </script>
                    </div>  
              </div>
            </div>

          <!-- Map box -->
          <div class="box box-solid bg-light-blue-gradient">
            <div class="box-header">
              <!-- tools box -->
              <div class="pull-right box-tools">
                <button type="button" class="btn btn-primary btn-sm pull-right" data-widget="collapse"
                        data-toggle="tooltip" title="Collapse" style="margin-right: 5px;">
                  <i class="fa fa-minus"></i></button>
              </div>
              <!-- /. tools -->

              <i class="fa fa-map-marker"></i>

              <h3 class="box-title">
                PETA DESA
              </h3>
            </div>
            <div class="box-footer no-border">
              <iframe width="100%" height="250" id="gmap_canvas" src="https://maps.google.com/maps?q=sukamenak&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
                  </iframe>
            </div>
            <!-- /.box-body-->

          </div>
          <!-- /.box -->

          <!-- Calendar -->
          <div class="box box-solid bg-green-gradient">
            <div class="box-header">
              <i class="fa fa-calendar"></i>

              <h3 class="box-title">Calendar</h3>
              <!-- tools box -->
              <div class="pull-right box-tools">
                <!-- button with a dropdown -->

                <button type="button" class="btn btn-success btn-sm" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-success btn-sm" data-widget="remove"><i class="fa fa-times"></i>
                </button>
              </div>
              <!-- /. tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <!--The calendar -->
              <div id="calendar" style="width: 100%"></div>
            </div>

          </div>
          <!-- /.box -->

        </section>
        <!-- right col -->
      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <div class="tab-content">
    </div>
  </aside>
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="assets/bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="assets/bower_components/raphael/raphael.min.js"></script>
<script src="assets/bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="assets/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="assets/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="assets/bower_components/moment/min/moment.min.js"></script>
<script src="assets/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="assets/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="assets/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="assets/dist/js/demo.js"></script>
</body>

<div class="footer-w3l">
            <div class="container">
              <div class="footer-grids">
                <div class="col-md-3 footer-grid">
                  <h4>Follow Us</h4>
                  <p></p>
                  <div class="social-icon">
                    <a href="https://github.com/riki49" target="blank"><i class="icon"></i></a>
                    <a href="https://web.facebook.com/Husnudzon.Food" target="blank"><i class="icon1"></i></a>
                    <a href="https://www.youtube.com/channel/UCM9wyk8h81LWs7DcqqTxGmA" target="blank"><i class="icon2"></i></a>
                    <a href="https://www.instagram.com/husnudzhonfood_official" target="blank"><i class="icon3"></i></a>
                  </div>
                </div>
                <div class="col-md-3 footer-grid foot">
                  <h4>Contacts</h4>
                  <ul>
                    <li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i><a href="https://goo.gl/maps/gpX1cfrF3Cx" target="blank">jalan sukamenak margahayu</a></li>
                    <li><i class="glyphicon glyphicon-phone" aria-hidden="true"></i><a>+628-2317-3084-30</a></li>
                    
                  </ul>
                </div>
              <div class="clearfix"> </div>
              </div>
              
            </div>
          </div>

</html>
