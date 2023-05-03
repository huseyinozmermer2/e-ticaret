<?php
  require_once "inc/header.php"

?>

    <!--! account start  -->
    <section class="account-page">
        <div class="container">
            <div class="account-wrapper">
                <div class="account-column">
                    <h2>ŞİFRE GÜNCELLE</h2>
                    <form action="nedmin/netting/islem.php" method="POST">
                        <?php 
                            if (isset($_GET['durum'])){
                                if ($_GET['durum']=="eksiksifre") {
                        ?>
                                    <div class="alert alert-danger">
                                        <strong>Hata!</strong> Şifreniz minimum 6 karakter uzunluğunda olmalıdır.
                                    </div>				
                        <?php 
                                } elseif ($_GET['durum']=="mukerrerkayit") {
                        ?>
                                    <div class="alert alert-danger">
                                        <strong>Hata!</strong> Bu kullanıcı daha önce kayıt edilmiş.
                                    </div>
                                        
                        <?php 
                                } elseif ($_GET['durum']=="basarisiz") {
                        ?>
                                    <div class="alert alert-danger">
                                        <strong>Hata!</strong> Kayıt Yapılamadı Sistem Yöneticisine Danışınız.
                                    </div>	
                        <?php 	}
                            }
                        ?>
                        <div>
                            <label>
                                <span>Eski Şifrenizi Giriniz<span class="required">*</span></span>
                                <input type="password" name="kullanici_eskipassword"/>
                            </label>
                        </div>
                        <div>
                            <label>
                                <span>Yeni Şifrenizi Giriniz <span class="required">*</span></span>
                                <input type="password" name="kullanici_passwordone"/>
                            </label>
                        </div>
                        <div>
                            <label>
                                <span>Yeni Şifrenizi Tekrar Giriniz<span class="required">*</span></span>
                                <input type="password" name="kullanici_passwordtwo" />
                            </label>
                        </div>
                        <input type="hidden" name="kullanici_id" value="<?php echo $kullanici->kullanici_id ?>">
                        <button type="submit" name="kullanicisifreGuncelle" class="btn btn-lg btn-green">ŞİFRE DEĞİŞTİR</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!--! account end  -->

<?php
  require_once "inc/footer.php"

?>