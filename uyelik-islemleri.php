<?php
    require_once "inc/header.php";
?>

    <!--! account start  -->
    <section class="account-page">
        <div class="container">
            <div class="account-wrapper">
                <div class="account-column">
                    <p class="change_link">
                        <?php 
                            if (isset($_GET['durum'])) {
                                if ($_GET['durum']=="onay") {
                                    echo "Kullanıcı Bulunamadı...";
                                } elseif ($_GET['durum']=="no") {
                                    echo "Kullanıcı Bulunamadı...";
                                }elseif ($_GET['durum']=="bos") {
                                    echo "Kullanıcı mail veya kullanıcı şifre boş bırakılamaz...";
                                }elseif ($_GET['durum']=="email") {
                                    echo "E Posta formatınızın doğruluğunu kontrol edin...";
                                }elseif ($_GET['durum']=="farklisifre") {
                                    echo "Hata! Girdiğiniz şifreler eşleşmiyor.";
                                }elseif ($_GET['durum']=="eksiksifre") {
                                    echo "Hata! Şifreniz minimum 6 karakter uzunluğunda olmalıdır.";
                                }elseif ($_GET['durum']=="mukerrerkayit") {
                                    echo "Hata! Bu kullanıcı daha önce kayıt edilmiş.";
                                }elseif ($_GET['durum']=="basarisiz") {
                                    echo "Hata! Kayıt Yapılamadı Sistem Yöneticisine Danışınız.";
                                }
                            }
                        ?>
                    </p>
                    <h2>GİRİŞ YAP</h2>
                    <?php if (isset($_SESSION['kullanici_mail'])){ ?>
                    <form action="nedmin/netting/islem.php" method="POST" role="form">
                        <div>
                            <label>
                                <span>E Posta Adresi <span class="required">*</span></span>
                                <input type="email" name="kullanici_mail">
                            </label>
                        </div>
                        <div>
                            <label>
                                <span>Kullanıcı Şifre <span class="required">*</span></span>
                                <input type="password" name="kullanici_password">
                            </label>
                        </div>
                        <p class="remember">
                            <label>
                                <input type="checkbox" name="beni_hatirla">
                                <span>Beni Hatırla</span>
                            </label>
                            <button type="submit" name="kullanicigiris" class="btn btn-sm btn-green">GİRİŞ YAP</button>
                        </p>
                        <a href="#" class="form-link">Parolanızı unuttunuz mu?</a>
                    </form>
                    <?php }else{ ?>
                    <form action="nedmin/netting/islem.php" method="POST" role="form">
                        <div>
                            <label>
                                <span>E Posta Adresi <span class="required">*</span></span>
                                <input type="email" name="kullanici_mail">
                            </label>
                        </div>
                        <div>
                            <label>
                                <span>Kullanıcı Şifre <span class="required">*</span></span>
                                <input type="password" name="kullanici_password">
                            </label>
                        </div>
                        <p class="remember">
                            <label>
                                <input type="checkbox" name="beni_hatirla">
                                <span>Beni Hatırla</span>
                            </label>
                            <button type="submit" name="kullanicigiris" class="btn btn-sm btn-green">GİRİŞ YAP</button>
                        </p>
                        <a href="#" class="form-link">Parolanızı unuttunuz mu?</a>
                    </form>
                    <?php } ?>
                </div>
                <div class="account-column">
                    <h2>ÜYE OL</h2>
                    <form action="nedmin/netting/islem.php" method="POST" role="form">
                        <div>
                            <label>
                                <span>Kullanıcı Ad ve Soyadınızı Giriniz? <span class="required">*</span></span>
                                <input type="text" name="kullanici_adsoyad">
                            </label>
                        </div>
                        <div>
                            <label>
                                <span>E Posta Adresi <span class="required">*</span></span>
                                <input type="email" name="kullanici_mail">
                            </label>
                        </div>
                        <div>
                            <label>
                                <span>Telefon Numarası <span class="required">*</span></span>
                                <input type="tel" name="kullanici_tel">
                            </label>
                        </div>
                        <div>
                            <label>
                                <span>Kullanıcı Şifre <span class="required">*</span></span>
                                <input type="password" name="kullanici_passwordone">
                            </label>
                        </div>
                        <div>
                            <label>
                                <span>Kullanıcı Şifre Tekrarı <span class="required">*</span></span>
                                <input type="password" name="kullanici_passwordtwo">
                            </label>
                        </div>
                        <div class="privacy-policy-text remember">
                            <p>
                                Kişisel verileriniz, bu web sitesindeki deneyiminizi desteklemek için kullanılacaktır. hesabınıza erişimi yönetin ve burada açıklanan diğer amaçlar için <a
                                    href="#">Gizlilik Politikası</a>.
                            </p>
                            <button type="submit" name="kullanicikaydet" class="btn btn-sm btn-green">ÜYE OL</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </section>
    <!--! account end  -->


<?php
    require_once "inc/footer.php";
?>