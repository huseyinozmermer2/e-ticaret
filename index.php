<?php
    require_once "inc/header.php";
?>

    <!--! slider start   -->
    <section class="slider">
        <div class="slider-elements">
            <?php
                $sliders=$db->getRows("SELECT * FROM urun WHERE urun_slider=?", array(1 ));
                    foreach ($sliders as $slider) {
                        $urun_id=$slider->urun_id;
                        $urunfotone=$db->getRow("SELECT * FROM urunfoto WHERE urun_id=?", array($urun_id));
            ?>
            <div class="slider-item fade">
                <div class="slider-image">
                    <img src="img/uploads/<?php echo $urunfotone->urunfoto_resimyol; ?>" class="img-fluid" alt="">
                </div>
                <div class="container">
                    <p class="slider-title"><?php echo $slider->urun_ad ?></p>
                    <h2 class="slider-heading"><?php echo $slider->urun_aciklama ?></h2>
                    <a href="urun/<?php echo seo($slider->urun_ad).'-'.$slider->urun_id ?>" class="btn btn-lg btn-green">Explore Now</a>
                </div>
            </div>
            <?php } ?>
            <div class="slider-buttons">
                <button onclick="plusSlide(-1)">
                    <i class="bi bi-chevron-left"></i>
                </button>
                <button onclick="plusSlide(1)">
                    <i class="bi bi-chevron-right"></i>
                </button>
            </div>
            <div class="slider-dots">
                <button class="slider-dot active" onclick="currentSlide(1)">
                    <span></span>
                </button>
                <button class="slider-dot" onclick="currentSlide(2)">
                    <span></span>
                </button>
                <button class="slider-dot" onclick="currentSlide(3)">
                    <span></span>
                </button>
            </div>
        </div>
    </section>
    <!--! slider end   -->

    <!--! categories start  -->
    <section class="categories">
        <div class="container">
            <div class="section-title">
                <h2>Tüm Kategoriler</h2>
                <p>Summer Collection New Morden Design</p>
            </div>
            <ul class="category-list">
                <li class="category-item">
                    <a href="#">
                        <img src="img/uploads/2022/12/114.0279.508-430x227.jpg" alt="" class="category-image">
                        <span class="category-title">Real Granit Evye</span>
                    </a>
                </li>
                <li class="category-item">
                    <a href="#">
                        <img src="img/uploads/2022/12/artenova-ae1000-e1673524782179.png" alt="" class="category-image">
                        <span class="category-title"> Teka Evyeler </span>
                    </a>
                </li>
                <li class="category-item">
                    <a href="#">
                        <img src="img/uploads/2022/12/d150lbeyaz-430x430.png" alt="" class="category-image">
                        <span class="category-title"> Franke Evye </span>
                    </a>
                </li>
                <li class="category-item">
                    <a href="#">
                        <img src="img/uploads/2022/12/artenova-aeb-2010-e1673524715266.png" alt=""
                            class="category-image">
                        <span class="category-title"> Ukinox Granit Evye </span>
                    </a>
                </li>
                <li class="category-item">
                    <a href="#">
                        <img src="img/uploads/2022/12/artenova-ae860-e1673524885158.png" alt="" class="category-image">
                        <span class="category-title"> Dominox Evyeler </span>
                    </a>
                </li>
                <li class="category-item">
                    <a href="#">
                        <img src="img/uploads/2022/12/e003-krem-granit-eviye-1.png" alt="" class="category-image">
                        <span class="category-title"> Artenova Evyeler </span>
                    </a>
                </li>
            </ul>
        </div>
    </section>
    <!--! categories end  -->

    <!--! products start  -->
    <section class="products">
        <div class="container">
            <div class="section-title">
                <h2>Öne Çıkanlar</h2>
                <p>Summer Collection New Morden Design</p>
            </div>
            <div class="product-wrapper product-carousel">
                <div class="glide__track" data-glide-el="track">
                    <ul class="product-list glide__slides">
                        <?php
                            $urunonecikar=$db->getRows("SELECT * FROM urun WHERE urun_onecikar=?", array(1));
                            foreach ($urunonecikar as $urunonecikar) {
                                $urun_id=$urunonecikar->urun_id;
                                $urunfotone=$db->getRow("SELECT * FROM urunfoto WHERE urun_id=?", array($urun_id));	
                        ?>
                        <div class="card glide__slide">
                            <div class="product-image">
                                <a href="urun/<?php echo seo($urunonecikar->urun_ad).'-'.$urunonecikar->urun_id ?>">
                                    <img src="img/uploads/<?php echo $urunfotone->urunfoto_resimyol; ?>" alt="" class="img1">
                                    <img src="img/uploads/<?php echo $urunfotone->urunfoto_resimyol2; ?>" alt="" class="img2">
                                </a>
                            </div>
                            <div class="product-info">
                                <a href="urun/<?php echo seo($urunonecikar->urun_ad).'-'.$urunonecikar->urun_id ?>" class="product-title"><?php echo $urunonecikar->urun_ad." ".$urunonecikar->urun_stokkodu ?></a>
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
                                <span class="old-price"><?php echo $urunonecikar->urun_fiyat?>,00 &#8378; </span>
                                    <strong class="new-price"><?php 
                                echo ($urunonecikar->urun_fiyat * (100 - $urunonecikar->urun_indirim)/100)
                                ?>,00 &#8378;</strong>
                                </div>
                                <span class="product-discount">-<?php echo $urunonecikar->urun_indirim?>%</span>
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

    <!--! campaigns start -->
    <section class="campaigns">
        <div class="container">
            <div class="campaigns-wrapper">
            <?php
                $campaign=$db->getRows("SELECT * FROM urun WHERE urun_alt=?", array(1));
                foreach ($campaign as $campaign) {

            ?>
                <div class="campaign-item">
                    <h3 class="campaign-title"><?php echo $campaign->urun_ad; ?></h3>
                    <p class="campaign-desc"><?php echo $campaign->urun_aciklama; ?></p>
                    <a href="urun/<?php echo seo($campaign->urun_ad).'-'.$campaign->urun_id ?>" class="btn btn-green">
                        Ürün İnceleme
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
                <?php } ?>
            </div>
            <div class="campaigns-wrapper">
            <?php
                $campaign=$db->getRows("SELECT * FROM urun WHERE urun_alt=?", array(2));
                foreach ($campaign as $campaign) {

            ?>
                <div class="campaign-item">
                    <h3 class="campaign-title"><?php echo $campaign->urun_ad; ?></h3>
                    <p class="campaign-desc"><?php echo $campaign->urun_aciklama; ?></p>
                    <a href="urun/<?php echo seo($campaign->urun_ad).'-'.$campaign->urun_id ?>" class="btn btn-green">
                        Ürün İnceleme
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
                <?php } ?>
            </div>
        </div>
    </section>
    <!--! campaigns end -->

    <!--! products start  -->
    <section class="products">
        <div class="container">
            <div class="section-title">
                <h2>Yeni Ürünler</h2>
                <p>Summer Collection New Morden Design</p>
            </div>
            <div class="product-wrapper product-carousel2">
                <div class="glide__track" data-glide-el="track">
                    <ul class="product-list glide__slides">
                    <?php
                            $urunyeni=$db->getRows("SELECT * FROM urun WHERE urun_yeni=?", array(1));
                            foreach ($urunyeni as $urunyeni) {
                                $urun_id=$urunyeni->urun_id;
                                $urunfotoyeni=$db->getRow("SELECT * FROM urunfoto WHERE urun_id=?", array($urun_id));	
                        ?>
                        <div class="card glide__slide">
                            <div class="product-image">
                                <a href="urun/<?php echo seo($urunyeni->urun_ad).'-'.$urunyeni->urun_id ?>">
                                    <img src="img/uploads/<?php echo $urunfotoyeni->urunfoto_resimyol; ?>" alt="" class="img1">
                                    <img src="img/uploads/<?php echo $urunfotoyeni->urunfoto_resimyol2; ?>" alt="" class="img2">
                                </a>
                            </div>
                            <div class="product-info">
                                <a href="urun/<?php echo seo($urunyeni->urun_ad).'-'.$urunyeni->urun_id ?>" class="product-title"><?php echo $urunyeni->urun_ad." ".$urunyeni->urun_stokkodu ?></a>
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
                                <span class="old-price"><?php echo $urunyeni->urun_fiyat?>,00 &#8378; </span>
                                    <strong class="new-price"><?php 
                                echo ($urunyeni->urun_fiyat * (100 - $urunyeni->urun_indirim)/100)
                                ?>,00 &#8378;</strong>
                                </div>
                                <span class="product-discount">-<?php echo $urunyeni->urun_indirim?>%</span>
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

    <!--! blogs start  -->
    <section class="blogs">
        <div class="container">
            <div class="section-title">
                <h2>From Our Blog</h2>
                <p>Summer Collection New Morden Design</p>
            </div>
            <ul class="blog-list">
                <li class="blog-item">
                    <a href="#" class="blog-image">
                        <img src="img/uploads/2022/12/114.0279.508-430x227.jpg" alt="">
                    </a>
                    <div class="blog-info">
                        <div class="blog-info-top">
                            <span>25 Feb, 2021 </span>
                            -
                            <span>0 Comments</span>
                        </div>
                        <div class="blog-info-center">
                            <a href="#">Aliquam hendrerit mi metus</a>
                        </div>
                        <div class="blog-info-bottom">
                            <a href="#">Read More</a>
                        </div>
                    </div>
                </li>
                <li class="blog-item">
                    <a href="#" class="blog-image">
                        <img src="img/uploads/2022/12/114.0279.508-430x227.jpg" alt="">
                    </a>
                    <div class="blog-info">
                        <div class="blog-info-top">
                            <span>25 Feb, 2021 </span>
                            -
                            <span>0 Comments</span>
                        </div>
                        <div class="blog-info-center">
                            <a href="#">Aliquam hendrerit mi metus</a>
                        </div>
                        <div class="blog-info-bottom">
                            <a href="#">Read More</a>
                        </div>
                    </div>
                </li>
                <li class="blog-item">
                    <a href="#" class="blog-image">
                        <img src="img/uploads/2022/12/114.0279.508-430x227.jpg" alt="">
                    </a>
                    <div class="blog-info">
                        <div class="blog-info-top">
                            <span>25 Feb, 2021 </span>
                            -
                            <span>0 Comments</span>
                        </div>
                        <div class="blog-info-center">
                            <a href="#">Aliquam hendrerit mi metus</a>
                        </div>
                        <div class="blog-info-bottom">
                            <a href="#">Read More</a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <!--! blogs end  -->

    <!--! brands start  -->
    <section class="brands">
        <div class="container">
            <ul class="brand-list">
                <li class="brand-item">
                    <a href="#">
                        <img src="img/brands/brand1.png" alt="">
                    </a>
                </li>
                <li class="brand-item">
                    <a href="#">
                        <img src="img/brands/brand2.png" alt="">
                    </a>
                </li>
                <li class="brand-item">
                    <a href="#">
                        <img src="img/brands/brand3.png" alt="">
                    </a>
                </li>
                <li class="brand-item">
                    <a href="#">
                        <img src="img/brands/brand4.png" alt="">
                    </a>
                </li>
                <li class="brand-item">
                    <a href="#">
                        <img src="img/brands/brand5.png" alt="">
                    </a>
                </li>
                <li class="brand-item">
                    <a href="#">
                        <img src="img/brands/brand1.png" alt="">
                    </a>
                </li>
            </ul>
        </div>
    </section>
    <!--! brands end  -->

    <!--! campaign single start  -->
    <section class="campaign-single">
        <div class="container">
            <div class="campaign-wrapper">
            <?php
                $campaign2=$db->getRow("SELECT * FROM urun WHERE urun_alt=?", array(3));
            ?>
                <h2><?php echo $campaign2->urun_ad; ?></h2>
                <strong><?php echo $campaign2->urun_aciklama; ?></strong>
                <span></span>
                <a href="urun/<?php echo seo($campaign2->urun_ad).'-'.$campaign2->urun_id ?>" class="btn btn-lg">
                    Ürün İncele
                    <i class="bi bi-arrow-right"></i>
                </a>
            </div>
        </div>
    </section>
    <!--! campaign single end  -->

    <script src="js/slider.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@glidejs/glide"></script>
    <script src="js/glide.js"></script>
<?php
    require_once "inc/footer.php";
?>