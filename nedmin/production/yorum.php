<?php
    require_once "inc/header.php";

    //Belirli veriyi seçme işlemi
    $yorumlar=$db->getRows("SELECT * FROM yorumlar
                            INNER JOIN kullanici ON kullanici.kullanici_id=yorumlar.kullanici_id
                            INNER JOIN urun ON yorumlar.urun_id=urun.urun_id
                             order by yorum_id DESC");
?>

<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Yorumların Listeleme</h3>
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
                                    <th>Yorum</th>
                                    <th>Kullanıcı</th>
                                    <th>Ürün</th>
                                    <th>Durum</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $say=0;
                                    foreach ($yorumlar as $yorumlar ) { $say++
                                ?>
                                    <tr>
                                        <td width="20"><?php echo $say ?></td>
                                        <td style="width: 20px !important; overflow: hidden;"><?php echo $yorumlar->yorum_detay ?></td>
                                        <td><?php echo $yorumlar->kullanici_adsoyad ?></td>
                                        <td><?php echo $yorumlar->urun_ad; echo $yorumlar->urun_stokkodu; ?></td>
                                        <td><?php echo $yorumlar->yorum_onay ?></td>
                                        <td>
                                            <center>
                                                <?php 
                                                    if ($yorumlar->yorum_onay==1) {?>
                                                        <a href="../netting/islem.php?yorum_id=<?php echo $yorumlar->yorum_id ?>&yorum_one=0&yorum_onay=ok"><button class="btn btn-success btn-xs">Aktif</button></a>
                                                <?php
                                                    } elseif ($yorumlar->yorum_onay==0) {
                                                ?>
                                                        <a href="../netting/islem.php?yorum_id=<?php echo $yorumlar->yorum_id ?>&yorum_one=1&yorum_onay=ok"><button class="btn btn-warning btn-xs">Pasif</button></a>
                                                <?php
                                                    }
                                                ?>
                                            </center>
                                        </td>
                                        <td>
                                            <center>
                                                <a href="../netting/islem.php?yorum_id=<?php echo $yorumlar->yorum_id ?>&yorumsil=ok"><button class="btn btn-danger btn-xs">Sil</button></a>
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