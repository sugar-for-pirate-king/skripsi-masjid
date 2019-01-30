<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8" />
    <title>Website Administrator Masjid Al-Hanif</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no" />
    <link rel="icon" type="image/x-icon" href="#" />
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
    <link href="<?php echo base_url('assets/plugins/bootstrap3-wysihtml5/bootstrap3-wysihtml5.min.css');?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('assets/plugins/bootstrap-tag/bootstrap-tagsinput.css');?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('assets/plugins/dropzone/css/dropzone.css');?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('assets/plugins/bootstrap-datepicker/css/datepicker3.css');?>" rel="stylesheet" type="text/css" media="screen">
    <link href="<?php echo base_url('assets/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css');?>" rel="stylesheet" type="text/css" media="screen">
    <link href="<?php echo base_url('assets/plugins/bootstrap-timepicker/bootstrap-timepicker.min.css');?>" rel="stylesheet" type="text/css" media="screen">
    <link href="<?php echo base_url('pages/css/pages-icons.css');?>" rel="stylesheet" type="text/css">
    <link class="main-stylesheet" href="<?php echo base_url('pages/css/themes/corporate.css');?>" rel="stylesheet" type="text/css" />
  </head>
  
  <body class="fixed-header dashboard menu-pin menu-behind">
  <header>
    <!-- BEGIN SIDEBPANEL-->
    <nav class="page-sidebar" data-pages="sidebar">
      <!-- BEGIN SIDEBAR MENU HEADER-->
      <div class="sidebar-header">
        <img src="<?php echo site_url('assets/img/logo_masjid_white.png');?>" alt="logo" class="brand" data-src="<?php echo site_url('assets/img/logo_masjid_white.png');?>" data-src-retina="<?php echo site_url('assets/img/logo_masjid_white_2x.png');?>" width="160" height="60">
      </div>
      <!-- END SIDEBAR MENU HEADER-->
      <!-- START SIDEBAR MENU -->
      <div class="sidebar-menu">
        <!-- BEGIN SIDEBAR MENU ITEMS-->
        <ul class="menu-items">
          <li class="m-t-30" >
            <a href="<?php echo site_url('admin/beranda');?>" class="detailed"><span class="title">Beranda</span></a>
            <span class=" icon-thumbnail"><i class="pg-home"></i></span>
          </li><br>
          <li class="">
            <a href="<?php echo site_url('admin/artikel');?>"><span class="title">Artikel</span></a>
            <span class=" icon-thumbnail"><i class="pg-form"></i></span>
          </li><br>
          <li>
            <a href="javascript:;"><span class="title">Daftar</span>
            <span class=" arrow"></span></a>
            <span class="icon-thumbnail"><i class="pg-note"></i></span>
            <ul class="sub-menu">
              <li class="">
                <a href="<?php echo site_url('admin/pengurus');?>">Pengurus</a>
                <span class="icon-thumbnail">P</span>
              </li>
              <li class="">
                <a href="<?php echo site_url('admin/ustadz');?>">Ustadz</a>
                <span class="icon-thumbnail">U</span>
              </li>
            </ul>
          </li><br>
          <li class="open active">
            <a href="javascript:;"><span class="title">Laporan</span>
            <span class="open arrow"></span></a>
            <span class="icon-thumbnail"><i class="pg-charts"></i></span>
            <ul class="sub-menu">
              <li class="">
                <a href="<?php echo site_url('admin/infaq');?>">Infaq</a>
                <span class="icon-thumbnail">I</span>
              </li>
              <li class="">
                <a href="<?php echo site_url('admin/keuangan');?>">Keuangan</a>
                <span class="icon-thumbnail">K</span>
              </li>
            </ul>
          </li><br>
          <li >
            <a href="javascript:;"><span class="title">Jadwal</span>
            <span class=" arrow"></span></a>
            <span class="icon-thumbnail"><i class="pg-calender"></i></span>
            <ul class="sub-menu">

              <li class="">
                <a href="<?php echo site_url('admin/jumat');?>">Jum'at</a>
                <span class="icon-thumbnail">J</span>
              </li>

            </ul>
          </li><br>
          <li class="">
            <a href="<?php echo site_url('admin/pesan');?>"><span class="title">Pesan</span></a>
            <span class="icon-thumbnail"><i class="pg-mail"></i></span>
          </li>
        </ul>
        <div class="clearfix"></div>
      </div>
      <!-- END SIDEBAR MENU -->
    </nav>
    <!-- END SIDEBAR -->
    <!-- END SIDEBPANEL-->
  </header>
    <!-- START PAGE-CONTAINER -->
    <div class="page-container ">
      <!-- START HEADER -->
      <div class="header ">
        <!-- START MOBILE SIDEBAR TOGGLE -->
        <a href="#" class="btn-link toggle-sidebar hidden-lg-up pg pg-menu" data-toggle="sidebar">
        </a>
        <!-- END MOBILE SIDEBAR TOGGLE -->
        <div class="">
          <div class="brand inline m-l-10">
            <img src="<?php echo site_url('assets/img/logo_masjid.png');?>" alt="logo" data-src="<?php echo site_url('assets/img/logo_masjid.png');?>" data-src-retina="<?php echo site_url('assets/img/logo_masjid_2x.png');?>" width="160" height="75">
          </div>
        </div>
        <div class="">
          <script type="text/javascript">
            function logout()
            {
              var jendelaLogout = window.confirm("Anda yakin ingin keluar ?");
              if(jendelaLogout)
              {
                document.location="<?php echo site_url('logout');?>"
              }
              else
              {
                document.location="<?php echo site_url('admin/infaq');?>"
              }
            }
          </script>
          <button onclick="logout()" class="btn btn-sm btn-default">
            <span class="">Logout</span>
            <span class=""><i class="pg-power"></i></span>
          </button>
        </div>
      </div>
      <!-- END HEADER -->
      <!-- START PAGE CONTENT WRAPPER -->
      <div class="page-content-wrapper ">
        <!-- START PAGE CONTENT -->
        <div class="content sm-gutter">
          <!-- START CONTAINER FLUID -->
          <div class="container sm-padding-10 p-t-20 p-l-0 p-r-0">
            <div class=" col-xlg-2 bg-white">
              <div class="col-md-12 m-b-10">
                <div class="card card-transparent">
                  <div class="card-header">
                    <div class="card-title">
                      <h4>Tambah Laporan Infaq</h4>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                  <div class="card-block">
                  <?php echo validation_errors(); ?>
                  <form class="form-horizontal" method="post" action="<?php echo site_url('infaq/save'); ?>">
                    <br>

                    <div class="control-group col-lg-3">
                      <label class="control-label">Nama</label>
                      <input type="text" placeholder="nama" name="nama" value="<?php echo set_value('nama');?>" class="form-control" required>
                      <?php echo form_error('nama'); ?>
                    </div>                    
                    <div class="control-group col-lg-3">   
                      <label class="control-label">Tanggal</label>
                      <div class="input-group p-l-0">
                      <input type="text" placeholder=" --/--/----" name="tanggal" class="form-control"><span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                    </div>
                      <?php echo form_error('tanggal'); ?>
                    </div>                    
                    <div class="control-group col-lg-3">
                      <label class="control-label">Nominal</label>
                      <input type="text" placeholder="nominal" name="nominal" class="form-control" required>
                      <?php echo form_error('nominal'); ?>
                    </div>
                    <br>
                    <div class="control-group col-lg-3">
                      <div class="controls">
                        <input type="submit" name="btnSubmit" class="btn btn-primary" value="Simpan">
                        <a href="<?php echo site_url('admin/infaq'); ?>" class="btn btn-danger">Kembali</a>
                      </div>
                    </div>
                  </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- END CONTAINER FLUID -->
        </div>
        <!-- END PAGE CONTENT -->
        <!-- START CONTAINER FLUID -->
        <footer>
        <div class=" container-fluid  container-fixed-lg footer">
          <!-- START COPYRIGHT -->
          <div class="copyright sm-text-center">
            <p class="no-margin text-center">
              <span class="hint-text">Copyright &copy; 2018 </span>
              <span class="font-montserrat">Website Administrator Masjid Al-Hanif</span>.
              <span class="hint-text">All rights reserved. </span>
            </p>
            <p class="no-margin text-center">
              <span class="hint-text">Made with <i class="fa fa-heart"></i> by Handika</span>
            </p>
            <div class="clearfix"></div>
          </div>
          <!-- END COPYRIGHT -->
        </div>
        </footer>
        <!-- END CONTAINER FLUID -->
      </div>
      <!-- END PAGE CONTENT WRAPPER -->
    </div>
    <!-- END PAGE CONTAINER -->
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
    <script type="text/javascript" src="<?php echo base_url('assets/plugins/select2/js/select2.full.min.js');?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/plugins/classie/classie.js');?>"></script>
    <script src="<?php echo base_url('assets/plugins/switchery/js/switchery.min.js');?>" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/plugins/bootstrap3-wysihtml5/bootstrap3-wysihtml5.all.min.js');?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/plugins/jquery-autonumeric/autoNumeric.js');?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/plugins/dropzone/dropzone.min.js');?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/plugins/bootstrap-tag/bootstrap-tagsinput.min.js');?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/plugins/jquery-inputmask/jquery.inputmask.min.js');?>"></script>
    <script src="<?php echo base_url('assets/plugins/bootstrap-form-wizard/js/jquery.bootstrap.wizard.min.js');?>" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/plugins/jquery-validation/js/jquery.validate.min.js');?>" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js');?>" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/plugins/summernote/js/summernote.min.js');?>" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/plugins/moment/moment.min.js');?>"></script>
    <script src="<?php echo base_url('assets/plugins/bootstrap-daterangepicker/daterangepicker.js');?>" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/plugins/bootstrap-timepicker/bootstrap-timepicker.min.js');?>" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/plugins/bootstrap-typehead/typeahead.bundle.min.js');?>"></script>
    <script src="<?php echo base_url('assets/plugins/bootstrap-typehead/typeahead.jquery.min.js');?>"></script>
    <script src="<?php echo base_url('assets/plugins/handlebars/handlebars-v4.0.5.js');?>"></script>
    <!-- END VENDOR JS -->
    <!-- BEGIN CORE TEMPLATE JS -->
    <script src="<?php echo base_url('pages/js/pages.min.js');?>"></script>
    <!-- END CORE TEMPLATE JS -->
    <!-- BEGIN PAGE LEVEL JS -->
    <script src="<?php echo base_url('assets/js/form_elements.js');?>" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/js/scripts.js');?>" type="text/javascript"></script>
    <!-- END PAGE LEVEL JS -->
  </body>
</html>