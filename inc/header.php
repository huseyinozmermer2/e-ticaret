<?php
    ob_start();
    session_start();
    require_once "nedmin/netting/classes/database.php";
    require_once "nedmin/netting/fonksiyon.php";

    $db=new \Database();

    $ayar=$db->getRow("SELECT * FROM ayar WHERE ayar_id=?", array(0));
    if (isset($_SESSION['kullanici_mail'])){
        $kullanici=$db->getRow("SELECT * FROM kullanici WHERE kullanici_mail=?", array($_SESSION['kullanici_mail']));
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
    <link rel="icon" href="img/themes/cropped-23-1-32x32.png" sizes="32x32" />
    <link rel="icon" href="img/themes/cropped-23-1-192x192.png" sizes="192x192" />
    <link rel="apple-touch-icon" href="img/themes/cropped-23-1-180x180.png" />
    <meta name="msapplication-TileImage" content="img/themes/cropped-23-1-270x270.png" />
    <base href="http://localhost/e-ticaret/">
    
    <!--! CSS -->
    <link rel="stylesheet" href="css/main.css">
    <!--! Glide.js Css CDN  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.6.0/css/glide.core.min.css">
    <!--! Boostrap Icons CDN  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>

<body id="body-top">
    <a href="#body-top" class="body-top"><i class="bi bi-arrow-up-circle-fill"></i></a>
    <!--! header start  -->
    <header>
        <div class="global-notification">
            <div class="container">
                <div class="global-notification-wrapper">
                    <div class="global-left">
                        <p>
                            Tüm Siparişlerde Ücretsiz Kargo!
                        </p>
                    </div>
                    <div class="global-right">
                        <div class="notification-left">
                            <a href="<?php echo $ayar->ayar_facebook ?>">
                                <i class="bi bi-facebook"></i>
                            </a>
                            <a href="<?php echo $ayar->ayar_twitter ?>">
                                <i class="bi bi-twitter"></i>
                            </a>
                            <a href="<?php echo $ayar->ayar_instagram ?>">
                                <i class="bi bi-instagram"></i>
                            </a>
                            <a href="<?php echo $ayar->ayar_telegram ?>">
                                <i class="bi bi-telegram"></i>
                            </a>
                        </div>
                        <div class="notification-center">Hakkımızda</div>
                        <div class="notification-right">İletişim</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-row">
            <div class="header-wrapper">
                <div class="container">
                    <div class="header-search">
                        <div class="header-mobile">
                            <i class="bi bi-list" id="btn-menu"></i>
                        </div>
                        <div class="header-left">
                            <a href="index"><img src="img/themes/<?php echo $ayar->ayar_logo ?>" alt=""
                                    class="logo"></a>
                        </div>
                        <div class="header-center">
                            <form action="#" class="form-search">
                                <input type="text" id="search-input" class="search-buttons" placeholder="Ürün ara..." value="" name="s"
                                    aria-label="Search" title="Ürün ara..." />
                                <button type="submit" class="search-button"><i class="bi bi-search"></i></button>
                            </form>
                            <div class="search-results" id="search-results">
                                <div class="results">
                                    <a href="#" class="result-item">
                                        <img src="img/themes/evyeburadalogo-2.png" class="search-thumb" alt="">
                                        <div class="search-info">
                                            <h4>Analogue Resin Strap</h4>
                                            <span class="search-sku">Stok Kodu: PD0016</span>
                                            <span class="search-rice">$108.00</span>
                                        </div>
                                    </a>
                                    <a href="#" class="result-item">
                                        <img src="img/themes/evyeburadalogo-2.png" class="search-thumb" alt="">
                                        <div class="search-info">
                                            <h4>Analogue Resin Strap</h4>
                                            <span class="search-sku">Stok Kodu: PD0016</span>
                                            <span class="search-rice">$108.00</span>
                                        </div>
                                    </a>
                                    <a href="#" class="result-item">
                                        <img src="img/themes/evyeburadalogo-2.png" class="search-thumb" alt="">
                                        <div class="search-info">
                                            <h4>Analogue Resin Strap</h4>
                                            <span class="search-sku">Stok Kodu: PD0016</span>
                                            <span class="search-rice">$108.00</span>
                                        </div>
                                    </a>
                                    <a href="#" class="result-item">
                                        <img src="img/themes/evyeburadalogo-2.png" class="search-thumb" alt="">
                                        <div class="search-info">
                                            <h4>Analogue Resin Strap</h4>
                                            <span class="search-sku">Stok Kodu: PD0016</span>
                                            <span class="search-rice">$108.00</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="header-right">
                            <?php 
                                $sepet1=$db->getColumn("SELECT COUNT(urun_id) FROM sepet WHERE kullanici_id=?", array(0));
								if (!isset($_SESSION['kullanici_mail'])) {
							?>
                            <div class="info-box-user">
                                <a href="uyelik-islemleri">Giriş Yap /</a>
                                <a href="uyelik-islemleri"> Üye Ol</a>
                                <a href="uyelik-islemleri"><i class="bi bi-person"></i></a>
                            </div>
                            <div class="header-cart">
                                <a href="cart">
                                    <p>SEPET</p>
                                    <i class="bi bi-bag" id="bi-bag"><span><?php echo $sepet1; ?></span></i>
                                </a>
                            </div>
                            <?php } else { 
                                 $kullanici_id=$kullanici->kullanici_id;
                                 $sepet=$db->getColumn("SELECT COUNT(urun_id) FROM sepet where kullanici_id=?", array($kullanici_id));  
                            ?>
                            <div class="info-box-user">
                                <?php echo $kullanici->kullanici_adsoyad ?>
                                <a href="logout"> Çıkış</a>
                            </div>
                            <div class="header-cart">
                                <a href="cart">
                                    <p>SEPET</p>
                                    <i class="bi bi-bag" id="bi-bag"><span><?php echo $sepet; ?></span></i>
                                </a>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <div class="header-nav" id="sidebar">
                    <div class="header-center">
                        <form action="#" class="form-search">
                            <input type="text" class="search-buttons2" id="search-input2" placeholder="Ürün ara..." value="" name="s"
                                aria-label="Search" title="Ürün ara..." />
                            <button type="submit" class="search-button2"><i class="bi bi-search"></i></button>
                        </form>
                        <div class="search-results2" id="search-results2">
                            <div class="results">
                                <a href="#" class="result-item">
                                    <img src="img/themes/evyeburadalogo-2.png" class="search-thumb" alt="">
                                    <div class="search-info">
                                        <h4>Analogue Resin Strap</h4>
                                        <span class="search-sku">S.Kodu: PD0016</span>
                                        <span class="search-rice">$108.00</span>
                                    </div>
                                </a>
                                <a href="#" class="result-item">
                                    <img src="img/themes/evyeburadalogo-2.png" class="search-thumb" alt="">
                                    <div class="search-info">
                                        <h4>Analogue Resin Strap</h4>
                                        <span class="search-sku">Stok Kodu: PD0016</span>
                                        <span class="search-rice">$108.00</span>
                                    </div>
                                </a>
                                <a href="#" class="result-item">
                                    <img src="img/themes/evyeburadalogo-2.png" class="search-thumb" alt="">
                                    <div class="search-info">
                                        <h4>Analogue Resin Strap</h4>
                                        <span class="search-sku">Stok Kodu: PD0016</span>
                                        <span class="search-rice">$108.00</span>
                                    </div>
                                </a>
                                <a href="#" class="result-item">
                                    <img src="img/themes/evyeburadalogo-2.png" class="search-thumb" alt="">
                                    <div class="search-info">
                                        <h4>Analogue Resin Strap</h4>
                                        <span class="search-sku">Stok Kodu: PD0016</span>
                                        <span class="search-rice">$108.00</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="header-navigation">
                        <nav class="navigation">
                            <ul class="menu-list">
                                <li class="menu-list-item">
                                    <a href="index" class="menu-link active">Anasayfa</a>
                                </li>
                                <li class="menu-list-item megamenu-wrapper">
                                    <a href="urunlerimiz" class="menu-link">
                                        Ürünlerimiz
                                        <i class="bi bi-chevron-down"></i>
                                    </a>
                                    <div class="menu-dropdown-wrapper">
                                        <div class="menu-dropdown-megamenu">
                                            <div class="megamenu-links">
                                                <div class="megamenu-products">
                                    <ul class="megamenu-menu-list">
                                        <?php
                                            $kategori=$db->getRows("SELECT * FROM kategori WHERE
                                            kategori_ust=? order by kategori_sira ASC",array(8));
                                            foreach ($kategori as $kategori) { 
                                        ?>
                                        <li>
                                            <a href="
                                                <?php 
                                                if (!empty($kategori->kategori_url)) {
                                                    echo $kategori->kategori_url;
                                                }else{
                                                    echo "kategori/".seo($kategori->kategori_ad);
                                                }
                                                ?>
                                            "><?php echo $kategori->kategori_ad ?></a>
                                        </li>
                                    <?php } ?>
                                    </ul>
                                            </div>
                                                 <!-- <div class="megamenu-products">
                                                        <h3 class="megamenu-products-title">
                                                            Filter Layout
                                                        </h3>
                                                        <ul class="megamenu-menu-list">
                                                            <li>
                                                                <a href="#">Sidebar</a>
                                                            </li>
                                                            <li>
                                                                <a href="#">Filter Side Out</a>
                                                            </li>
                                                            <li>
                                                                <a href="#">Filter Dropdown</a>
                                                            </li>
                                                            <li>
                                                                <a href="#">Filter Drawer</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="megamenu-products">
                                                        <h3 class="megamenu-products-title">
                                                            Shop Loader
                                                        </h3>
                                                        <ul class="megamenu-menu-list">
                                                            <li>
                                                                <a href="#">Shop Pagination</a>
                                                            </li>
                                                            <li>
                                                                <a href="#">Shop Infinity</a>
                                                            </li>
                                                            <li>
                                                                <a href="#">Shop Load More</a>
                                                            </li>
                                                            <li>
                                                                <a href="#">Cart Modal</a>
                                                            </li>
                                                            <li>
                                                                <a href="#">Cart Drawer</a>
                                                            </li>
                                                            <li>
                                                                <a href="#">Cart Page</a>
                                                            </li>
                                                        </ul>
                                                    </div> -->
                                            </div>
                                            <div class="megamenu-single">
                                                <?php
                                                     $urunmenu=$db->getRow("SELECT * FROM urun WHERE urun_menu=?", array(1));
                                                     $urun_id=$urunmenu->urun_id;
                                                    $urunfotomenu=$db->getRow("SELECT * FROM urunfoto WHERE urun_id=? LIMIT 1", array($urun_id));	
                                                ?>
                                                <a href="urun/<?php echo seo($urunmenu->urun_ad).'-'.$urunmenu->urun_id ?>">
                                                    <img src="img/uploads/<?php echo $urunfotomenu->urunfoto_resimyol; ?>" alt="">
                                                </a>
                                                <h3 class="megamenu-single-title"><?php echo $urunmenu->urun_ad; ?></h3>
                                                <h4 class="megamenu-single-subtitle"></h4>
                                                <a href="urun/<?php echo seo($urunmenu->urun_ad).'-'.$urunmenu->urun_id ?>" class="megamenu-single-button btn btn-sm btn-white">Ürün İncele</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                               
                                <li class="menu-list-item">
                                    <a href="hakkimizda" class="menu-link">Hakkımızda</a>
                                </li>
                                <li class="menu-list-item">
                                    <a href="iletisim" class="menu-link">İletişim</a>
                                </li>                               
                            </ul>
                        </nav>
                    </div>
                    <i class="bi-x-circle" id="close-sidebar"></i>
                </div>
            </div>
        </div>
    </header>
    <!--! header end  -->

    <!--! modal dialog start  -->
    <!-- <div class="modal-dialog">
        <div class="modal-content">
            <button class="modal-close">
                <i class="bi bi-x"></i>
            </button>
            <div class="modal-image">
                <img src="img/modal-dialog.jpg" alt="">
            </div>
            <div class="popup-wrapper">
                <div class="popup-content">
                    <div class="popup-title">
                        <h3>NEWSLETTER</h3>
                    </div>
                    <p class="popup-text">
                        Sign up to our newsletter and get exclusive deals you won find any where else straight to your
                        inbox!
                    </p>
                    <form class="popup-form">
                        <input type="text" placeholder="Enter Email Address Here">
                        <button class="btn btn-primary">SUBSCRIBE</button>
                        <label>
                            <input type="checkbox">
                            <span>Don't show this popup again</span>
                        </label>
                    </form>
                </div>
            </div>
        </div>
    </div> -->
    <!--! modal dialog end  -->