<?php
    ob_start();
    session_start();
    require_once "nedmin/classes/database.php";
    require_once "nedmin/production/fonksiyon.php";

    $db=new \Database();
    

    $ayar=$db->getRow("SELECT * FROM ayar WHERE ayar_id=?", array(0));
    if (isset($_SESSION['userkullanici_mail'])){
    $kullanici=$db->getRow("SELECT * FROM kullanici WHERE kullanici_mail=?", array($_SESSION['userkullanici_mail']));
    }
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="<?php echo $ayar->ayar_author ?>">
    <meta name="description" content="<?php echo $ayar->ayar_description ?>">
    <meta name="keywords" content="<?php echo $ayar->ayar_keywords ?>">
    <link href="img/favicon.png" rel="icon">
    <link href='https://fonts.googleapis.com/css?family=Josefin+Sans:400,700&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" />
    <title><?php echo $ayar->ayar_title ?></title>
    <style>
        @import url("css/All.css");
    </style>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- navigation start-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNavbar">
        <div class="container">
            <a href="index.php" class="navbar-brand text-uppercase" title="new design website link"><?php echo $ayar->ayar_logo ?></a>
            <button type="button" class="navbar-toggler" data-bs-toggle="offcanvas" data-bs-target="#myNavbar"
                aria-controls="myNavbar" aria-label="menüyü açma kapama butonu" aria-expanded="false">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="myNavbar" aria-labelledby="myLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="myLabel">Menü</h5>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Kapat">
                    </button>
                </div>
                <div class="offcanvas-body">

                    <ul class="navbar-nav text-uppercase py-lg-2">
                        <?php 
                            //Belirli veriyi seçme işlemi
                            $menu=$db->getRows("SELECT * FROM menu WHERE menu_durum=? order by menu_sira ASC LIMIT 5",array(1));
                                foreach ($menu as $menu) {
                        ?>
                        <li class="nav-item"><a href="
                            <?php 
                                if (!empty($menu->menu_url)) {
                                    echo $menu->menu_url;
                                }else{
                                    echo "sayfa-".seo($menu->menu_ad);
                                }
                            ?>
                        
                        " class="nav-link btn-cole-canvas"><?php echo $menu->menu_ad ?></a></li>
                        <?php }?>
                    </ul>
                    <ul class="navbar-nav py-lg-2 ms-auto">
                            <?php 
                                $sepet1=$db->getColumn("SELECT COUNT(urun_id) FROM sepet");
								if (!isset($_SESSION['userkullanici_mail'])) {
							?>
								  <li class="nav-item"><a href="uyelik_islemleri.php" class="nav-link btn-cole-canvas" title="Üye Giriş"><i class="bi bi-person-fill me-1"></i>Üye Giriş</a></li>
                                <li class="nav-item"><a href="register.php" class="nav-link btn-cole-canvas"title="Üye Ol"><i class="bi bi-box-arrow-in-right me-1"></i>Üye Olun</a></li>
                                <li class="nav-item position-relative"><a href="sepet.php" class="nav-link btn-cole-canvas"><i class="bi bi-cart4 me-1"></i>SEPET<span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger"><?php echo $sepet1; ?><span class="visually-hidden">unread messages</span></span></a></li>
							<?php 
								} else {
							?>
                                <li class="nav-item"><a  class="nav-link btn-cole-canvas">Hoşgeldin<span>--</span><?php echo $kullanici->kullanici_adsoyad ?></a></li>
                                <li class="nav-item"><a href="hesabim" class="nav-link btn-cole-canvas"title="Üye Ol"><i class="bi bi-box-arrow-in-right me-1"></i>Hesap Bilgilerim</a></li>
                                <li class="nav-item"><a href="logout" class="nav-link btn-cole-canvas"title="Üye Ol"><i class="bi bi-box-arrow-in-right me-1"></i>Çıkış Yap</a></li>
                                
							<?php 
                                $kullanici_id=$kullanici->kullanici_id;
                                $sepet=$db->getColumn("SELECT COUNT(urun_id) FROM sepet where kullanici_id=?", array($kullanici_id));                                
                            ?>  
                      
                        <li class="nav-item position-relative"><a href="sepet.php" class="nav-link btn-cole-canvas"><i class="bi bi-cart4 me-1"></i>SEPET<span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger"><?php echo $sepet; ?><span class="visually-hidden">unread messages</span></span></a></li>
                        <?php 
                                }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- navigation end-->