<?php
    require_once "header.php";

    //Belirli veriyi seçme işlemi
    $urun=$db->getRows("SELECT * FROM urun order by urun_id DESC");
?>

<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Ürün Listeleme</h3>
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
                                ?>
                                            <b style="color:green;">İşlem Başarılı...</b>

                                <?php
                                        }elseif($_GET['sil']=="no") {
                                ?>
                                            <b style="color:red;">İşlem Başarısız...</b>

                                <?php
                                        }
                                    }
                                ?>
                                <?php 
                                    if (isset($_GET['durum'])) {
                                        if ($_GET['durum']=="ok") {
                                ?>
                                            <b style="color:green;">İşlem Başarılı...</b>
                                <?php
                                        }elseif($_GET['durum']=="no") {
                                ?>
                                            <b style="color:red;">İşlem Başarısız...</b>
                                <?php
                                        }
                                    }
                                ?>
                            </h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li>
                                    <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li>
                                            <a href="#">Settings 1</a>
                                        </li>
                                        <li>
                                            <a href="#">Settings 2</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="close-link"><i class="fa fa-close"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                            <div align="right">
                                <a href="urun-ekle.php"><button class="btn btn-success btn-xs"> Yeni Ekle</button></a>
                            </div>
                        </div>
                        <div class="x_content">
                        <br/> 
                        <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>S.No</th>
                                    <th>Ürün Resim</th>
                                    <th>Ürün Ad</th>
                                    <th>Ürün Stok</th>
                                    <th>Ürün Fiyat</th>
                                    <th>Durum</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $say=0;
                                    foreach ($urun as $urun ) { $say++
                                ?>
                                    <tr>
                                        <td width="20"><?php echo $say ?></td>
                                        <td><img src="../../img/urunler/<?php echo $urun->urun_foto ?>" alt="" width="100"></td>
                                        <td><?php echo $urun->urun_ad ?></td>
                                        <td><?php echo $urun->urun_stok ?></td>
                                        <td><?php echo $urun->urun_fiyat ?></td>
                                        <td>
                                            <center>
                                                <?php 
                                                    if ($urun->urun_durum==1) {?>
                                                        <a href="../netting/islem.php?urun_id=<?php echo $urun->urun_id ?>&urun_one=0&urun_durum=ok"><button class="btn btn-success btn-xs">Aktif</button></a>
                                                <?php
                                                    } elseif ($urun->urun_durum==0) {
                                                ?>
                                                        <a href="../netting/islem.php?urun_id=<?php echo $urun->urun_id ?>&urun_one=1&urun_durum=ok"><button class="btn btn-warning btn-xs">Pasif</button></a>
                                                <?php
                                                    }
                                                ?>
                                            </center>
                                        </td>
                                        <td>
                                            <center>
                                                <a href="urun-duzenle.php?urun_id=<?php echo $urun->urun_id ?>"><button class="btn btn-primary btn-xs">Düzenle</button></a>
                                            </center>
                                        </td>
                                        <td>
                                            <center>
                                                <a href="../netting/islem.php?urun_id=<?php echo $urun->urun_id ?>&urunsil=ok"><button class="btn btn-danger btn-xs">Sil</button></a>
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
    require_once "footer.php";
?>