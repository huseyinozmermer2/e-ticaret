<?php
    require_once "header.php";

    $hakkimizda=$db->getRow("SELECT * FROM hakkimizda");
    
?>

<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Hakkımızda Ayarlar</h3>
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
                        </div>
                        <div class="x_content">
                        <br />
                        <form action="../netting/islem.php" method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="hakkimizda_ust">Üst Başlık <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="hakkimizda_ust" name="hakkimizda_ust" value="<?php echo $hakkimizda->hakkimizda_ust ?>" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="hakkimizda_usticerik">Üst İçerik <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <textarea id="editor" name="hakkimizda_usticerik" class="ckeditor"><?php echo $hakkimizda->hakkimizda_usticerik  ?></textarea>
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
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="hakkimizda_alt">Alt Başlık <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="hakkimizda_alt" name="hakkimizda_alt" value="<?php echo $hakkimizda->hakkimizda_alt  ?>" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="hakkimizda_altt">AltBaşlık<span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="hakkimizda_altt" name="hakkimizda_altt" value="<?php echo $hakkimizda->hakkimizda_altt  ?>" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="hakkimizda_alticerik">Alt İçerik<span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <textarea id="editor2" name="hakkimizda_alticerik" class="ckeditor"><?php echo $hakkimizda->hakkimizda_alticerik  ?></textarea>
                                </div>
                            </div>
                            <script>
                                    ClassicEditor
                                            .create( document.querySelector( '#editor2' ) )
                                            .then( editor => {
                                                    console.log( editor );
                                            } )
                                            .catch( error => {
                                                    console.error( error );
                                            } );
                            </script>              
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="hakkimizda_alt2">AltBaşlık<span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="hakkimizda_alt2" name="hakkimizda_alt2" value="<?php echo $hakkimizda->hakkimizda_alt2  ?>" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="hakkimizda_alticerik2">Alt İçerik<span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <textarea id="editor3" name="hakkimizda_alticerik2" class="ckeditor"><?php echo $hakkimizda->hakkimizda_alticerik2  ?></textarea>
                                </div>
                            </div>
                            <script>
                                    ClassicEditor
                                            .create( document.querySelector( '#editor3' ) )
                                            .then( editor => {
                                                    console.log( editor );
                                            } )
                                            .catch( error => {
                                                    console.error( error );
                                            } );
                            </script>                                         
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="hakkimizda_alt3">AltBaşlık<span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="hakkimizda_alt3" name="hakkimizda_alt3" value="<?php echo $hakkimizda->hakkimizda_alt3  ?>" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="hakkimizda_alticerik3">Alt İçerik<span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <textarea id="editor4" name="hakkimizda_alticerik3" class="ckeditor"><?php echo $hakkimizda->hakkimizda_alticerik3  ?></textarea>
                                </div>
                            </div>
                            <script>
                                    ClassicEditor
                                            .create( document.querySelector( '#editor4' ) )
                                            .then( editor => {
                                                    console.log( editor );
                                            } )
                                            .catch( error => {
                                                    console.error( error );
                                            } );
                            </script>                                         
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="hakkimizda_alt4">AltBaşlık<span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="hakkimizda_alt4" name="hakkimizda_alt4" value="<?php echo $hakkimizda->hakkimizda_alt4  ?>" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="hakkimizda_alticerik4">Alt İçerik<span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <textarea id="editor5" name="hakkimizda_alticerik4" class="ckeditor"><?php echo $hakkimizda->hakkimizda_alticerik4  ?></textarea>
                                </div>
                            </div>
                            <script>
                                    ClassicEditor
                                            .create( document.querySelector( '#editor5' ) )
                                            .then( editor => {
                                                    console.log( editor );
                                            } )
                                            .catch( error => {
                                                    console.error( error );
                                            } );
                            </script>
                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                    <button type="submit" name="hakkimizdakaydet" class="btn btn-success">Güncelle</button>
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