<?php 
require_once "inc/header.php";
?>

   <!--Contact start-->
<section class="myContact  text-center">
    <div class="container">       
        <div class="row">
        <?php $iletisim = $db->getRow("SELECT * FROM ayar"); ?>
            <div class="col-sm-12 col-lg-4">
                <div class="contact1 text-uppercase">Adres</div>
                <div class="contact3"><?php echo $iletisim->ayar_adres ?></div>
    
                <div class="contact1 text-uppercase">Telefon</div>
                <div class="contact3 mb-4"><?php echo $iletisim->ayar_tel ?></div>

                <div class="contact1 text-uppercase">WHATSAPP</div>
                <div class="contact3 mb-4"><?php echo $iletisim->ayar_gsm ?></div>

                <div class="contact1 text-uppercase">ÇALIŞMA SAATLERİ</div>
                <div class="contact3 mb-4"><?php echo $iletisim->ayar_mesai ?></div>
                
            </div>
            <div class="col-sm-12 col-lg-6">
                <iframe class="contact4" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3129.470637825049!2d27.132726914700967!3d38.338087679660795!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14bbdfcf31066537%3A0x21b7fd5048c61be!2s%C4%B0zmir%20Optimum!5e0!3m2!1str!2str!4v1660411783712!5m2!1str!2str" width="700" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</section>
<!--Contact end-->

 <!-- contact start-->
 <section id="contact" class="mySection">
    <div class="container">
        <div class="text-center mb-5 mt-2">
            <h2 class="s-heading  text-white pt-3">İletişim Formu</h2>
        </div>
        <form class="needs-validation" action="result.php" id="FrmContact" novalidate>
            <div class="row align-items-stretch mb-5 mt-3">
                <div class="col-md-6">
                    <div class="form-floating mb-4">
                        <input type="text" id="name" class="form-control" placeholder="Adınız" required
                            maxlength="40" aria-describedby="ErrName">
                        <label for="name">Adınız
                            <span class="text-danger" aria-hidden="true">*</span>
                            <span class="visually-hidden">zorunlu alan</span>
                        </label>
                        <div class="invalid-feedback fst-italic fs-6" id="ErrName"></div>
                    </div>
                    <div class="form-floating mb-4">
                        <input type="email" id="email" class="form-control" placeholder="Eposta" required
                            maxlength="100" aria-describedby="ErrEmail">
                        <label for="email">Eposta Adresiniz
                            <span class="text-danger" aria-hidden="true">*</span>
                            <span class="visually-hidden">zorunlu alan</span>
                        </label>
                        <div class="invalid-feedback fst-italic fs-6" id="ErrEmail"></div>
                    </div>
                    <div class="form-floating mb-4">
                        <input type="tel" id="phone" class="form-control" placeholder="Telefon Numaranız" required
                            maxlength="15" aria-describedby="ErrPhone">
                        <label for="phone">Telefon Numaranız
                            <span class="text-danger" aria-hidden="true">*</span>
                            <span class="visually-hidden">zorunlu alan</span>
                        </label>
                        <div class="invalid-feedback fst-italic fs-6" id="ErrPhone"></div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating form-textarea mb-md-0">
                        <textarea id="message" class="form-control" placeholder="Mesajınız" required maxlength="300"
                            aria-describedby="ErrMessage"></textarea>
                        <label for="message">Mesajınız
                            <span class="text-danger" aria-hidden="true">*</span>
                            <span class="visually-hidden">zorunlu alan</span>
                        </label>
                        <div class="invalid-feedback fst-italic fs-6" id="ErrMessage"></div>
                    </div>
                    <div class="text-white text-end">
                        <span id="current-character">0</span>
                        <span> / 300</span>
                    </div>
                </div>
            </div>
            <div class="text-center BtnContact">
                <button type="submit" class="btn btn-danger btn-lg text-uppercase py-3 d-block w-100"
                    id="BtnContact">
                    Mesaj Gönder
                </button>
            </div>
        </form>
    </div>
</section>
<!-- contact end-->

<?php  require_once "inc/footer.php"; ?>