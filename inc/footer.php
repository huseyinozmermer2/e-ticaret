
    <section class="lazyload1 bg-black text-white ">
        <div class="container">
            <div class="row text-center">
                <?php
                    $uretim1=$db->getRows("SELECT * FROM uretim WHERE uretim_id>?", array(1));
                        foreach ($uretim1 as $uretim1) {
                ?>
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4  mt-5">
                    <a href="uretim.php" title="Baklavacılığın okulu burası" class="lazyload"><img src="img/uretim/<?php echo $uretim1->uretim_foto ?>" alt="<?php echo $uretim1->uretim_ad ?>" width="100" height="75" class="mb-2"/><br><?php echo $uretim1->uretim_ad ?></a>
                </div>
                <?php
                }
                ?>
            </div>
        </div>
    </section>

    <section class="product0 bg-dark">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-xs-12 col-sm-4 col-md-2 col-lg-2  mt-5 mb-5 ">
                    <h2 class="ps-3">YARDIM</h2>
                    <ul class="nav flex-column ">
                        <?php 
                            //Belirli veriyi seçme işlemi
                            $yardimmenu=$db->getRows("SELECT * FROM menu
                                                            WHERE menu_durum=? AND
                                                            menu_kategori=? order by menu_sira ASC LIMIT 5",array(1, "yardim"));
                                foreach ($yardimmenu as $yardimmenu) {
                        ?>
                        <li class="nav-item"><a class="nav-link" href="
                            <?php 
                                if (!empty($yardimmenu->menu_url)) {
                                    echo $yardimmenu->menu_url;
                                }else{
                                    echo "i-".seo($yardimmenu->menu_ad);
                                }
                            ?>
                        
                        "><?php echo $yardimmenu->menu_ad ?></a></li>
                        <?php }?>                      
                    </ul>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3  mt-5 mb-5 ">
                    <h2 class="ps-3">HAKKIMIZDA</h2>
                    <ul class="nav flex-column ">                 
                        <li class="nav-item"><a class="nav-link" href="hakkimizda.php">Hakkımızda</a></li>
                        <li class="nav-item"><a class="nav-link" href="iletisim.php">İletişim</a></li>
                        <?php 
                            //Belirli veriyi seçme işlemi
                            $hakkimizdamenu=$db->getRows("SELECT * FROM menu
                                                            WHERE menu_durum=? AND
                                                            menu_kategori=? order by menu_sira ASC LIMIT 5",array(1, "hakkimizda"));
                                foreach ($hakkimizdamenu as $hakkimizdamenu) {
                        ?>
                        <li class="nav-item"><a class="nav-link" href="
                            <?php 
                                if (!empty($hakkimizdamenu->menu_url)) {
                                    echo $hakkimizdamenu->menu_url;
                                }else{
                                    echo "i-".seo($hakkimizdamenu->menu_ad);
                                }
                            ?>
                        
                        "><?php echo $hakkimizdamenu->menu_ad ?></a></li>
                        <?php }?>
                    </ul>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-2 col-lg-2  mt-5 mb-5 ">
                    <h2 class="ps-3">E Mağaza</h2>
                    <ul class="nav flex-column ">                        
                        <?php
                            $kategori=$db->getRows("SELECT * FROM kategori order by kategori_sira ASC");
                                foreach ($kategori as $kategori) {
                        ?>
                                    <li class="nav-item"><a class="nav-link" href='kategori-<?php echo seo($kategori->kategori_ad) ?>'><?php echo $kategori->kategori_ad ?></a></li>
                        <?php 
                                }
                        ?>
                    </ul>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-2 col-lg-2  mt-5 mb-5 ">
                    <h2 class="ps-3">Takip Edin</h2>
                    <ul class="nav flex-column ">                 
                        <li class="nav-item"><a class="nav-link" href="https://<?php echo $ayar->ayar_facebook ?>"><i class="fa-brands fa-facebook-f"></i>Facebook</a></li>
                        <li class="nav-item"><a class="nav-link" href="https://<?php echo $ayar->ayar_instagram ?>"><i class="fa-brands fa-instagram"></i>İnstagram</a></li>
                        <li class="nav-item"><a class="nav-link" href="https://<?php echo $ayar->ayar_twitter ?>"><i class="fa-brands fa-twitter"></i>Twitter</a></li>
                        <li class="nav-item"><a class="nav-link" href="https://<?php echo $ayar->ayar_youtube ?>"><i class="fa-brands fa-youtube"></i>Youtube</a></li>
                    </ul>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-2 col-lg-2  mt-5 mb-5 ">
                    <h2 >Adres</h2>
                    <ul class="nav flex-column ">                 
                        <li class="contact"><?php echo $ayar->ayar_adres ?><?php echo $ayar->ayar_ilce ?>/<?php echo $ayar->ayar_il ?></li>
                        <li class="contact"><?php echo $ayar->ayar_mail ?></li>
                        <li class="contact"><?php echo $ayar->ayar_tel ?></li>
                        <li class="contact"><?php echo $ayar->ayar_gsm ?></li>
                        <li class="contact"><?php echo $ayar->ayar_faks ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- footer start -->
    <footer class="footer py-3 bg-black">
        <div class="container">
            <div class="row justify-content-center ">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center text-muted">
                    <img src="img/<?php echo $ayar->ayar_logo2 ?>" alt="">
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center text-muted mt-3">
                    <?php echo $ayar->ayar_author ?>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer end -->

    <script src="js/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="js/fontawesome.js"></script>
    <script src="js/custom/extra.js"></script>
    <script src="js/custom/navbar.js"></script>
</body>

</html>