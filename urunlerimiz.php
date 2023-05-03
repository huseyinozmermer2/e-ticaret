<?php
    require_once "inc/header.php";

		$urun=$db->getRows("SELECT * FROM urun order by urun_id DESC");
?>
<head>
    <title>Ürünlerimiz Sayfası</title>
</head>
<!--! products start  -->
<section class="product-cart">
        <div class="container">
            <div class="product-wrapper">
                <?php
                    foreach ($urun as $urun ) { 
                        $urun_id=$urun->urun_id;
                        $urunfoto=$db->getRow("SELECT * FROM urunfoto WHERE urun_id=?", array($urun_id));
                ?>
                    <div class="card">
                            <div class="product-image">
                                <a href="urun/<?php echo seo($urun->urun_ad).'-'.$urun->urun_id ?>">
                                    <img src="img/uploads/<?php echo $urunfoto->urunfoto_resimyol; ?>" alt="" class="img1">
                                    <img src="img/uploads/<?php echo $urunfoto->urunfoto_resimyol2; ?>" alt="" class="img2">
                                </a>
                            </div>
                            <div class="product-info">
                                <a href="urun/<?php echo seo($urun->urun_ad).'-'.$urun->urun_id ?>" class="product-title"><?php echo $urun->urun_ad." ".$urun->urun_stokkodu ?></a>
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
                                    <span class="old-price">&#8378; <?php echo $urun->urun_fiyat ?>,00</span>
                                    <strong class="new-price">&#8378; <?php echo ($urun->urun_fiyat * (100 - $urun->urun_indirim)/100) ?>,00</strong>
                                </div>
                                <span class="product-discount">-<?php echo $urun->urun_indirim ?>%</span>
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
            </div>
        </div>
    </section>
    <!--! products end  -->
<?php
    require_once "inc/footer.php";
?>