<?php 
    require_once "inc/header.php";
?>

    <!--! account start  -->
    <section class="payment-page">
        <div class="container">
            <p>Zaten üye misiniz? <a href="uyelik-islemleri">Giriş yapmak için tıklayın</a></p>
            <form action="nedmin/netting/islem.php" method="POST" role="form">
                <div class="payment-wrapper">
                    <div class="payment-column">
                        <div class="payment-input">
                            <h2>FATURA DETAYLARI</h2>
                        </div>
                        <div class="payment-input">
                            <label>Adı Soyadı<span class="required">*</span></label>
                            <input type="text" name="kullanici_adsoyad" value="<?php echo $kullanici->kullanici_adsoyad ?>">
                        </div>
                        <div class="payment-input">
                            <label>Firma Adı (İsteğe Bağlı)</label>
                            <input type="text" name="kullanici_firma" value="<?php echo $kullanici->kullanici_firma ?>">
                        </div>
                        <div class="payment-input">
                            <label>Ülke<span class="required">*</span></label>
                            <input type="text" name="kullanici_ulke" value="Türkiye">
                        </div>
                        <div class="payment-input">
                            <label>İl<span class="required">*</span></label>
                            <input type="text" name="kullanici_il" value="<?php echo $kullanici->kullanici_il ?>">
                        </div>
                        <div class="payment-input">
                            <label>İlçe<span class="required">*</span></label>
                            <input type="text"  name="kullanici_ilce" value="<?php echo $kullanici->kullanici_ilce ?>">
                        </div>
                        <div class="payment-input">
                            <label>Adres<span class="required">*</span></label>
                            <input type="text"  name="kullanici_adres" value="<?php echo $kullanici->kullanici_adres ?>">
                        </div>
                        <div class="payment-input">
                            <label>Telefon<span class="required">*</span></label>
                            <input type="text"  name="kullanici_tel" value="<?php echo $kullanici->kullanici_tel ?>">
                        </div>
                        <div class="payment-input">
                            <label>E Posta Adresi<span class="required">*</span></label>
                            <input type="text"  name="kullanici_email" value="<?php echo $kullanici->kullanici_mail ?>">
                        </div>
                        <label>
                            <input type="checkbox" name="kullanici_checkbox" id="payment-remember-box">
                            Farklı bir adrese gönderilsin mi?
                        </label>
                        <div class="payment-remember">
                            <div class="payment-remember2">
                                <div class="payment-input">
                                    <label>Ülke<span class="required">*</span></label>
                                    <input type="text" name="siparis_ulke" value="Türkiye">
                                </div>
                                <div class="payment-input">
                                    <label>İl<span class="required">*</span></label>
                                    <input type="text" name="siparis_il">
                                </div>
                                <div class="payment-input">
                                    <label>İlçe<span class="required">*</span></label>
                                    <input type="text"  name="siparis_ilce">
                                </div>
                                <div class="payment-input">
                                    <label>Adres<span class="required">*</span></label>
                                    <input type="text"  name="siparis_adres">
                                </div>
                            </div>
                        </div>
                        <div class="payment-input">
                            <label>
                                Siparişinizle ilgili notlar (isteğe bağlı)
                            </label>
                            <textarea id="author" name="author" type="text" value="" size="30"
                                placeholder="Siparişinizle işgili notlar."></textarea>
                        </div>
                    </div>
                    <div class="payment-column2">
                        <h2>Siparişiniz</h2>
                        <table class="payment-table">
                            <thead>
                                <tr>
                                    <th class="product-name">Ürün</th>
                                    <th class="product-subtotal">Ara Toplam</th>
                                </tr>
                            </thead>
                            <tbody class="payment-tbody">
                                <?php
                                    $kullanici_id = $kullanici->kullanici_id;
                                    $sepet=$db->getRows("SELECT * FROM sepet
                                    INNER JOIN urun ON urun.urun_id=sepet.urun_id WHERE kullanici_id=?", array($kullanici_id));
                                    $toplam_fiyat=0;
                                    foreach ($sepet as $sepet) {
                                        
                                        $toplam_fiyat+=($sepet->urun_fiyat * (100 - $sepet->urun_indirim)/100)*$sepet->urun_adet;
                                ?>
                                    <tr class="payment-item">
                                        <td class="product-title"><?php echo $sepet->urun_ad; echo $sepet->urun_stokkodu; ?></td>
                                        <td class="product-subtotal"><?php echo ($sepet->urun_fiyat * (100 - $sepet->urun_indirim)/100)*$sepet->urun_adet; ?>,00 &#8378;</td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                        <div class="payment-subtotal">
                            <p>Ara Toplam</p>
                            <span><?php echo $toplam_fiyat; ?>,00 &#8378;</span>
                        </div>
                        <div class="payment-send">
                            <p>Gönderim</p>
                            <span>Ücretsiz Kargo</span>
                        </div>
                        <div class="payment-total">
                            <p>Toplam</p>
                            <span><?php echo $toplam_fiyat; ?>,00 &#8378; </span>
                            <input type="hidden" name="siparis_toplam" value="<?php echo $toplam_fiyat; ?>">
                            <input type="hidden" name="kullanici_id" value="<?php echo $kullanici->kullanici_id; ?>">
                        </div>
                        <div class="payment-bank">
                            <label>
                                <input type="radio" name="siparis_tip" id="bank-input1" value="Banka havalesi/EFT">
                                <span>Banka havalesi/EFT</span>
                                <p class="active" id="bank-p1">Ödemenizi doğrudan banka hesabımıza yapınız. Lütfen
                                    ilgili Sipariş Numarasını ödemenizin açıklama kısmına yazınız. Ödemeniz
                                    onaylanmadıkça siparişiniz gönderilmeyecektir.</p>
                            </label>
                            <label>
                                <input type="radio" name="siparis_tip" id="bank-input2" value="Kredi Kartı">
                                <span>Kredi kartı ile ödeme</span>
                                <p id="bank-p2">Ödemenizi kredi kartı ile yapabilirsiniz. Siparişiniz hemen işleme alınacaktır.</p>
                            </label>
                        </div>
                        <div class="payment-button">
                            <label>
                                <input type="checkbox" name="siparis_checkbox">
                                <span>Web sitesinin şartlar ve koşullar sayfasını okudum ve kabul ediyorum *</span>
                            </label><br>
                            <button type="submit" name="siparis_onayla" class="btn btn-green btn-lg">Siparişi Onayla</button>
                            <p>Kişisel verileriniz, siparişinizi işlemek, bu web sitesindeki deneyiminizi desteklemek ve aşağıda açıklanan diğer amaçlar için kullanılacaktır. gizlilik ilkesi.</p>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <!--! account end  -->

<script src="js/payment.js"></script>
<?php
    require_once "inc/footer.php";
?>