<?php
    require_once "inc/header.php";
?>

    <!--! contact start  -->
    <section class="contact">
        <div class="contact-top">
            <div class="contact-map">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3014.5074956676144!2d29.130024714911606!3d40.926543432400244!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cac6a5ccb39d85%3A0x129db6a2f682da3b!2sOsmanl%C4%B1%20Sanayi%20%C3%9Cr%C3%BCnleri%20Pazarlama%20Tic.%20Ltd.%20%C5%9Eti.!5e0!3m2!1str!2str!4v1676889367107!5m2!1str!2str"
                    width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
        <div class="contact-bottom">
            <div class="container">
                <div class="contact-titles">
                    <h2>BİZİMLE İLETİŞİME GEÇ</h2>
                    <p>Daha Kaliteli Bir Hizmet İçin Bizimle İletişime Geç !</p>
                </div>
                <div class="contact-elements">
                    <form class="contact-form">
                        <div class="">
                            <label>
                                Adınız
                                <span>*</span>
                            </label>
                            <input type="text" required>
                        </div>
                        <div class="">
                            <label>
                                Soyadınız
                                <span>*</span>
                            </label>
                            <input type="text" required>
                        </div>
                        <div class="">
                            <label>
                                E-posta adresiniz
                                <span>*</span>
                            </label>
                            <input type="email" required>
                        </div>
                        <div class="">
                            <label>
                                Konu
                                <span>*</span>
                            </label>
                            <input type="text" required>
                        </div>
                        <div class="">
                            <label>
                                İletiniz (tercihe bağlı)
                            </label>
                            <textarea id="author" name="author" type="text" value="" size="30" required=""></textarea>
                        </div><br>
                        <button class="btn btn-sm btn-black">Gönder</button>
                    </form>
                    <div class="contact-info">
                        <div class="contact-info-item">
                            <div class="contact-info-texts">
                                <strong> Osmanlı Sanayi Ürünleri Pazarlama</strong>
                                <p class="contact-street">
                                    Atatürk Caddesi Küçük Papatya Çıkmazı Sokak No:5-A Maltepe-İstanbul</p>
                                <div>Telefon: <a href="tel: 0 216 371 61 42"> 0 216 371 61 42</a> /
                                    <a href="tel: 0 216 441 27 02">0 216 441 27 02</a></div>
                                <div>Email: <a href="mailto:Email: info@osmanlisanayi.com">info@osmanlisanayi.com</a>
                                </div>
                            </div>
                        </div>
                        <div class="contact-info-item">
                            <div class="contact-info-texts">
                                <strong> Açık olduğu saatler</strong>
                                <p class="contact-date">
                                    Pazartesi - Cumaertesi : 09:00 – 18:00</p>
                                <p>Pazar günü kapalı</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--! contact end  -->

<?php
    require_once "inc/footer.php";
?>