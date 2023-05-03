<?php
    require_once "inc/header.php";
    $kategori=$db->getRow("SELECT * FROM kategori INNER JOIN urun ON
                            kategori.kategori_id=urun.kategori_id                 
                            WHERE kategori_ust=?",array(8));
    
	$urun=$db->getRow("SELECT * FROM urun where urun_id=?", array($_GET['urun_id']));
    if (empty($urun)) {
        header("Location:index.php");
        exit;
    }
?>
    <head>
        <title><?php echo $urun->urun_ad; ?></title>
    </head>
    <!--! single product start  -->
    <section class="single-product">
        <div class="container">
            <div class="single-product-wrapper">
                <!-- breadcrumb start -->
                <div class="single-topbar">
                    <nav class="breadcrumb">
                        <ul>
                            <li><a href="index">Anasayfa</a></li>
                            <li><a href="kategori-<?=seo($kategori->kategori_ad)?>"><?php echo $urun->urun_kategori; ?></a></li>
                            <li><a href="kategori-<?=seo($kategori->kategori_ad)?>"><?php echo $urun->urun_ad; ?></a></li>
                            <li><?php echo $urun->urun_stokkodu; ?></li>
                        </ul>
                    </nav>
                </div>
                <!-- breadcrumb end -->

                <!-- site main start -->
                <div class="single-content">
                    <main class="site-main">
                    <div class="product-gallery">
                            <div class="single-image-wrapper">
                                <?php
                                    $urun_id=$urun->urun_id;
                                    $urunfotoust=$db->getRow("SELECT * FROM urunfoto WHERE urun_id=? ORDER BY urunfoto_sira ASC LIMIT 1 ", array($urun_id));

                                ?>
                                <img src="img/uploads/<?php echo $urunfotoust->urunfoto_resimyol ?>" id="single-image" alt="">
                                <span>-<?php echo $urun->urun_indirim ?>%</span>
                            </div>
                            <div class="product-thumb">
                                <ol class="gallery-thumbs glide__slides" id="single-image2">
                                <?php
                                    $urun_id=$urun->urun_id;
                                    $urunfotoalt=$db->getRows("SELECT * FROM urunfoto WHERE urun_id=? ORDER BY urunfoto_sira ASC LIMIT 1,5 ", array($urun_id));
                                    foreach ($urunfotoalt as $urunfotoalt) {

                                ?>
                                    <li><img src="img/uploads/<?php echo $urunfotoalt->urunfoto_resimyol ?>" alt=""
                                            class="img-fluid">
                                    </li>
                                <?php } ?>
                                </ol>
                            </div>
                        </div>
                        <div class="product-info">
                            <h1 class="product-title">
                                <?php echo $urun->urun_ad; echo $urun->urun_stokkodu; ?>
                            </h1>
                            <div class="product-review">
                                <ul class="product-star">
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-half"></i></li>
                                </ul>
                                <span>2 reviews</span>
                            </div>
                            <div class="product-price">
                                <s class="old-price"><?php echo $urun->urun_fiyat?>,00 &#8378; </s>
                                <strong class="new-price"><?php 
                            echo ($urun->urun_fiyat * (100 - $urun->urun_indirim)/100)
                            ?>,00 &#8378;</strong>
                            </div>
                            <p class="product-description">
                                <img src="img/themes/tse3-1.png" alt="">
                            </p>
                            <form action="nedmin/netting/islem.php" method="POST" class="variations-form">
                                <div class="variations">
                                    <div class="colors">
                                        <div class="colors-label">
                                            <span>Color</span>
                                        </div>
                                        <div class="colors-wrapper">
                                            <div class="color-wrapper">
                                                <label class="blue-color">
                                                    <input type="radio" name="product_color" value="blue">
                                                </label>
                                            </div>
                                            <div class="color-wrapper">
                                                <label class="red-color">
                                                    <input type="radio" name="product_color" value="red">
                                                </label>
                                            </div>
                                            <div class="color-wrapper active">
                                                <label class="green-color">
                                                    <input type="radio" name="product_color" value="green">
                                                </label>
                                            </div>
                                            <div class="color-wrapper">
                                                <label class="purple-color">
                                                    <input type="radio" name="product_color" value="purple">
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="values">
                                        <!-- <div class="values-label">
                                            <span>Size</span>
                                        </div>
                                        <div class="values-list">
                                            <span class="active">XS</span>
                                            <span>S</span>
                                            <span>M</span>
                                            <span>L</span>
                                            <span>XL</span>
                                        </div> -->
                                    </div>
                                    <div class="cart-button">
                                        <input type="number" name="urun_adet" value="1" min="1" id="quantity">
                                        <?php if (isset($_SESSION['kullanici_mail'])) { ?>
                                        <input type="hidden" name="kullanici_id" value="<?php echo $kullanici->kullanici_id ?>">
                                        <input type="hidden" name="urun_id" value="<?php echo $urun->urun_id ?>">
                                        <button name="sepetEkle" class="btn btn-lg btn-green" id="add-to-cart" type="submit">SEPETE EKLE</button>
                                        <?php }else{ ?>
                                            <a href="uyelik-islemleri" class="btn btn-green">GİRİŞ YAPIN</a>
                                        <?php } ?>
                                    </div>
                                    <!-- <div class="product-extra-buttons">
                                        <a href="#">
                                            <i class="bi bi-globe"></i>
                                            <span>Size Guide</span>
                                        </a>
                                        <a href="#">
                                            <i class="bi bi-heart"></i>
                                            <span>Add to Wislist</span>
                                        </a>
                                        <a href="#">
                                            <i class="bi bi-share"></i>
                                            <span>Share this Product</span>
                                        </a>
                                    </div> -->
                                </div>
                            </form>
                            <div class="divider"></div>
                            <div class="product-meta">
                                <div class="product-sku">
                                    <?php if ($urun->urun_stok>=1) {
                                        echo "<span>Stok Adedi: </span><strong>".$urun->urun_stok."</strong>";
                                        } else {
                                            echo "Ürün Kalmadı";
                                        } 
                                    ?>
                                </div>
                                <div class="product-sku">
                                    <span>Stok Kodu:</span>
                                    <strong><?php echo $urun->urun_stokkodu ?></strong>
                                </div>
                                <div class="product-categories">
                                    <span>Kategoriler:</span>
                                    <strong><?php echo $urun->urun_kategori; ?></strong>
                                </div>
                                <!-- <div class="product-tags">
                                    <span>Tags:</span>
                                    <a href="#">black</a>
                                    ,
                                    <a href="#">white</a>
                                </div> -->
                            </div>
                        </div>
                    </main>
                </div>
                <!-- site main end -->

                <!-- tabs start -->
                <div class="single-tabs">
                    <ul class="tab-list">
                        <li>
                            <a href="#" class="tab-button active" data-id="desc">Açıklama</a>
                        </li>
                        <li>
                            <a href="#" class="tab-button" data-id="info">
                                Ek Bilgi
                            </a>
                        </li>
                        <li>
                            <a href="#" class="tab-button" data-id="reviews">
                                Yorum
                            </a>
                        </li>
                        <li>
                            <a href="#" class="tab-button" data-id="risked">
                                İade Hakkında
                            </a>
                        </li>
                    </ul>
                    <div class="tab-panel">
                        <div class="tab-panel-information content active" id="desc">
                            <h3><?php echo $urun->urun_ad; echo $urun->urun_stokkodu; ?></h3>
                            <table>
                                <tbody>
                                    <tr>
                                        <th>Ebat</th>
                                        <td>
                                            <p><?php echo $urun->urun_ebat; ?></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>EVİYE YÜKSEKLİĞİ</th>
                                        <td>
                                            <p><?php echo $urun->urun_yukseklik; ?></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>MONTAJ ŞEKLİ</th>
                                        <td>
                                            <p><?php echo $urun->urun_montaj; ?></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>TEZGAH KESİM ÖLÇÜSÜ</th>
                                        <td>
                                            <p><?php echo $urun->urun_olcu; ?></p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-panel-information content" id="info">
                            <h3><?php echo $urun->urun_ad; echo $urun->urun_stokkodu; ?></h3>
                            <table>
                                <tbody>
                                    <tr>
                                        <th>Renk</th>
                                        <td>
                                            <p>Antrasit, Beyaz, Gri, Krem, Siyah</p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-panel-reviews content" id="reviews">
                            <h3><?php echo $urun->urun_ad; echo $urun->urun_stokkodu; ?></h3>
                            <div class="comments">
                                <ol class="comment-list">
                                    <?php
                                        $yorumlar=$db->getRows("SELECT * FROM yorumlar INNER JOIN kullanici ON yorumlar.kullanici_id=kullanici.kullanici_id WHERE urun_id=?",array($_GET['urun_id']));
                                        foreach ($yorumlar as $yorumlar) {
                                    ?>
                                    <li class="comment-item">
                                        <div class="comment-avatar">
                                            <img src="img/avatars/avatar1.jpg" alt="">
                                        </div>
                                        <div class="comment-text">
                                            <ul class="comment-star">
                                                <li>
                                                    <i class="bi bi-star-fill"></i>
                                                </li>
                                                <li>
                                                    <i class="bi bi-star-fill"></i>
                                                </li>
                                                <li>
                                                    <i class="bi bi-star-fill"></i>
                                                </li>
                                                <li>
                                                    <i class="bi bi-star-fill"></i>
                                                </li>
                                                <li>
                                                    <i class="bi bi-star-fill"></i>
                                                </li>
                                            </ul>
                                            <div class="comment-meta">
                                                <strong><?php echo $yorumlar->kullanici_adsoyad ?></strong>
                                                <span>-</span>
                                                <time>
                                                    <?php 
                                                        $zaman=explode(" ",$yorumlar->yorum_zaman);
                                                        echo $zaman[0];
                                                    ?>
                                                </time>
                                            </div>
                                            <div class="comment-description">
                                                <p><?php echo $yorumlar->yorum_detay ?></p>
                                            </div>
                                        </div>
                                    </li>
                                    <?php } ?>
                                </ol>
                            </div>
                            <!-- comment form start -->
                            <div class="review-form-wrapper">
                                    <h2>İNCELEME EKLE</h2>
                                <form action="nedmin/netting/islem.php" method="POST" class="comment-form">
                                    <p class="comment-notes">
                                        E-posta hesabınız yayımlanmayacak. Gerekli alanlar doldurunuz.
                                        <span class="required">*</span>
                                    </p>
                                    <div class="comment-form-rating">
                                        <label>
                                            Oyunuz
                                            <span class="required">*</span>
                                        </label>
                                        <div class="stars">
                                            <a href="#" class="star">
                                                <i class="bi bi-star-fill"></i>
                                            </a>
                                            <a href="#" class="star">
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                            </a>
                                            <a href="#" class="star">
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                            </a>
                                            <a href="#" class="star">
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                            </a>
                                            <a href="#" class="star">
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="comment-form-comment form-comment">
                                        <label for="comment">
                                            İncelemeniz
                                            <span class="required">*</span>
                                        </label>
                                        <textarea name="yorum_detay" id="comment-text" cols="50" rows="10" required></textarea>
                                    </div>
                                    <?php if (!isset($_SESSION['kullanici_mail'])){ ?>
                                    <div class="comment-form-author form-comment">
                                        <label for="name">
                                            İsim
                                            <span class="required">*</span>
                                        </label>
                                        <input name="yorum_ad"  id="comment-name" type="text" required>
                                    </div>
                                    <div class="comment-form-email form-comment">
                                        <label for="email">
                                            E Posta
                                            <span class="required">*</span>
                                        </label>
                                        <input name ="yorum_email" id="email" type="email">
                                    </div>
                                    <div class="comment-form-cookies">
                                        <input id="cookies" name="cookies" type="checkbox">
                                        <label for="cookies">
                                            Bir dahaki sefere yorum yaptığımda kullanılmak üzere adımı, e-posta adresimi
                                            ve web site adresimi bu tarayıcıya kaydet.
                                            <span class="required">*</span>
                                        </label>
                                    </div>
                                    <?php } ?>
                                    
                                    <input type="hidden" name="kullanici_id" value="<?php echo @$kullanici->kullanici_id ?>">

                                    <input type="hidden" name="urun_id" value="<?php echo $urun->urun_id ?>">
                                    <input type="hidden" name="gelen_url" value="<?php 
                                    echo "http://".$_SERVER['HTTP_HOST']."".$_SERVER['REQUEST_URI'].""; 
                                    ?>">
                                    <div class="form-submit">
                                    <button type="submit" name="yorumkaydet" class="btn btn-default btn-green btn-sm">Yorumu Gönder</button>
                                    </div>
                                </form>
                            </div>
                            <!-- comment form end -->
                        </div>
                        <div class="tab-panel-descriptions content" id="risked">
                            <p>İade Hakkında</p>
                        </div>
                    </div>
                </div>
                <!-- tabs end -->
            </div>
        </div>
    </section>
    <!--! single product end  -->

    <!--! products start  -->
    <section class="products">
        <div class="container">
            <div class="section-title">
                <h2>Benzer Ürünler</h2>
                <p>Summer Collection New Morden Design</p>
            </div>
            <div class="product-wrapper product-carousel5">
                <div class="glide__track" data-glide-el="track">
                    <ul class="product-list glide__slides">
                        <?php 
                            $urunalt=$db->getRows("SELECT * FROM urun INNER JOIN kategori ON
                            kategori.kategori_id=urun.kategori_id ORDER BY rand() LIMIT 6");
                            foreach ($urunalt as $urunalt) {
                                $urun_id=$urunalt->urun_id;
                                $urunfotoyeni=$db->getRow("SELECT * FROM urunfoto WHERE urun_id=?", array($urun_id));
                        ?>
                        <div class="card glide__slide">
                            <div class="product-image">
                                <a href="urun-<?php echo seo($urunalt->urun_ad).'-'.$urunalt->urun_id ?>">
                                    <img src="img/uploads/<?php echo $urunfotoyeni->urunfoto_resimyol; ?>" alt="" class="img1">
                                    <img src="img/uploads/<?php echo $urunfotoyeni->urunfoto_resimyol2; ?>" alt="" class="img2">
                                </a>
                            </div>
                            <div class="product-info">
                                <a href="urun-<?php echo seo($urunalt->urun_ad).'-'.$urunalt->urun_id ?>" class="product-title"><?php echo $urunalt->urun_ad." ".$urunalt->urun_stokkodu ?></a>
                                <ul class="product-star">
                                    <li>
                                        <i class="bi bi-star-fill"></i>
                                    </li>
                                    <li>
                                        <i class="bi bi-star-fill"></i>
                                    </li>
                                    <li>
                                        <i class="bi bi-star-fill"></i>
                                    </li>
                                    <li>
                                        <i class="bi bi-star-fill"></i>
                                    </li>
                                    <li>
                                        <i class="bi bi-star-half"></i>
                                    </li>
                                </ul>
                                <div class="product-prices">
                                    <span class="old-price"><?php echo $urunalt->urun_fiyat?>,00 &#8378; </span>
                                    <strong class="new-price"><?php 
                                echo ($urunalt->urun_fiyat * (100 - $urunalt->urun_indirim)/100)
                                ?>,00 &#8378;</strong>
                                </div>
                                <span class="product-discount">-<?php echo $urunalt->urun_indirim ?>%</span>
                                <div class="product-links">
                                    <button>
                                        <i class="bi bi-basket-fill"></i>
                                    </button>
                                    <button>
                                        <i class="bi bi-heart-fill"></i>
                                    </button>
                                    <a href="#">
                                        <i class="bi bi-eye-fill"></i>
                                    </a>
                                    <a href="#">
                                        <i class="bi bi-share-fill"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                        <!-- <div class="card glide__slide">
                            <div class="product-image">
                                <a href="#">
                                    <img src="img/uploads/2022/12/114.0279.508-430x227.jpg" alt="" class="img1">
                                    <img src="img/uploads/2022/12/114.0279.511-430x226.jpg" alt="" class="img2">
                                </a>
                            </div>
                            <div class="product-info">
                                <a href="$" class="product-title">Analogue Resin Strap</a>
                                <ul class="product-star">
                                    <li>
                                        <i class="bi bi-star-fill"></i>
                                    </li>
                                    <li>
                                        <i class="bi bi-star-fill"></i>
                                    </li>
                                    <li>
                                        <i class="bi bi-star-fill"></i>
                                    </li>
                                    <li>
                                        <i class="bi bi-star-fill"></i>
                                    </li>
                                    <li>
                                        <i class="bi bi-star-half"></i>
                                    </li>
                                </ul>
                                <div class="product-prices">
                                    <strong class="new-price">$108.00</strong>
                                    <span class="old-price">$165.00</span>
                                </div>
                                <span class="product-discount">-17%</span>
                                <div class="product-links">
                                    <button>
                                        <i class="bi bi-basket-fill"></i>
                                    </button>
                                    <button>
                                        <i class="bi bi-heart-fill"></i>
                                    </button>
                                    <a href="#">
                                        <i class="bi bi-eye-fill"></i>
                                    </a>
                                    <a href="#">
                                        <i class="bi bi-share-fill"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card glide__slide">
                            <div class="product-image">
                                <a href="#">
                                    <img src="img/uploads/2022/12/114.0279.508-430x227.jpg" alt="" class="img1">
                                    <img src="img/uploads/2022/12/114.0279.511-430x226.jpg" alt="" class="img2">
                                </a>
                            </div>
                            <div class="product-info">
                                <a href="$" class="product-title">Analogue Resin Strap</a>
                                <ul class="product-star">
                                    <li>
                                        <i class="bi bi-star-fill"></i>
                                    </li>
                                    <li>
                                        <i class="bi bi-star-fill"></i>
                                    </li>
                                    <li>
                                        <i class="bi bi-star-fill"></i>
                                    </li>
                                    <li>
                                        <i class="bi bi-star-fill"></i>
                                    </li>
                                    <li>
                                        <i class="bi bi-star-half"></i>
                                    </li>
                                </ul>
                                <div class="product-prices">
                                    <strong class="new-price">$108.00</strong>
                                    <span class="old-price">$165.00</span>
                                </div>
                                <span class="product-discount">-17%</span>
                                <div class="product-links">
                                    <button>
                                        <i class="bi bi-basket-fill"></i>
                                    </button>
                                    <button>
                                        <i class="bi bi-heart-fill"></i>
                                    </button>
                                    <a href="#">
                                        <i class="bi bi-eye-fill"></i>
                                    </a>
                                    <a href="#">
                                        <i class="bi bi-share-fill"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card glide__slide">
                            <div class="product-image">
                                <a href="#">
                                    <img src="img/uploads/2022/12/114.0279.508-430x227.jpg" alt="" class="img1">
                                    <img src="img/uploads/2022/12/114.0279.511-430x226.jpg" alt="" class="img2">
                                </a>
                            </div>
                            <div class="product-info">
                                <a href="$" class="product-title">Analogue Resin Strap</a>
                                <ul class="product-star">
                                    <li>
                                        <i class="bi bi-star-fill"></i>
                                    </li>
                                    <li>
                                        <i class="bi bi-star-fill"></i>
                                    </li>
                                    <li>
                                        <i class="bi bi-star-fill"></i>
                                    </li>
                                    <li>
                                        <i class="bi bi-star-fill"></i>
                                    </li>
                                    <li>
                                        <i class="bi bi-star-half"></i>
                                    </li>
                                </ul>
                                <div class="product-prices">
                                    <strong class="new-price">$108.00</strong>
                                    <span class="old-price">$165.00</span>
                                </div>
                                <span class="product-discount">-17%</span>
                                <div class="product-links">
                                    <button>
                                        <i class="bi bi-basket-fill"></i>
                                    </button>
                                    <button>
                                        <i class="bi bi-heart-fill"></i>
                                    </button>
                                    <a href="#">
                                        <i class="bi bi-eye-fill"></i>
                                    </a>
                                    <a href="#">
                                        <i class="bi bi-share-fill"></i>
                                    </a>
                                </div>
                            </div>
                        </div> -->
                    </ul>
                </div>
                <div class="glide__arrows" data-glide-el="controls">
                    <button class="glide__arrow glide__arrow--left" data-glide-dir="<">
                        <i class="bi bi-chevron-left"></i>
                    </button>
                    <button class="glide__arrow glide__arrow--right" data-glide-dir=">">
                        <i class="bi bi-chevron-right"></i>
                    </button>
                </div>
            </div>
        </div>
    </section>
    <!--! products end  -->

    <script src="https://cdn.jsdelivr.net/npm/@glidejs/glide"></script>
    <script src="js/thumbsActive.js"></script>
<?php
    require_once "inc/footer.php";
?>