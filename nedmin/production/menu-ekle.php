<?php
    require_once "../production/inc/header.php";
?>

<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Menü Ekle</h3>
            </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>
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


                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="menu_ad">Menü Ad <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="menu_ad" name="menu_ad" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <!-- Ck Editör Başlangıç -->
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="menu_detay">Menü Detay <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <textarea  class="ckeditor" id="editor1" name="menu_detay"></textarea>
                                </div>
                            </div>
                            <script>
                                    ClassicEditor
                                            .create( document.querySelector( '#editor1' ) )
                                            .then( editor => {
                                                    console.log( editor );
                                            } )
                                            .catch( error => {
                                                    console.error( error );
                                            } );
                            </script>
                            <!-- Ck Editör Bitiş -->
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="menu_url">Menü Url <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="menu_url" name="menu_url" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="menu_sira">Menü Sıra <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="menu_sira" name="menu_sira" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="menu_durum">Menü Durum<span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <select id="heard" class="form-control" name="menu_durum" required>
                                        <option value="1">Aktif</option>
                                        <option value="0">Pasif</option>
                                    </select>
                                </div>
                            </div> 
                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                    <button type="submit" name="menuekle" class="btn btn-success">Kaydet</button>
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