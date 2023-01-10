<?php
    require_once "inc/header.php";
?>
<!--header start-->
<header class="imgheadCover text-white text-center">
    <div class="container">
        <div class="backImage-heading text-uppercase">Üyelik işlemleri</div>
    </div>
</header>

<section class="member">
    <div class="container">
        <div class="row" id="newMember">
            <div class="col-lg-12">
                <h2>Hemen Üyemiz Olun</h2>
            </div>
            <div class="col-sm-12 col-lg-4  newmember">
                <form action="nedmin/netting/islem.php" method="POST" role="form">
                    <?php 
						if (isset($_GET['durum'])){
							if ($_GET['durum']=="farklisifre") {
					?>
								<div class="alert alert-danger">
									<strong>Hata!</strong> Girdiğiniz şifreler eşleşmiyor.
								</div>			
					<?php
							} elseif ($_GET['durum']=="eksiksifre") {
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
                    <div class="form-floating">
                        <input type="text" id="kullanici_adsoyad" name="kullanici_adsoyad" class="form-control" placeholder="Ad ve Soyadınızı Giriniz...">
                        <label for="kullanici_adsoyad">Ad ve Soyadınızı Giriniz...
                        </label>
                    </div>
                    <div class="form-floating">
                        <input type="email" id="kullanici_mail" name="kullanici_mail" class="form-control" placeholder="Dikkat! Mail adresiniz kullanıcı adınız olacaktır.">
                        <label for="kullanici_mail">Dikkat! Mail adresiniz kullanıcı adınız olacaktır.</label>
                    </div>          
                    <div class="form-floating">
                        <input type="password" id="kullanici_passwordone" name="kullanici_passwordone" class="form-control" placeholder="Şifrenizi Giriniz...">
                        <label for="kullanici_passwordone">Şifrenizi Giriniz...</label>
                    </div>
                    <div class="form-floating">
                        <input type="text" id="kullanici_passwordtwo" name="kullanici_passwordtwo" class="form-control" placeholder="Şifrenizi Tekrar Giriniz...">
                        <label for="kullanici_passwordtwo">Şifrenizi Tekrar Giriniz...</label>
                    </div>
                    <div class="text-center">
                        <button type="submit" name="kullanicikaydet" class="btn btn-lg text-uppercase" id="BtnContact">
                            Üyemiz Olun >
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<?php
    require_once "inc/footer.php";
?>