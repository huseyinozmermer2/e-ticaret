<?php
    require_once "../production/inc/header.php";
    $slider=$db->getRow("SELECT * FROM slider where slider_id=?", array($_GET['slider_id']));
?>

<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Slider Düzenle</h3>
            </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>
                            Genel Ayarlar <span>,
                                <?php 
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
                        </div>
                        <div class="x_content">
                        <br />
                        <form action="../netting/islem.php" method="POST" enctype="multipart/form-data"  data-parsley-validate class="form-horizontal form-label-left">
                            <!-- <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Sayfa Linki <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="" id="first-name" name="kullanici_tc" disabled="" value="<php echo $ayarcek['ayar_url'] ?>/sayfa-<php echo seo($menucek['menu_ad']) ?>" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div> -->


                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="slider_ad">Slider Ad <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="slider_ad" name="slider_ad" value="<?php echo $slider->slider_ad ?>" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="slider_ad">Slider İçerik <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="slider_ad" name="slider_icerik" value="<?php echo $slider->slider_icerik ?>" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="myFile">Resim Seç<span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="file" id="myFile"  name="myFile" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Slider Url <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="first-name" name="slider_url" value="<?php echo $slider->slider_link ?>"  class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Slider Sıra <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="first-name" name="slider_sira" value="<?php echo $slider->slider_sira ?>" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Slider Durum<span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <select id="heard" class="form-control" name="slider_durum" required>
                                        <option value="1" <?php echo $slider->slider_durum == '1' ? 'selected=""' : ''; ?>>Aktif</option>
                                        <option value="0" <?php if ($slider->slider_durum == 0) { echo 'selected=""'; } ?>>Pasif</option>
                                    </select>
                                </div>
                            </div>
                            <input type="hidden" name="slider_id" value="<?php echo $slider->slider_id ?>"> 
                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                    <button type="submit" name="sliderduzenle" class="btn btn-success">Güncelle</button>
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
    require_once "../production/inc/footer.php";
?>