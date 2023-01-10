<?php
    require_once "header.php";

    $urun=$db->getRow("SELECT * FROM urun WHERE urun_id=?", array($_GET['urun_id']));
?>

<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Ürün Düzenleme</h3>
            </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>
                            <?php 
                                    if (isset($_GET['durum'])) {
                                        if($_GET['durum']=="bos") {
                                ?>
                                            <b style="color:red;">Lütfen boş alan bırakmayın...</b>
                                <?php
                                        }elseif($_GET['durum']=="urunad") {
                                ?>
                                            <b style="color:red;">Ürün adını doğru giriniz...</b>
                                <?php
                                        }elseif($_GET['durum']=="urunkeyword") {
                                ?>
                                            <b style="color:red;">Ürün anahtar kelimeyi doğru giriniz...</b>
                                <?php
                                        }elseif($_GET['durum']=="urunad2") {
                                ?>
                                            <b style="color:red;">Bu ürünü daha önce eklediniz...</b>
                                <?php
                                        }elseif($_GET['durum']=="urunfotoad") {
                                ?>
                                            <b style="color:red;">Üzgünüm.. Bu isimde bir dosya mevcut, ismini değiştirerek tekrar yükleme yapın.....</b>
                                <?php
                                        }elseif($_GET['durum']=="format") {
                                ?>
                                            <b style="color:red;">Yüklemeye çalıştıığınız dosya bir resim değil. Lütfen sadece resim formatında bir dosya yükleyin...</b>
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
                        </div>
                        <div class="x_content">
                        <br />
                        <form action="../netting/islem.php" method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                            <!-- <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Sayfa Linki <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="" id="first-name" name="kullanici_tc" disabled="" value="<php echo $ayarcek['ayar_url'] ?>/sayfa-<php echo seo($menucek['menu_ad']) ?>" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div> -->

                            <!-- Kategori seçme başlangıç -->
                            <div class="form-group">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <center>
                                    <img src="../../img/urunler/<?php echo $urun->urun_foto ?>" class="img-fluid mx-auto d-block" alt="resim" style="height: 150px; width:200px;">
                                    </center>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Kategori Seç<span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <?php  
                                        $urun_id=$urun->kategori_id; 
                                        $kategori=$db->getRows("SELECT * FROM kategori
                                                                   WHERE kategori_ust=?
                                                                   ORDER BY kategori_sira
                                                                ", array(0));
                                    ?>
                                            <select class="select2_multiple form-control" required="" name="kategori_id" >
                                    <?php 
                                            foreach ($kategori as $kategori) {
                                                $kategori_id=$kategori->kategori_id;
                                    ?>
                                                <option <?php if ($kategori_id==$urun_id) { echo "selected='select'"; } ?> value="<?php echo $kategori->kategori_id ?>"><?php echo $kategori->kategori_ad ?></option>
                                    <?php 
                                            } 
                                    ?>
                                            </select>
                                </div>
                            </div>
                            <!-- kategori seçme bitiş -->
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Resim Seç <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="file" id="myFile" name="myFile" placeholder="Resim sçiniz..." class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Ürün Ad <span class="required">*</span></label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="first-name" name="urun_ad" value="<?php echo $urun->urun_ad ?>" class="form-control col-md-7 col-xs-12">
                            </div>
                            </div>
                            <!-- Ck Editör Başlangıç -->
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Ürün Detay <span class="required">*</span></label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <textarea  class="ckeditor" id="editor" name="urun_detay"><?php echo $urun->urun_detay ?></textarea>
                            </div>
                            </div>
                            <script>
                                ClassicEditor
                                        .create( document.querySelector( '#editor' ) )
                                        .then( editor => {
                                                console.log( editor );
                                        } )
                                        .catch( error => {
                                                console.error( error );
                                        } );
                            </script>
                            <!-- Ck Editör Bitiş -->
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Ürün Fiyat <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="first-name" name="urun_fiyat" value="<?php echo $urun->urun_fiyat ?>"  class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Ürün Video <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="first-name" name="urun_video" value="<?php echo $urun->urun_video ?>" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Ürün Keyword <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="first-name" name="urun_keyword" value="<?php echo $urun->urun_keyword ?>" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Ürün Stok <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="first-name" name="urun_stok" value="<?php echo $urun->urun_stok ?>" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Ürün Öne Çıkar<span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <select id="heard" class="form-control" name="urun_onecikar" required>
                                        <option value="1" <?php echo $urun->urun_onecikar == '1' ? 'selected=""' : ''; ?>>Evet</option>
                                        <option value="0" <?php if ($urun->urun_onecikar == 0) { echo 'selected=""'; } ?>>Hayır</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Ürün Durum<span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <select id="heard" class="form-control" name="urun_durum" required>
                                        <option value="1" <?php echo $urun->urun_durum == '1' ? 'selected=""' : ''; ?>>Aktif</option>
                                        <option value="0" <?php if ($urun->urun_durum == 0) { echo 'selected=""'; } ?>>Pasif</option>
                                    </select>
                                </div>
                            </div>
                            <input type="hidden" name="urun_id" value="<?php echo $urun->urun_id ?>"> 
                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                    <button type="submit" name="urunduzenle" class="btn btn-success">Güncelle</button>
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
    require_once "footer.php";
?>