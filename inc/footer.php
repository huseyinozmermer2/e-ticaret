    <!--! policy start  -->
    <section class="policy">
        <div class="container">
            <ul class="policy-list">
                <li class="policy-item">
                    <i class="bi bi-truck"></i>
                    <div class="policy-texts">
                        <strong>FREE DELIVERY</strong>
                        <span>From $59.89</span>
                    </div>
                </li>
                <li class="policy-item">
                    <i class="bi bi-headset"></i>
                    <div class="policy-texts">
                        <strong>SUPPORT 24/7</strong>
                        <span>Online 24 hours</span>
                    </div>
                </li>
                <li class="policy-item">
                    <i class="bi bi-arrow-clockwise"></i>
                    <div class="policy-texts">
                        <strong> 30 DAYS RETURN</strong>
                        <span>Simply return it within 30 days</span>
                    </div>
                </li>
                <li class="policy-item">
                    <i class="bi bi-credit-card"></i>
                    <div class="policy-texts">
                        <strong> PAYMENT METHOD</strong>
                        <span>Secure Payment</span>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <!--! policy end  -->

    <!--! footer start  -->
    <footer class="footer">
        <div class="widgets-row">
            <div class="container">
                <div class="footer-widgets">
                    <div class="brand-info">
                        <div class="footer-logo">
                            HAKKIMIZDA
                        </div>
                        <div class="footer-desc">
                            <p> Yaklaşık 35 yıllık ticari geçmişe sahip olan şirket ortaklarımız tarafından 1990 yılında
                                Osmanlı Sanayi Ürünleri Pazarlama Tic. Ltd. Şti. ünvanı ile İstanbul da kurulmuştur.</p>
                        </div>
                    </div>
                    <div class="widget-nav-menu">
                        <h4>HESABIM</h4>
                        <ul class="menu-list">
                            <li>
                                <a href="siparislerim">Spariş Takibi</a>
                            </li>
                            <li>
                                <a href="hesabim">Hesabım</a>
                            </li>
                            <li>
                                <a href="odeme">Ödeme</a>
                            </li>
                            <li>
                                <a href="cart">Sepet</a>
                            </li>
                        </ul>
                    </div>
                    <div class="widget-nav-menu">
                        <h4>SÖZLEŞMELER</h4>
                        <ul class="menu-list">
                            <?php 
                            //Belirli veriyi seçme işlemi
                            $menu=$db->getRows("SELECT * FROM menu WHERE menu_durum=? order by menu_sira ASC LIMIT 5",array(1));
                                foreach ($menu as $menu) {
                        ?>
                            <li>
                                <a href="
                                    <?php 
                                        if (!empty($menu->menu_url)) {
                                            echo $menu->menu_url;
                                        }else{
                                            echo "sayfa/".seo($menu->menu_ad);
                                        }
                                    ?>
                                "><?php echo $menu->menu_ad ?></a>
                            </li>
                            <?php }?>
                        </ul>
                    </div>
                    <div class="widget-nav-menu">
                        <h4>İLETİŞİM</h4>
                        <ul class="menu-list">
                            <li>
                                Telefon : <a href="tel:0 216 371 61 42"><?php echo $ayar->ayar_tel ?></a>
                            </li>
                            <li>
                                Telefon : <a href="tel:0 216 441 27 02"><?php echo $ayar->ayar_faks ?></a>
                            </li>
                            <li>
                                Adres : <?php echo $ayar->ayar_adres."<br>".$ayar->ayar_ilce."/".$ayar->ayar_il ?>
                            </li>
                            <li>
                                Mail: <a href="mailto: info@osmanlisanayi.com"> info@osmanlisanayi.com</a>
                            </li>
                        </ul>
                    </div>
                    <div class="widget-nav-menu">
                        <a href="#"><img src="img/themes/Renkli-PNG-min.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-row">
            <div class="container">
                <div class="footer-copyright">
                    <div class="site-copyright">
                        <p>
                            osmanlisanayi.com.tr 2023 © Tüm Hakları Saklıdır.
                        </p>
                    </div>
                    <div class="footer-menu">
                        <a href="#">
                            <img src="img\themes/payments.png" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--! footer end  -->
    <!-- Start of evye Zendesk Widget script -->
    <script id="ze-snippet" src="<?php echo $ayar->ayar_zopim ?>"> </script>
    <!-- End of evye Zendesk Widget script -->
    <!-- javascript  -->
    <script src="js/jquery-3.6.3.min.js"></script>
    <script src="js/header.js"></script>

    </body>

    </html>