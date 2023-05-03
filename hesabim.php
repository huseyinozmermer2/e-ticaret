<?php
    require_once "inc/header.php";
?>

    <!--! account start  -->
    <section class="account-page">
        <div class="container">
            <div class="account-wrapper">
                <div class="account-column">
                    <h2></h2>
                    <?php if (isset($_SESSION['kullanici_mail'])){ ?>
                    <form action="nedmin/netting/islem.php" method="POST" role="form">
                        <div>
                            <label>
                                <span>Kullanıcı Adı Soyadı <span class="required">*</span></span>
                                <input type="text" name="kullanici_adsoyad" value="<?php echo $kullanici->kullanici_adsoyad ?>">
                            </label>
                        </div>
                        <div>
                            <label>
                                <span>E Posta Adresi <span class="required">*</span></span>
                                <input type="email" name="kullanici_mail" value="<?php echo $kullanici->kullanici_mail ?>">
                            </label>
                        </div>
                        <div>
                            <label>
                                <span>Telefon Numarası <span class="required">*</span></span>
                                <input type="tel"  name="kullanici_tel" value="<?php echo $kullanici->kullanici_tel ?>">
                            </label>
                        </div>
                        <div>
                            <label>
                                <span>Ülke <span class="required">*</span></span>
                                <input type="text"  name="kullanici_ulke" value="<?php echo $kullanici->kullanici_ulke ?>">
                            </label>
                        </div>
                        <div>
                            <label>
                                <span>İl <span class="required">*</span></span>
                                <input type="text"  name="kullanici_il" value="<?php echo $kullanici->kullanici_il ?>">
                            </label>
                        </div>
                        <div>
                            <label>
                                <span>İlçe <span class="required">*</span></span>
                                <input type="text"  name="kullanici_ilce" value="<?php echo $kullanici->kullanici_ilce ?>">
                            </label>
                        </div>
                        <div>
                            <label>
                                <span>Adres <span class="required">*</span></span>
                                <input type="text"  name="kullanici_adres" value="<?php echo $kullanici->kullanici_adres ?>">
                            </label>
                        </div>
                        
                        <div class="privacy-policy-text remember">
                            <p>
                                Kişisel verileriniz, bu web sitesindeki deneyiminizi desteklemek için kullanılacaktır. hesabınıza erişimi yönetin ve burada açıklanan diğer amaçlar için <a
                                href="
                                <?php
                                 $menu=$db->getRow("SELECT * FROM menu WHERE menu_seourl=? order by menu_sira ASC",array("gizlilik-ve-guvenlik"));
                                  
                                 if (!empty($menu->menu_url)) {
                                     echo $menu->menu_url;
                                 }else{
                                     echo "sayfa-".seo($menu->menu_ad);
                                 }

                                ?>
                                ">Gizlilik Politikası</a>.
                            </p>
                            <button type="submit" name="kullaniciGuncelle" class="btn btn-lg btn-green">BİLGİLERİM GÜNCELLE</button>
                        </div>

                    </form>
                    <?php }else{
                            header("Location: index.php");
                        }
                    ?>
                </div>
            </div>
        </div>
    </section>
    <!--! account end  -->

<?php
    require_once "inc/footer.php";
?>