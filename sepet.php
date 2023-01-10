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
                <div class="col-lg-12">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pushtop15">				
                        <p>
                            <a href="index" role="button" title="Alışverişe devam etmek için tıklayınız" class="btn continue">< Alışverişe devam</a>
                            <a href="odeme" class="btn float-end continue"> Siparişi bitirin ></a>
                        </p>
                    </div>              
                    <table class="table pushtop1">
                        <thead>
                            <tr>
                                <th class="text-left"></th>
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
                                <td><form><input type="checkbox"></form></td>
                                <td class="text-left">
                                    <a href="#" title="">
                                        <img src="img/urunler/<?php echo $urun->urun_foto ?>" width="100" border="0" alt="<?php echo $urun->urun_ad ?>" />
                                    </a>
                                </td>
                                <td class="text-center">
                                    <a href="#" title="" class=" text-decoration-none">
                                        <h2 class="cartText"><?php echo $urun->urun_ad ?></h2>
                                    </a>
                                    <em><?php echo $sepet->urun_kg ?> KG</em>
                                </td>
                                <form action="nedmin/netting/islem.php" method="POST">
                                    <td class="cartQty">
                                        <center>
                                            <input type="text" class="form-control mb-2" name="urun_adet" value="<?php echo $sepet->urun_adet ?>" style="width:70px;">
                                            <input type="hidden" class="form-control mb-2" name="urun_id" value="<?php echo $urun_id ?>" style="width:70px;">
                                            <button name="urunguncelle" class="border border-0 update text-dark text-decoration-none opacity-75"><i class="fa-solid fa-rotate text-success"></i>Güncelleyin</button>
                                        </center>
                                    </td>
                                </form>
                                    <td class="text-right text-end" nowrap>
                                        <span> <?php echo $urun->urun_fiyat*$sepet->urun_adet*$sepet->urun_kg ?> TL </span>
                                    <p class="mt-lg-2 text-end">
                                        <a href="nedmin/netting/islem.php?sepet_id=<?php echo $sepet->sepet_id ?>&sepeturunsil=ok" class="text-dark text-decoration-none opacity-75 " title="Ürünü sepetinizden silin"><i class="fa-solid fa-trash-can text-danger"></i>Silin</a>
                                    </p>
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
                                    <th class="float-end">Sepet Toplamı: <td><?php echo $toplam_fiyat ?>TL</td></th>
                                </tr>
                                <tr>
                                    <th class="float-end">Kargo Tutarı: <td>Ödemede hesaplanacak</td></th>
                                    
                                </tr>
                                <tr>
                                    <th class="float-end"><b>Toplam Tutar (KDV dahil): <td><b><?php echo $toplam_fiyat?>TL</b></td></b></th>
                                    
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pushtop15">				
                            <p>
                                <a href="index" role="button" title="Alışverişe devam etmek için tıklayınız" class="btn continue">< Alışverişe devam</a>
                                <a href="odeme" role="button" title="Siparişinizi bitirmek için tıklayınız" class="btn float-end continue">Siparişi bitirin ></a>
                            </p>
                        </div>
                    </div>
                </div>
                <?php } else{?>
                    <div class="col-lg-12">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pushtop15">				
                        <p>
                            <a href="index" role="button" title="Alışverişe devam etmek için tıklayınız" class="btn continue">< Alışverişe devam</a>
                            <a href="odeme" class="btn float-end continue"> Siparişi bitirin ></a>
                        </p>
                    </div>              
                    <table class="table pushtop1">
                        <thead>
                            <tr>
                                <th class="text-left"></th>
                                <th class="text-left">Ürün</th>
                                <th class="text-center">Açıklama</th>
                                <th class="text-center">Adet</th>
                                <th class="text-right">Toplam</th>
                            </tr>
                        </thead>
                        <tbody> 
                        <?php 
                            $sepet=$db->getRows("SELECT * FROM sepet");
                            $toplam_fiyat=0;
                            foreach ($sepet as $sepet) {
                                $urun_id=$sepet->urun_id;
                                $urun=$db->getRow("SELECT * FROM urun where urun_id=?", array($urun_id));
                                
                                $toplam_fiyat+=$urun->urun_fiyat*$sepet->urun_adet*$sepet->urun_kg;
                        ?>               
                            <tr>
                                <td><form><input type="checkbox"></form></td>
                                <td class="text-left">
                                    <a href="#" title="">
                                        <img src="img/urunler/<?php echo $urun->urun_foto ?>" width="100" border="0" alt="<?php echo $urun->urun_ad ?>" />
                                    </a>
                                </td>
                                <td class="text-center">
                                    <a href="#" title="" class=" text-decoration-none">
                                        <h2 class="cartText"><?php echo $urun->urun_ad ?></h2>
                                    </a>
                                    <em><?php echo $sepet->urun_kg ?> KG</em>
                                </td>
                                <form action="nedmin/netting/islem.php" method="POST">
                                    <td class="cartQty">
                                        <center>
                                            <input type="text" class="form-control mb-2" name="urun_adet" value="<?php echo $sepet->urun_adet ?>" style="width:70px;">
                                            <input type="hidden" class="form-control mb-2" name="urun_id" value="<?php echo $urun_id ?>" style="width:70px;">
                                            <button name="urunsepetGuncelle" class="border border-0 update text-dark text-decoration-none opacity-75"><i class="fa-solid fa-rotate text-success"></i>Güncelleyin</button>
                                        </center>
                                    </td>
                                </form>
                                    <td class="text-right text-end" nowrap>
                                        <span> <?php echo $urun->urun_fiyat*$sepet->urun_adet*$sepet->urun_kg ?> TL </span>
                                    <p class="mt-lg-2 text-end">
                                        <a href="nedmin/netting/islem.php?sepet_id=<?php echo $sepet->sepet_id ?>&sepeturunsil=ok" class="text-dark text-decoration-none opacity-75 " title="Ürünü sepetinizden silin"><i class="fa-solid fa-trash-can text-danger"></i>Silin</a>
                                    </p>
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
                                    <th class="float-end">Sepet Toplamı: <td><?php echo $toplam_fiyat ?>TL</td></th>
                                </tr>
                                <tr>
                                    <th class="float-end">Kargo Tutarı: <td>Ödemede hesaplanacak</td></th>
                                    
                                </tr>
                                <tr>
                                    <th class="float-end"><b>Toplam Tutar (KDV dahil): <td><b><?php echo $toplam_fiyat?>TL</b></td></b></th>
                                    
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pushtop15">				
                            <p>
                                <a href="index" role="button" title="Alışverişe devam etmek için tıklayınız" class="btn continue">< Alışverişe devam</a>
                                <a href="odeme" role="button" title="Siparişinizi bitirmek için tıklayınız" class="btn float-end continue">Siparişi bitirin ></a>
                            </p>
                        </div>
                    </div>
                </div>
                    <?php } ?>
            </div>
        </div>
    </section>

<?php
    require_once "inc/footer.php";
?>