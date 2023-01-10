<?php
    require_once "inc/header.php";
?>
<!--header start-->
<header class="imgheadCover text-white text-center">
    <div class="container">
        <div class="backImage-heading text-uppercase">ÜYELİK İŞLEMLERİ</div>
    </div>
</header>

<section class="member">
    <div class="container">
        <div class="row" id="newMember">
            <div class="col-lg-12">
                <center>
                    <select class="form-select form-select-sm border border-secondary" style="width:250px; margin-top: 1rem;" onchange="this.options[this.selectedIndex].value != '' ? location = this.options[this.selectedIndex].value : false">
                        <option value="">Seçiniz</option>
                        <option value="hesabim">Üyelik Bilgileriniz</option>
                        <option value="sifre-guncelle">Şifrenizi Değiştirin</option>
                        <option value="sparislerim">Sparişleriniz</option>
                        
                </select>
                </center>
                <hr class="border border-dark">
            </div>
            <div class="col-lg-12">
                <h2>Şifrenizi Değiştirin</h2>
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
                        <input type="password"  class="form-control border border-secondary" name="kullanici_eskipassword" placeholder="Eski Şifrenizi Giriniz">
                        <label for="kullanici_eskipassword">Eski Şifrenizi Giriniz..</label>
                    </div>          
                    <div class="form-floating">
                        <input type="password" id="kullanici_passwordone" name="kullanici_passwordone" class="form-control border border-secondary" placeholder="Yeni Şifrenizi Giriniz...">
                        <label for="kullanici_passwordone">Yeni Şifrenizi Giriniz...</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" id="kullanici_passwordtwo" name="kullanici_passwordtwo" class="form-control border border-secondary" placeholder="Yeni Şifrenizi Tekrar Giriniz..">
                        <label for="kullanici_passwordtwo">Yeni Şifrenizi Tekrar Giriniz..</label>
                    </div>
                    <input type="hidden" name="kullanici_id" value="<?php echo $kullanici->kullanici_id ?>"> 
                    <div class="text-center">
                        <button type="submit" name="kullanicisifreguncelle" class="btn btn-lg text-uppercase" id="BtnContact">
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