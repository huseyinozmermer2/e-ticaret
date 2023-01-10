<?php
    require_once "inc/header.php";
?>
    <!--header start-->
    <header class="imgheadCover text-white text-center">
        <div class="container">
            <div class="backImage-heading text-uppercase">ÜYELİK İŞLEMLERİ</div>
        </div>
    </header>
    <!--header end-->

    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pushtop15">				
                        <center>
                                <select class="form-select form-select-sm border border-secondary" style="width:250px; margin-top: 1rem;" onchange="this.options[this.selectedIndex].value != '' ? location = this.options[this.selectedIndex].value : false">
                                    <option value="">Seçiniz</option>
                                    <option value="hesabim">Üyelik Bilgileriniz</option>
                                    <option value="sifre-guncelle">Şifrenizi Değiştirin</option>
                                    <option value="sparislerim">Sparişleriniz</option>
                                    
                            </select>
                            <hr class="border border-dark">
                            <h2>Siparişleriniz</h2>
                            <p>Sitemizde gerçekleşmiş olduğunuz siparişlerinizin detaylarını aşağıda bulabilirsiniz.</p>
                        </center>
                    </div>
                    <form action="" method="post" name="ShopCartForm" Autocomplete="Off">
                        <table class="table pushtop1">
                            <thead>
                                <tr>
                                    <th class="text-left">Sipariş No</th>
                                    <th class="text-center">Tarih</th>
                                    <th class="text-center">Tutar</th>
                                    <th class="text-right">Ödeme Tip</th>
                                    <th class="text-right">Durum</th>
                                    <th class="text-right"></th>
                                </tr>
                            </thead>
                            <tbody> 
                            <?php  
                                $kullanici_id=$kullanici->kullanici_id;
                                $siparis=$db->getRows("SELECT * FROM siparis
                                                        WHERE kullanici_id=?",
                                                        array($kullanici_id));
                                foreach ($siparis as $siparis) {
                            ?>               
                                <tr>
                                    <td><?php echo $siparis->siparis_id ?></td>
                                    <td><?php echo $siparis->siparis_zaman ?></td>
                                    <td><?php echo $siparis->siparis_toplam ?></td>
                                    <td><?php echo $siparis->siparis_tip ?></td>
                                    <td>durum</td>
                                    <td><a href="#" role="button" title="Siparişinizi bitirmek için tıklayınız" class="btn float-end continue">Detay</a></td>
                                </tr>
                            <?php 
                                }
                            ?>
                            </tbody>        
                        </table>
                    </form>                    
                </div>
            </div>
        </div>
    </section>

<?php
    require_once "inc/footer.php";
?>