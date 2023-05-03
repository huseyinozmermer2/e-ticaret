<?php
    require_once "inc/header.php";
?>

<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Resim Ürün Fotoğraf İşlemleri</h3>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <form action="../netting/islem.php" method="POST" enctype="multipart/form-data">
                            <div class="x_title">
                                <div align="left" class="col-md-6">
                                    <h2>Resim Ürün Fotoğraf İşlemleri
                                        <small>
                                            <?php
                                                echo $say." kayıt listelendi.";
                                                if ($_GET['durum']=='ok') {
                                                    echo '<b style="color:green;">İşlem başarılı...</b>';
                                                } elseif ($_GET['durum']=='no')  {
                                                    echo '<b style="color:red;">İşlem Başarısız...</b>';
                                                }
                                            ?>
                                        </small>
                                    </h2>
                                    <br>
                                </div>
                                <input type="hidden" name="urun_id" value="<?php echo $_GET['urun_id']; ?>">
                                <div align="right" class="col-md-6">
                                    <button type="submit" name="urunfotosil" class="btn btn-danger "><i class="fa fa-trash" aria-hidden="true"></i> Seçilenleri Sil</button>
                                    <a class="btn btn-success" href="urun-foto-yukle.php?urun_id=<?php echo $_GET['urun_id'];?>"><i class="fa fa-plus" aria-hidden="true"></i> Ürün Fotoğraf Yükle</a>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <?php
                                    $sayfada = 25; // sayfada gösterilecek içerik miktarını belirtiyoruz.
                                    $toplam_urunfoto=$db->getColumn("SELECT COUNT(urun_id) FROM urunfoto WHERE urun_id=?", array($_GET['urun_id']));

                                    $toplam_sayfa = ceil($toplam_urunfoto / $sayfada);

                                    // eğer sayfa girilmemişse 1 varsayalım.
                                    $sayfa = isset($_GET['sayfa']) ? (int) $_GET['sayfa'] : 1;

                                    // eğer 1'den küçük bir sayfa sayısı girildiyse 1 yapalım.
                                    if($sayfa < 1) $sayfa = 1; 

                                    // toplam sayfa sayımızdan fazla yazılırsa en son sayfayı varsayalım.
                                    if($sayfa > $toplam_sayfa) $sayfa = $toplam_sayfa; 

                                    $limit = ($sayfa - 1) * $sayfada;

                                    $urunfoto=$db->getRows("SELECT * FROM urunfoto WHERE urun_id=? ORDER BY urunfoto_id DESC LIMIT $limit,$sayfada", array($_GET['urun_id']));
                                        foreach ($urunfoto as $urunfoto) {
                                        $urun=$db->getRow("SELECT * FROM urun WHERE urun_id=?", array($_GET['urun_id']));
                                ?>
                                <div class="col-md-55">
                                    <label>
                                        <div class="image view view-first">
                                            <img style="width: 250px; height: 100px; display: block;"
                                                src="../../img/uploads/<?php echo $urunfoto->urunfoto_resimyol; ?>"
                                                alt="image" />
                                            <div class="mask">
                                                <p>
                                                    <?php 
                                                    echo $urun->urun_ad; 
                                                    echo "<br>";
                                                    echo $urunfoto->urunfoto_id;
                                                    ?>
                                                </p>
                                            </div>
                                        </div>
                                        <?php
                                            if (isset($urunfotosec)) {
                                                array("$urunfotosec");
                                            }
                                        ?>
                                        <input type="checkbox" name="urunfotosec[]"
                                            value="<?php echo $urunfoto->urunfoto_id; ?>"> Seç
                                    </label>
                                </div>
                                <?php } ?>
                                <div align="right" class="col-md-12">
                                    <ul class="pagination">
                                        <?php
                                            $s=0;
                                            while ($s < $toplam_sayfa) {
                                                $s++;
                                                if ($s==$sayfa) {
                                        ?>
                                        <li class="active">
                                            <a href="urunfoto.php?sayfa=<?php echo $s; ?>"><?php echo $s; ?></a>
                                        </li>

                                        <?php } else {?>
                                        <li>
                                            <a href="urunfoto.php?sayfa=<?php echo $s; ?>"><?php echo $s; ?></a>
                                        </li>
                                        <?php   }

                                            }
                                        ?>
                                    </ul>
                                </div>
                            </div>
                        </form>
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