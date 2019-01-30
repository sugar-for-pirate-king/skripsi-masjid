<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8" />
    <title>Website Administrator Masjid Al-Hanif</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no" />
    <link rel="apple-touch-icon" href="pages/ico/60.png">
    <link rel="apple-touch-icon" sizes="76x76" href="pages/ico/76.png">
    <link rel="apple-touch-icon" sizes="120x120" href="pages/ico/120.png">
    <link rel="apple-touch-icon" sizes="152x152" href="pages/ico/152.png">
    <link rel="icon" type="image/x-icon" href="favicon.ico" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <meta content="" name="description" />
    <meta content="" name="author" />
    <link href="<?php echo base_url('assets/plugins/pace/pace-theme-flash.css');?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('assets/plugins/bootstrap/css/bootstrap.min.css');?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('assets/plugins/font-awesome/css/font-awesome.css');?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('assets/plugins/jquery-scrollbar/jquery.scrollbar.css');?>" rel="stylesheet" type="text/css" media="screen" />
    <link href="<?php echo base_url('assets/plugins/select2/css/select2.min.css');?>" rel="stylesheet" type="text/css" media="screen" />
    <link href="<?php echo base_url('assets/plugins/switchery/css/switchery.min.css');?>" rel="stylesheet" type="text/css" media="screen" />
    <link href="<?php echo base_url('assets/plugins/nvd3/nv.d3.min.css');?>" rel="stylesheet" type="text/css" media="screen" />
    <link href="<?php echo base_url('assets/plugins/mapplic/css/mapplic.css');?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('assets/plugins/rickshaw/rickshaw.min.css');?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('assets/plugins/bootstrap-datepicker/css/datepicker3.css');?>" rel="stylesheet" type="text/css" media="screen">
    <link href="<?php echo base_url('assets/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css');?>" rel="stylesheet" type="text/css" media="screen">
    <link href="<?php echo base_url('assets/plugins/jquery-datatable/media/css/dataTables.bootstrap.min.css');?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('assets/plugins/jquery-datatable/extensions/FixedColumns/css/dataTables.fixedColumns.min.css');?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('assets/plugins/datatables-responsive/css/datatables.responsive.css');?>" rel="stylesheet" type="text/css" media="screen" />
    <link href="<?php echo base_url('assets/css/dashboard.widgets.css');?>" rel="stylesheet" type="text/css" media="screen" />
    <link href="<?php echo base_url('pages/css/pages-icons.css');?>" rel="stylesheet" type="text/css">
    <link class="main-stylesheet" href="<?php echo base_url('pages/css/themes/modern.css');?>" rel="stylesheet" type="text/css" />
  </head>
  <body class="fixed-header horizontal-menu horizontal-app-menu dashboard">
  <header>
    <div class="header p-r-0 bg-primary">
      <div class="header-inner header-md-height">
        <a href="#" class="btn-link toggle-sidebar hidden-lg-up pg pg-menu text-white" data-toggle="horizontal-menu"></a>
        <div class="">
          <div class="brand inline no-border hidden-xs-down">
            <img src="<?php echo site_url('assets/img/logo_masjid_white.png');?>" alt="logo" class="brand" data-src="<?php echo site_url('assets/img/logo_masjid_white.png');?>" data-src-retina="<?php echo site_url('assets/img/logo_masjid_white_2x.png');?>" width="160" height="60">
          </div>
        </div>
        <script type="text/javascript">

          var detik = <?php echo date('s'); ?>;
          var menit = <?php echo date('i'); ?>;
          var jam   = <?php echo date('H'); ?>;
           
          function clock()
          {
              if (detik!=0 && detik%60==0) {
                  menit++;
                  detik=0;
              }
              second = detik;
               
              if (menit!=0 && menit%60==0) {
                  jam++;
                  menit=0;
              }
              minute = menit;
               
              if (jam!=0 && jam%24==0) {
                  jam=0;
              }
              hour = jam;
               
              if (detik<10){
                  second='0'+detik;
              }
              if (menit<10){
                  minute='0'+menit;
              }
               
              if (jam<10){
                  hour='0'+jam;
              }
              waktu = hour+':'+minute+':'+second;
               
              document.getElementById("clock").innerHTML = waktu;
              detik++;
          }
       
          setInterval(clock,1000);
        </script>
        <div>
            <span class="bold text-white fs-16"  id="clock"></span>
        </div>  
      </div>
      <div class="bg-white">
        <div class="container">
          <div class="menu-bar header-sm-height" data-pages-init='horizontal-menu' data-hide-extra-li="4">
            <a href="#" class="btn-link toggle-sidebar hidden-lg-up pg pg-close" data-toggle="horizontal-menu">
            </a>
            <ul>
              <li class="">
                <a href="<?php echo site_url('beranda');?>">Beranda</a>
              </li><br>
              <li class="">
                <a href="javascript:;"><span class="title">Tentang</span>
                <span class=" arrow"></span></a>
                <ul class="">
                  <li class="">
                    <a href="<?php echo site_url('profile');?>">Profile</a>
                  </li>
                  <li class="">
                    <a href="<?php echo site_url('sejarah');?>">Sejarah</a>
                  </li>
                </ul>
              </li><br>
              <li class="active">
                <a href="<?php echo site_url('agenda');?>"><span class="title">Agenda</span></a>
              </li><br>
              <li>
                <a href="javascript:;"><span class="title">Jadwal</span>
                <span class=" arrow"></span></a>
                <ul class="">
                  <li class="">
                    <a href="<?php echo site_url('jumat');?>">Jadwal Jum'at</a>
                  </li>
                  <li class="">
                    <a href="<?php echo site_url('shalat');?>">Jadwal Shalat</a>
                  </li>
                </ul>
              </li><br>
              <li>
                <a href="<?php echo site_url('kajian');?>"><span class="title">Kajian</span></a>
              </li><br>
              <li>
                <a href="javascript:;"><span class="title">Daftar</span>
                <span class=" arrow"></span></a>
                <ul class="">
                  <li class="">
                    <a href="<?php echo site_url('pengurus');?>">Pengurus</a>
                  </li>
                  <li class="">
                    <a href="<?php echo site_url('ustadz');?>">Ustadz</a>
                  </li>
                </ul>
              </li><br>
              <li>
                <a href="javascript:;">
                  <span class="title">Laporan</span>
                  <span class=" arrow"></span>
                </a>
                <ul class="">
                  <li class="">
                    <a href="<?php echo site_url('infaq');?>">Infaq</a>
                  </li>
                  <li class="">
                    <a href="<?php echo site_url('keuangan');?>">Keuangan</a>
                  </li>
                </ul>
              </li><br>
              <li>
                <a href="<?php echo site_url('kontak');?>"><span class="title">Kontak</span></a>
              </li><br>
              <li>
                <a href="javascript:;"><span class="title">Lainnya</span>
                <span class=" arrow"></span></a>
                <ul class="">
                  <li class="">
                    <a href="<?php echo site_url('layanan');?>">Layanan</a>
                  </li>
                  <li class="">
                    <a href="<?php echo site_url('pengumuman');?>">Pengumuman</a>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </header>
    <div class="page-container ">
      <!-- START PAGE CONTENT WRAPPER -->
      <div class="page-content-wrapper ">
        <!-- START PAGE CONTENT -->
        <div class="content sm-gutter">
          <!-- START BREADCRUMBS -->
          <div class="bg-white">
            <div class="container">
              <ol class="breadcrumb breadcrumb-alt">
                <li class="breadcrumb-item"><a href="<?php echo site_url('beranda');?>">Beranda</a></li>
                <li class="breadcrumb-item active">Agenda</li>
              </ol>
            </div>
          </div>
          <!-- END BREADCRUMBS -->
          <!-- START CONTAINER FLUID -->
          <div class="container sm-padding-10 p-t-20 p-l-0 p-r-0">
            <div class=" col-xlg-12 bg-white">
              <div class="col-md-12 m-b-10">
                <div class="card card-transparent">
              <?php 
                foreach ($agenda as $value)
                {
              ?>
                <div class="card-block">
                  <div class="row">
                    <div class="col-md-4">
                      <img class="img-fluid" src="<?php echo base_url('uploads/'.$value->gambar)?>" style="width: 250px; height: 150px;">
                    </div>
                    <div class="col-md-8">
                      <h2><?php echo $value->judul;?></h2>
                        <p style="text-align:justify;"><?php echo substr($value->isi,0,500);?></p>
                        <p>
                          <a href="<?php echo site_url('agenda/'.$value->slug); ?>" class="btn btn-primary">Baca Selengkapnya</a> 
                          <a href="#" class="btn btn-danger">Diposkan pada <?php echo $value->tanggal;?></a>
                        </p>
                    </div>
                  </div>
                </div>
              <?php
                }
              ?>
                </div>
              </div>
            </div>
          </div>
          <!-- END CONTAINER FLUID -->
        </div>
        <!-- END PAGE CONTENT -->
        <!-- START COPYRIGHT -->
        <footer>
        <div class=" container container-fixed-lg footer">
          <div class="copyright sm-text-center">
            <p class="no-margin text-center">
              <span class="hint-text">Copyright &copy; 2018 </span>
              <span class="font-montserrat">Website Masjid Al-Hanif</span>.
              <span class="hint-text">All rights reserved. </span>
            </p>
            <p class="no-margin text-center">
              <span class="hint-text">Made with <i class="fa fa-heart"></i> by Handika</span>
            </p>
            <div class="clearfix"></div>
          </div>
        </div>
        </footer>
        <!-- END COPYRIGHT -->
      </div>
      <!-- END PAGE CONTENT WRAPPER -->
    </div>
    <!-- BEGIN VENDOR JS -->
    <script src="<?php echo base_url('assets/plugins/pace/pace.min.js');?>" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/plugins/jquery/jquery-1.11.1.min.js');?>" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/plugins/modernizr.custom.js');?>" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/plugins/jquery-ui/jquery-ui.min.js');?>" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/plugins/tether/js/tether.min.js');?>" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/plugins/bootstrap/js/bootstrap.min.js');?>" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/plugins/jquery/jquery-easy.js');?>" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/plugins/jquery-unveil/jquery.unveil.min.js');?>" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/plugins/jquery-ios-list/jquery.ioslist.min.js');?>" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/plugins/jquery-actual/jquery.actual.min.js');?>"></script>
    <script src="<?php echo base_url('assets/plugins/jquery-scrollbar/jquery.scrollbar.min.js');?>"></script>
    <script src="<?php echo base_url('assets/plugins/select2/js/select2.full.min.js');?>" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/plugins/classie/classie.js');?>" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/plugins/switchery/js/switchery.min.js');?>" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/plugins/nvd3/lib/d3.v3.js');?>" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/plugins/nvd3/nv.d3.min.js');?>" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/plugins/nvd3/src/utils.js');?>" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/plugins/nvd3/src/tooltip.js');?>" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/plugins/nvd3/src/interactiveLayer.js');?>" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/plugins/nvd3/src/models/axis.js');?>" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/plugins/nvd3/src/models/line.js');?>" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/plugins/nvd3/src/models/lineWithFocusChart.js');?>" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/plugins/mapplic/js/hammer.js');?>"></script>
    <script src="<?php echo base_url('assets/plugins/mapplic/js/jquery.mousewheel.js');?>"></script>
    <script src="<?php echo base_url('assets/plugins/mapplic/js/mapplic.js');?>"></script>
    <script src="<?php echo base_url('assets/plugins/rickshaw/rickshaw.min.js');?>"></script>
    <script src="<?php echo base_url('assets/plugins/jquery-metrojs/MetroJs.min.js');?>" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/plugins/jquery-sparkline/jquery.sparkline.min.js');?>" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/plugins/skycons/skycons.js');?>" type="text/javascript"></script>
    <!-- END VENDOR JS -->
    <!-- BEGIN CORE TEMPLATE JS -->
    <script src="<?php echo base_url('pages/js/pages.min.js');?>"></script>
    <!-- END CORE TEMPLATE JS -->
    <!-- BEGIN PAGE LEVEL JS -->
    <script src="<?php echo base_url('assets/js/dashboard.js');?>" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/js/datatables.js');?>" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/js/scripts.js');?>" type="text/javascript"></script>
    <!-- END PAGE LEVEL JS -->
  </body>
</html>