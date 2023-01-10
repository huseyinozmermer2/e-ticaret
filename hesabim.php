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
                <h2>Üyelik Bilgilerinizi Güncelleyin</h2>
            </div>
            <div class="col-sm-12 col-lg-4  newmember">
                <form action="nedmin/netting/islem.php" method="POST" role="form">
                    <?php 
                        if (isset($_GET['durum'])) {
                            if ($_GET['durum']=="ok") {
                    ?>
                                <b style="color:green;">Üyelik İşlemleriniz Güncellendi...</b>

                    <?php
                            }elseif($_GET['durum']=="no") {
                    ?>
                                <b style="color:red;">İşlem Başarısız...</b>

                    <?php
                            }
                        }
                    ?>
                    <div class="form-floating">
                        <input type="text" class="form-control border border-secondary" name="kullanici_mail"    value="<?php echo $kullanici->kullanici_mail ?>">
                    </div>
                    <div class="form-floating">
                        <input type="text"  class="form-control border border-secondary" name="kullanici_adsoyad" value="<?php echo $kullanici->kullanici_adsoyad ?>">
                    </div>          
                    <div class="form-floating">
                        <input type="text" class="form-control border border-secondary" name="kullanici_il"    value="<?php echo $kullanici->kullanici_il ?>">
                    </div>
                    <div class="form-floating">
                        <input type="text" class="form-control border border-secondary" name="kullanici_ilce"    value="<?php echo $kullanici->kullanici_ilce ?>">
                    </div>
                    <div class="form-floating">
                        <input type="text" class="form-control border border-secondary" name="kullanici_adres"    value="<?php echo $kullanici->kullanici_adres ?>">
                    </div>
                    <input type="hidden" name="kullanici_id" value="<?php echo $kullanici->kullanici_id ?>"> 
                    <div class="text-center">
                        <button type="submit" name="kullanicibilgiguncelle" class="btn btn-lg text-uppercase" id="BtnContact">
                            Bilgilerimi Güncelle
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