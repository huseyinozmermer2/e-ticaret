<?php
    require_once "inc/header.php";
?>

    <!--! cart start  -->
    <section class="order-page">
        <div class="container">
            <div class="order-page-wrapper">
                <div class="order-form">
                    <table class="shop-table">
                        <thead>
                            <th>&nbsp;</th>
                            <th>Sipariş No</th>
                            <th>Sipariş Tarihi</th>
                            <th>Sipariş Tutarı</th>
                            <th>Ödeme Tipi</th>
                            <th>Banka</th>
                            <th>Durum</th>
                        </thead>
                        <tbody class="order-wrapper">
                            <?php 
                                $siparislerim = $db->getRows("SELECT * FROM siparis
                                                                 INNER JOIN kullanici ON
                                                                 kullanici.kullanici_id=siparis.kullanici_id");
                                foreach ($siparislerim as $siparislerim) {
                            ?>
                            <tr class="order-item">
                                <td></td>
                                <td><?php echo $siparislerim->siparis_id ?></td>
                                <td><?php $zaman = explode(" ", $siparislerim->siparis_zaman);
                                            echo  $zaman[0]; ?></td>
                                <td><?php echo $siparislerim->siparis_toplam ?>,00 &#8378; </td>
                                <td><?php echo $siparislerim->siparis_tip ?></td>
                                <td><?php echo $siparislerim->siparis_banka ?></td>
                                <td>Durum</td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <!--! order end  -->

<?php
    require_once "inc/footer.php";
?>