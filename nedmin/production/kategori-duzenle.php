<?php
    require_once "../production/inc/header.php";
    $kategori=$db->getRow("SELECT * FROM kategori where kategori_id=?", array($_GET['kategori_id']));
?>

<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Kategori Düzenle</h3>
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
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="kategori_ad">Kategori Ad <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="kategori_ad" name="kategori_ad" value="<?php echo $kategori->kategori_ad ?>" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Kategori Sıra <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="first-name" name="kategori_sira" value="<?php echo $kategori->kategori_sira ?>" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Kategori Durum<span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <select id="heard" class="form-control" name="kategori_durum" required>
                                        <option value="1" <?php echo $kategori->kategori_durum == '1' ? 'selected=""' : ''; ?>>Aktif</option>
                                        <option value="0" <?php if ($kategori->kategori_durum == 0) { echo 'selected=""'; } ?>>Pasif</option>
                                    </select>
                                </div>
                            </div>
                            <input type="hidden" name="kategori_id" value="<?php echo $kategori->kategori_id ?>"> 
                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                    <button type="submit" name="kategoriduzenle" class="btn btn-success">Güncelle</button>
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