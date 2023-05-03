<?php
    require_once "../production/inc/header.php";
?>

<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Slider Listeleme</h3>
            </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2> Slider Listeleme, 
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
                                      } elseif ($_GET['durum']=="no") {
                                        echo '<b style="color:red;">İşlem Başarısız...</b>';
                                      } elseif ($_GET['durum']=="bos") {
                                        echo '<b style="color:red;">Lütfen bir resim seçiniz?</b>';
                                      } elseif ($_GET['durum']=="deg") {
                                        echo '<b style="color:red;">Üzgünüm.. Bu isimde bir dosya mevcut, ismini değiştirerek tekrar yükleme yapın.....</b>';
                                      } elseif ($_GET['durum']=="boyut") {
                                        echo '<b style="color:red;">Dosya boyutunuz 1000 MB fazla olamaz...</b>';
                                      } elseif ($_GET['durum']=="format") {
                                        echo '<b style="color:red;">Yüklemeye çalıştıığınız dosya bir resim değil. Lütfen sadece resim formatında bir dosya yükleyin..</b>';
                                      }
                                    }
                                ?>
                            </h2>
                            <div align="right">
                              <a href="slider-ekle.php"><button class="btn btn-success btn-xs"> Yeni Ekle</button></a>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                        <br/> 
                        <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                  <th>S.No</th>
                                  <th>Resim</th>
                                  <th>Ad</th>
                                  <th>İçerik</th>
                                  <th>Url</th>
                                  <th>Sıra</th>
                                  <th>Durum</th>
                                  <th></th>
                                  <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $say=0;
                                    $slider=$db->getRows("SELECT * FROM slider order by slider_sira ASC");
                                    foreach ($slider as $slider) { 
                                    $say++   
                                ?>
                                    <tr>
                                        <td width="20"><?php echo $say ?></td>
                                        <td><img src="../../img/uploads/2021/8/<?php echo $slider->slider_resimyol ?>" class="img-fluid" alt="" width="100"></td>
                                        <td><?php echo $slider->slider_ad ?></td>
                                        <td><?php echo $slider->slider_icerik ?></td>
                                        <td><?php echo $slider->slider_link ?></td>
                                        <td><?php echo $slider->slider_sira ?></td>
                                        <td>
                                            <center>
                                                <?php 
                                                    if ($slider->slider_durum==1){
                                                        echo '<a href="../netting/islem.php?slider_id='.$slider->slider_id.'&slider_one=0&slider_durum=ok"><button class="btn btn-success btn-xs">Aktif</button></a>';
                                                    } elseif ($slider->slider_durum==0) {
                                                        echo '<a href="../netting/islem.php?slider_id='.$slider->slider_id.'&slider_one=1&slider_durum=ok"><button class="btn btn-success btn-xs">Pasif</button></a>';
                                                    }
                                                ?>
                                            </center>
                                        </td>
                                        <td>
                                            <center>
                                                <a href="slider-duzenle.php?slider_id=<?php echo $slider->slider_id ?>"><button class="btn btn-primary btn-xs">Düzenle</button></a>
                                            </center>
                                        </td>
                                        <td>
                                            <center>
                                                <a href="../netting/islem.php?slider_id=<?php echo $slider->slider_id ?>&slidersil=ok"><button class="btn btn-danger btn-xs">Sil</button></a>
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