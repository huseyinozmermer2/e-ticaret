<?php 
    require_once "inc/header.php";
?>

    <!--! cart start  -->
    <section class="cart-page">
        <div class="container">
            <div class="cart-page-wrapper">
            <?php if (isset($_SESSION['kullanici_mail'])){ ?>
                <div class="cart-form">
                    <div class="free-progress-bar">
                        <p class="progress-bar-title">
                            Sepete <strong>$161.00</strong> ekleyin ve ücretsiz gönderim kazanın!
                        </p>
                        <div class="progress-bar">
                            <span class="progress"></span>
                        </div>
                    </div>
                    <div class="shop-table-wrapper">
                        <table class="shop-table">
                            <thead>
                                <th class="product-thumbnail">&nbsp;</th>
                                <th class="product-thumbnail">&nbsp;</th>
                                <th class="product-name">Ürünler</th>
                                <th class="product-price">Fiyat</th>
                                <th class="product-quantity">Adet</th>
                                <th class="product-subtotal">Ara Toplam</th>
                            </thead>
                            <tbody class="cart-wrapper">
                                <?php 
                                    
                                    $kullanici_id=$kullanici->kullanici_id;
                                    $sepet=$db->getRows("SELECT * FROM sepet
                                        INNER JOIN urun ON urun.urun_id=sepet.urun_id where kullanici_id=?", array(@$kullanici_id));
                                    $toplam_fiyat=0;
                                    foreach ($sepet as $sepet) {
                                        
                                        $toplam_fiyat+=($sepet->urun_fiyat * (100 - $sepet->urun_indirim)/100)*$sepet->urun_adet;
                                ?> 
                                <tr class="cart-item">
                                    <td></td>
                                    <td class="cart-image">
                                        <img src="img/uploads/2022/12/margeratad100gri-430x430.jpg" alt="">
                                        <i class="bi bi-x"></i>
                                    </td>
                                    <td><?php echo $sepet->urun_ad." ".$sepet->urun_stokkodu; ?></td>
                                    <td>
                                        <?php 
                                            echo ($sepet->urun_fiyat * (100 - $sepet->urun_indirim)/100)
                                        ?>,00 &#8378;
                                    </td>
                                    <td class="product-quantity">
                                        <form action="nedmin/netting/islem.php" method="POST" class="cart-form">
                                            <input type="number" name="urun_adet" min="1" value="<?php echo $sepet->urun_adet; ?>">
                                            <input type="hidden" name="urun_id" min="1" value="<?php echo $sepet->urun_id; ?>"><br>
                                            <button type="submit" name="sepet_guncelle">Güncelle</button>
                                        </form>
                                    </td>
                                    <td class="product-subtotal">
                                        <?php 
                                            echo ($sepet->urun_fiyat * (100 - $sepet->urun_indirim)/100)*$sepet->urun_adet;
                                        ?>,00 &#8378;</td>
                                </tr>
                                <input type="hidden" name="urun_id" value="<?php echo $sepet->urun_id; ?>">
                                <?php } ?>
                            </tbody>
                        </table>
                        <!-- <div class="actions-wrapper">
                            <div class="coupon">
                                <input type="text" class="input-text" placeholder="Coupon code">
                                <button class="btn btn-green">Kuponu Onayla</button>
                            </div>
                            <div class="update-cart">
                                <button type="submit" name="sepet_guncelle" class="btn btn-green">Sepeti Güncelle</button>
                            </div>
                        </div> -->
                    </div>
                </div>
                <div class="cart-collaterals">
                    <div class="cart-totals">
                        <h2> Sepet Toplamları</h2>
                        <table>
                            <tbody>
                                <tr class="cart-subtotal">
                                    <th>Ara Toplam</th>
                                    <td>
                                        <span id="subtotal"><?php echo $toplam_fiyat; ?>,00 &#8378;</span>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Kargo Ücreti</th>
                                    <td>
                                        <ul>
                                            <li>
                                                <label>
                                                    Ücretsiz Kargo
                                                    <!-- <input type="checkbox" id="fast-cargo"> -->
                                                </label>
                                            </li>
                                            <li>
                                                <a href="#">Adres Değiştir</a>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Toplam Tutar</th>
                                    <td>
                                        <strong id="cart-total"><?php echo $toplam_fiyat; ?>,00 &#8378;</strong>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="checkout">
                            <a href="odeme" class="btn btn-lg btn-green">Alışverişi Bitir</a>
                        </div>
                    </div>
                </div>
                <?php } else {
                    header("Location: index.php");
                }
                ?>
            </div>
        </div>
    </section>
    <!--! cart end  -->

<?php
    require_once "inc/footer.php";
?>