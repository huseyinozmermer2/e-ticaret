<?php
    require_once "../production/inc/header.php";
?>

<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Kategori Listeleme</h3>
            </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2> Kategori Ayarlar <span>,
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
                                        }elseif($_GET['durum']=="bos") {
                                            echo '<b style="color:red;">Lütfen boş alan bırakmayınız...</b>';
                                        }
                                    }
                                ?>
                                </span>
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
                                <a href="kategori-ekle.php"><button class="btn btn-success btn-xs"> Yeni Ekle</button></a>
                            </div>
                        </div>
                        <div class="x_content">
                        <br/> 
                        <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>S.No</th>
                                    <th>Kategori Ad</th>
                                    <th>Kategori Url</th>
                                    <th>Kategori Sira</th>
                                    <th>Kategori Durum</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $say=0;
                                    $kategori=$db->getRows("SELECT * FROM kategori order by kategori_sira ASC");
                                    foreach ($kategori as $kategori) { 
                                    $say++   
                                ?>
                                    <tr>
                                        <td width="20"><?php echo $say ?></td>
                                        <td><?php echo $kategori->kategori_ad ?></td>
                                        <td><?php echo $kategori->kategori_seourl ?></td>
                                        <td><?php echo $kategori->kategori_sira ?></td>
                                        <td>
                                            <center>
                                                <?php 
                                                    if ($kategori->kategori_durum==1){
                                                        echo '<a href="../netting/islem.php?kategori_id='.$kategori->kategori_id.'&kategori_one=0&kategori_durum=ok"><button class="btn btn-success btn-xs">Aktif</button></a>';
                                                    } elseif ($kategori->kategori_durum==0) {
                                                        echo '<a href="../netting/islem.php?kategori_id='.$kategori->kategori_id.'&kategori_one=1&kategori_durum=ok"><button class="btn btn-success btn-xs">Pasif</button></a>';
                                                    }
                                                ?>
                                            </center>
                                        </td>
                                        <td>
                                            <center>
                                                <a href="kategori-duzenle.php?kategori_id=<?php echo $kategori->kategori_id ?>"><button class="btn btn-primary btn-xs">Düzenle</button></a>
                                            </center>
                                        </td>
                                        <td>
                                            <center>
                                                <a href="../netting/islem.php?kategori_id=<?php echo $kategori->kategori_id ?>&kategorisil=ok"><button class="btn btn-danger btn-xs">Sil</button></a>
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
    require_once "../production/inc/footer.php";
?>