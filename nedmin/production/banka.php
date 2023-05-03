<?php
    require_once "inc/header.php";

    //Belirli veriyi seçme işlemi
    $banka=$db->getRows("SELECT * FROM banka order by banka_id DESC");
?>

<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Banka Listeleme</h3>
            </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>
                                <?php 
                                    if (isset($_GET['sil'])) {
                                        if ($_GET['sil']=="ok") {
                                            echo '<b style="color:green;">İşlem Başarılı...</b>';
                                        }elseif($_GET['sil']=="no") {
                                            echo '<b style="color:red;">İşlem Başarısız...</b>';
                                        }
                                    }

                                    if (isset($_GET['durum'])) {
                                        if ($_GET['durum']=="ok") {
                                            echo '<b style="color:green;">İşlem Başarılı...</b>';
                                        }elseif($_GET['durum']=="no") {
                                            echo '<b style="color:red;">İşlem Başarısız...</b>';
                                        }
                                    }
                                ?>
                            </h2>
                            <div class="clearfix"></div>
                            
                        </div>
                        <div class="x_content">
                        <br/> 
                        <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>S.No</th>
                                    <th>Banka Sipraiş Tipi</th>
                                    <th>Banka Adı</th>
                                    <th>Banka IBAN</th>
                                    <th>Banka Hesap Ad Soyad</th>
                                    <th>Banka Durum</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $say=0;
                                    foreach ($banka as $banka ) { $say++
                                ?>
                                    <tr>
                                        <td width="20"><?php echo $say ?></td>
                                        <td><?php echo $banka->banka_siparistipi ?></td>
                                        <td><?php echo $banka->banka_ad ?></td>
                                        <td><?php echo $banka->banka_iban ?></td>
                                        <td><?php echo $banka->banka_hesapadsoyad ?></td>
                                        <td>
                                            <center>
                                                <?php 
                                                    if ($banka->banka_durum==1) {?>
                                                        <a href="../netting/islem.php?banka_id=<?php echo $banka->banka_id ?>&banka_one=0&banka_durum=ok"><button class="btn btn-success btn-xs">Aktif</button></a>
                                                <?php
                                                    } elseif ($banka->banka_durum==0) {
                                                ?>
                                                        <a href="../netting/islem.php?banka_id=<?php echo $banka->banka_id ?>&banka_one=1&banka_durum=ok"><button class="btn btn-warning btn-xs">Pasif</button></a>
                                                <?php
                                                    }
                                                ?>
                                            </center>
                                        </td>
                                        <td>
                                            <center>
                                                <a href="banka-duzenle.php?banka_id=<?php echo $banka->banka_id ?>"><button class="btn btn-primary btn-xs">Düzenle</button></a>
                                            </center>
                                        </td>
                                        <td>
                                            <center>
                                                <a href="../netting/islem.php?banka_id=<?php echo $banka->banka_id ?>&bankasil=ok"><button class="btn btn-danger btn-xs">Sil</button></a>
                                            </center>
                                        </td>
                                    </tr>
                                <?php
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /page content -->

<?php
    require_once "inc/footer.php";
?>