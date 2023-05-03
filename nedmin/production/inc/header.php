<?php
  ob_start();
  session_start();
  require_once "../netting/classes/database.php";
  //require_once "nedmin/production/fonksiyon.php";

  if (!isset($_SESSION["userKullanici_mail"]))
  {
      require ("../production/login.php");
      exit;
  }
  $db=new \Database();

  $ayar=$db->getRow("SELECT * FROM ayar");
  $kullanici=$db->getRow("SELECT * FROM kullanici WHERE kullanici_mail=?", array($_SESSION['userKullanici_mail']));
  
 
?>
<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="<?php echo $ayar->ayar_author ?>">
    <meta name="description" content="<?php echo $ayar->ayar_description ?>">
    <meta name="keywords" content="<?php echo $ayar->ayar_keywords ?>">
    <link rel="icon" href="img/themes/cropped-23-1-32x32.png" sizes="32x32" />
    <link rel="icon" href="img/themes/cropped-23-1-192x192.png" sizes="192x192" />
    <link rel="apple-touch-icon" href="img/themes/cropped-23-1-180x180.png" />
    <meta name="msapplication-TileImage" content="img/themes/cropped-23-1-270x270.png" />
    <title><?php echo $ayar->ayar_title ?></title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- Datatables -->
    <link href="../vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
     <!-- Dropzone.js -->

  <link href="../vendors/dropzone/dist/min/dropzone.min.css" rel="stylesheet">

  <!-- Dropzone.js -->

  <script src="../vendors/dropzone/dist/min/dropzone.min.js"></script>

    <script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Evyeburada</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Hoş Glediniz,</span>
                <h2><?php echo $kullanici->kullanici_adsoyad; ?></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3></h3>
                <ul class="nav side-menu">
                  <li><a href="index"><i class="fa fa-home"></i> Anasayfa <span class="label label-success pull-right">Anasayfa</span></a></li>
                  <li><a><i class="fa fa-cogs"></i> Ayarlar <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="genel-ayar">Genel Ayarlar</a></li>
                      <li><a href="iletisim-ayar">İletişim Ayarları</a></li>
                      <li><a href="api-ayar">Api Ayarları</a></li>
                      <li><a href="sosyal-ayar">Sosyal Ayarları</a></li>
                      <li><a href="mail-ayar">Mail Ayarları</a></li>
                    </ul>
                  </li>
                  <li><a href="hakkimizda"><i class="fa fa-info"></i> Hakkımızda </a></li>
                  <li><a href="kullanici"><i class="fa fa-user"></i> Kullanıcılar </a></li>
                  <li><a href="urun"><i class="fa fa-shopping-basket"></i> Ürünler </a></li>
                  <li><a href="menu"><i class="fa fa-list"></i> Menüler </a></li>
                  <li><a href="kategori"><i class="fa fa-list"></i> Kategoriler </a></li>
                  <li><a href="yorum"><i class="fa fa-comments"></i> Yorumlar </a></li>
                  <li><a href="banka"><i class="fa fa-bank"></i> Bankalar </a></li>
                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/img.jpg" alt=""><?php echo $kullanici->kullanici_adsoyad; ?>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;"> Profile</a></li>
                    <li>
                      <a href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                    </li>
                    <li><a href="javascript:;">Help</a></li>
                    <li><a href="logout"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>

                <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green">6</span>
                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class="text-center">
                        <a>
                          <strong>See All Alerts</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->