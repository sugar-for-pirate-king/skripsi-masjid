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
    <link href="<?php echo base_url('assets/plugins/nvd3/nv.d3.min.css');?>" rel="stylesheet" type="text/css" media="screen" />
    <link href="<?php echo base_url('assets/plugins/mapplic/css/mapplic.css');?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('assets/plugins/rickshaw/rickshaw.min.css');?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('assets/plugins/jquery-datatable/media/css/dataTables.bootstrap.min.css');?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('assets/plugins/jquery-datatable/extensions/FixedColumns/css/dataTables.fixedColumns.min.css');?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('assets/plugins/datatables-responsive/css/datatables.responsive.css');?>" rel="stylesheet" type="text/css" media="screen" />
    <link href="<?php echo base_url('pages/css/pages-icons.css');?>" rel="stylesheet" type="text/css">
    <link class="main-stylesheet" href="<?php echo base_url('pages/css/themes/corporate.css');?>" rel="stylesheet" type="text/css" />
  </head>
  
  <body class="fixed-header dashboard menu-pin menu-behind">
  <header>
    <!-- BEGIN SIDEBPANEL-->
    <nav class="page-sidebar" data-pages="sidebar">
      <!-- BEGIN SIDEBAR MENU HEADER-->
      <div class="sidebar-header">
        <img src="<?php echo site_url('assets/img/logo_white.png');?>" alt="logo" class="brand" data-src="<?php echo site_url('assets/img/logo_white.png');?>" data-src-retina="<?php echo site_url('assets/img/logo_white_2x.png');?>" width="78" height="22">
        <div class="sidebar-header-controls">
          <button type="button" class="btn btn-xs sidebar-slide-toggle btn-link m-l-20 hidden-md-down" data-pages-toggle="#appMenu"><i class="fa fa-angle-down fs-16"></i>
          </button>
          <button type="button" class="btn btn-link hidden-md-down" data-toggle-pin="sidebar"><i class="fa fs-12"></i>
          </button>
        </div>
      </div>
      <!-- END SIDEBAR MENU HEADER-->
      <!-- START SIDEBAR MENU -->
      <div class="sidebar-menu">
        <!-- BEGIN SIDEBAR MENU ITEMS-->
        <ul class="menu-items">
          <li class="m-t-30" >
            <a href="<?php echo site_url('beranda');?>" class="detailed"><span class="title">Beranda</span></a>
            <span class=" icon-thumbnail"><i class="pg-home"></i></span>
          </li><br>
          <li class="">
            <a href="<?php echo site_url('artikel');?>"><span class="title">Artikel</span></a>
            <span class=" icon-thumbnail"><i class="pg-form"></i></span>
          </li><br>
          <li class="open active">
            <a href="javascript:;"><span class="title">Daftar</span>
            <span class="open arrow"></span></a>
            <span class="icon-thumbnail"><i class="pg-note"></i></span>
            <ul class="sub-menu">
              <li class="">
                <a href="<?php echo site_url('pengurus');?>">Pengurus</a>
                <span class="icon-thumbnail">P</span>
              </li>
              <li class="">
                <a href="<?php echo site_url('ustadz');?>">Ustadz</a>
                <span class="icon-thumbnail">U</span>
              </li>
            </ul>
          </li><br>
          <li>
            <a href="javascript:;"><span class="title">Laporan</span>
            <span class=" arrow"></span></a>
            <span class="icon-thumbnail"><i class="pg-charts"></i></span>
            <ul class="sub-menu">
              <li class="">
                <a href="<?php echo site_url('infaq');?>">Infaq</a>
                <span class="icon-thumbnail">I</span>
              </li>
              <li class="">
                <a href="<?php echo site_url('keuangan');?>">Keuangan</a>
                <span class="icon-thumbnail">K</span>
              </li>
            </ul>
          </li><br>
          <li>
            <a href="javascript:;"><span class="title">Jadwal</span>
            <span class=" arrow"></span></a>
            <span class="icon-thumbnail"><i class="pg-calender"></i></span>
            <ul class="sub-menu">
              
              <li class="">
                <a href="<?php echo site_url('jumat');?>">Jum'at</a>
                <span class="icon-thumbnail">J</span>
              </li>

            </ul>
          </li><br>
          <li class="">
            <a href="<?php echo site_url('pesan');?>"><span class="title">Pesan</span></a>
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
            <img src="<?php echo site_url('assets/img/logo.png');?>" alt="logo" data-src="<?php echo site_url('assets/img/logo.png');?>" data-src-retina="<?php echo site_url('assets/img/logo_2x.png');?>" width="78" height="22">
          </div>
        </div>
        <div class="">
          <a href="<?php echo site_url('admin/auth/logout');?>">
            <span class="">Logout</span>
            <span class=""><i class="pg-power"></i></span>
          </a>
        </div>
      </div>
      <!-- END HEADER -->
      <!-- START PAGE CONTENT WRAPPER -->
      <div class="page-content-wrapper ">
        <!-- START PAGE CONTENT -->
        <div class="content sm-gutter">
          <!-- START CONTAINER FLUID -->
          <div class="container-fluid padding-25 sm-padding-10">
            <div class=" col-xlg-2 bg-white">
              <div class="col-md-12 m-b-10">
                <div class="card card-transparent">
                  <div class="card-header">
                    <div class="card-title">
                      <h4>Data Ustadz</h4>
                    </div>
                    <div class="pull-right">
                      <div class="col-xs-12">
                        <a href="<?php echo site_url('ustadz/tambah');?>" class="btn btn-complete btn-cons">Tambah Daftar</a>
                      </div>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                  <div class="card-block">
                    <table class="table demo-table-search table-responsive-block" id="tableWithSearch">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Nama</th>
                          <th>Tempat / Tanggal Lahir</th>
                          <th>Alamat</th>
                          <th>No Handphone</th>
                          <th>Email</th>
                          <th>Pendidikan</th>
                          <th>Opsi</th>
                        </tr>
                      </thead>
                      <?php 
                        $no = 1;
                        foreach ($data_artikel as $key => $value)
                        {
                      ?>
                      <tbody>
                        <tr>
                          <td><?php echo $no++; ?></td>
                          <td><?php echo $value->nama; ?></td>
                          <td><?php echo $value->tempat_tanggal_lahir; ?></td>
                          <td><?php echo $value->alamat; ?></td>
                          <td><?php echo $value->no_hp; ?></td>
                          <td><?php echo $value->email; ?></td>
                          <td><?php echo $value->pendidikan; ?></td>
                          <td>
                            <div class="btn-group">
                            <a href="<?php echo site_url('ustadz/ubah/'.$value->id_ustadz); ?>" class="btn btn-success btn-xs">Ubah</a>
                            <a href="<?php echo site_url('ustadz/hapus/'.$value->id_ustadz); ?>" class="btn btn-danger btn-xs">Hapus</a>
                            </div>
                          </td>
                        </tr>
                      </tbody>
                      <?php 
                        }
                      ?>
                    </table>
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
            <p class="small no-margin pull-left sm-pull-reset">
              <span class="hint-text">Copyright &copy; 2017 </span>
              <span class="font-montserrat">REVOX</span>.
              <span class="hint-text">All rights reserved. </span>
              <span class="sm-block"><a href="#" class="m-l-10 m-r-10">Terms of use</a> <span class="muted">|</span> <a href="#" class="m-l-10">Privacy Policy</a></span>
            </p>
            <p class="small no-margin pull-right sm-pull-reset">
              Hand-crafted <span class="hint-text">&amp; made with Love</span>
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
    <script src="<?php echo base_url('assets/plugins/select2/js/select2.full.min.js');?>" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/plugins/classie/classie.js');?>" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/plugins/switchery/js/switchery.min.js');?>" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/plugins/jquery-datatable/media/js/jquery.dataTables.min.js');?>" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/plugins/jquery-datatable/extensions/TableTools/js/dataTables.tableTools.min.js');?>" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/plugins/jquery-datatable/media/js/dataTables.bootstrap.js');?>" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/plugins/jquery-datatable/extensions/Bootstrap/jquery-datatable-bootstrap.js');?>" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/plugins/datatables-responsive/js/datatables.responsive.js');?>" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/plugins/datatables-responsive/js/lodash.min.js');?>" type="text/javascript"></script>
    <!-- END VENDOR JS -->
    <!-- BEGIN CORE TEMPLATE JS -->
    <script src="<?php echo base_url('pages/js/pages.min.js');?>"></script>
    <!-- END CORE TEMPLATE JS -->
    <!-- BEGIN PAGE LEVEL JS -->
    <script src="<?php echo base_url('assets/js/datatables.js');?>" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/js/scripts.js');?>" type="text/javascript"></script>
    <!-- END PAGE LEVEL JS -->
  </body>
</html>