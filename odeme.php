<?php
    require_once "inc/header.php";    
?>
    <!--header start-->
    <header class="imgheadCover text-white text-center">
        <div class="container">
            <div class="backImage-heading text-uppercase">Alışveriş Sepeti</div>
        </div>
    </header>
    <!--header end-->

    <section>
        <div class="container">
            <div class="row">
                <?php if (isset($_SESSION['userkullanici_mail'])){ ?>
                <form action="nedmin/netting/islem.php" method="POST">
                    <div class="col-lg-12 mt-5"> 
                        <table class="table pushtop1">
                            <thead>
                                <tr>
                                    <th class="text-left">Ürün</th>
                                    <th class="text-center">Açıklama</th>
                                    <th class="text-center">Adet</th>
                                    <th class="text-right">Toplam</th>
                                </tr>
                            </thead>
                            <tbody> 
                                <?php 
                                    $kullanici_id=$kullanici->kullanici_id;
                                    $sepet=$db->getRows("SELECT * FROM sepet where kullanici_id=?", array($kullanici_id));
                                    $toplam_fiyat=0;
                                    foreach ($sepet as $sepet) {
                                        $urun_id=$sepet->urun_id;
                                        $urun=$db->getRow("SELECT * FROM urun where urun_id=?", array($urun_id));
                                        
                                        $toplam_fiyat+=$urun->urun_fiyat*$sepet->urun_adet*$sepet->urun_kg;
                                ?>                            
                                <tr>
                                    <td class="text-left">
                                        <a  title="<?php echo $urun->urun_ad ?>">
                                            <img src="img/urunler/baklava_tabak.jpg" width="100" border="0" alt="<?php echo $urun->urun_ad ?>" />
                                        </a>
                                    </td>
                                    <td class="text-center">
                                        <a  title="Fıstıklı Burma Kadayıf" class=" text-decoration-none">
                                            <h2 class="cartText"><?php echo $urun->urun_ad ?></h2>
                                        </a>
                                        <em><?php echo $sepet->urun_kg ?> KG</em>
                                    </td>
                                    <td class="cartQty text-center">
                                        <center>
                                            <input type="text" class="form-control mb-2" value="<?php echo $sepet->urun_adet ?>" style="width:70px;">
                                        </center>
                                    </td>
                                    <td class="text-right text-end" nowrap>
                                        <span> <?php echo $urun->urun_fiyat*$sepet->urun_adet*$sepet->urun_kg ?> TL </span>
                                    </td>
                                </tr>
                                <?php 
                                }
                            ?>
                            </tbody>        
                        </table>
                        <div class="row">                                                                         
                            <div class="col-lg-7 col-md-7 col-sm-6 col-xs-12">
                                <table class="text-end" style="width: 175%;">
                                    <tr>
                                        <th class="float-end"><b>Toplam Tutar (KDV dahil): <td><b><?php echo $toplam_fiyat?>TL</b></td></b></th>
                                        
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="row">                                                                        
                            <div class="col-lg-7 col-md-7 col-sm-6 col-xs-12 pushtop15">
                                <p>Ödeme yapacağınız hesap numarasını seçerek işlemi tamamlayınız.</p>
                                <?php 
                                    $banka=$db->getRows("SELECT * FROM banka order by banka_id ASC");
                                    foreach ($banka as $banka) {
                                ?>
                                        <input type="radio" name="siparis_banka" value="<?php echo $banka->banka_ad?>">
                                <?php
                                        echo $banka->banka_ad; echo " ";
                                ?><br>
                                <?php
                                    }
                                ?>
                                <input type="hidden" name="kullanici_id" value="<?php echo $kullanici->kullanici_id ?>">
                                <input type="hidden" name="siparis_toplam" value="<?php echo $toplam_fiyat ?>">
                                <hr>
                                <button class="btn continue mb-4" type="submit" name="bankasiparisekle">Siparişi bitirin ></button>
                            </div>
                        </div>
                    </div>
                </form>
                <?php }else{
                    echo '<div class="alert alert-dark text-center" role="alert" style="margin-top:3em; margin-bottom:15em; padding:30px 0;">
                    Ödeme İşlemine geçebilmeniz için üye girişi yapmanız gerekiyor. Üye değilseniz kayıt olmalısınız.
                  </div>';
                } ?>
            </div>
        </div>
    </section>
    <?php
    require_once "inc/footer.php";    
?>