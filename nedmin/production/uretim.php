<?php
    require_once "header.php";
?>

<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Üretim Ayarları</h3>
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
                                        }elseif($_GET['durum']=="bos") {
                                ?>
                                            <b style="color:red;">Lütfen boş alan bırakmayınız...</b>

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
                                <a href="uretim-ekle.php"><button class="btn btn-success btn-xs"> Yeni Ekle</button></a>
                            </div>
                        </div>
                        <div class="x_content">
                        <br/> 
                        <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Ürün Resmi</th>
                                    <th>Ürün Başlık</th>
                                    <th>Ürün İçerik</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $uretim = $db->getRows("SELECT * FROM uretim"); 
                                        foreach ($uretim as $uretim) {
                                ?>
                                            <tr id="<?= $uretim->uretim_id ?>">
                                                <th scope="row"><?= $uretim->uretim_id ?></th>
                                                <td><img class="img-fluid" src="../../img/uretim/<?= $uretim->uretim_foto ?>" alt="<?= $uretim->uretim_ad ?>" width="100" height="75" class="mb-2"/></td>
                                                <td><?= $uretim->uretim_baslik ?></td>
                                                <td>
                                                    <center>
                                                        <a href="uretim-duzenle.php?uretim_id=<?php echo $uretim->uretim_id ?>"><button class="btn btn-primary btn-xs">Düzenle</button></a>
                                                    </center>
                                                </td>
                                                <td>
                                                    <center>
                                                        <a href="../netting/islem.php?uretim_id=<?php echo $uretim->uretim_id ?>&uretimsil=ok&uretim_foto=<?php echo $uretim->uretim_foto ?>"><button class="btn btn-danger btn-xs">Sil</button></a>
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