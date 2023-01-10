<?php
    require_once "header.php";

    $kullanici=$db->getRow("SELECT * FROM kullanici WHERE kullanici_id=?",array($_GET['kullanici_id']));
?>

<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Kullanıcı Düzenle</h3>
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
                                        if ($_GET['durum']=="bos") {
                                ?>
                                            <b style="color:red;">Lütfen boş alan bırakmayın...</b>
                                <?php
                                        }elseif($_GET['durum']=="adsoyad") {
                                ?>
                                            <b style="color:red;">İsminizi ve Soyisminizi doğru giriniz...</b>
                                <?php
                                        }elseif($_GET['durum']=="pass") {
                                ?>
                                            <b style="color:red;">Şİfreniz 6 karakterden büyük olmalıdır...</b>
                                <?php
                                        }elseif($_GET['durum']=="tc1") {
                                ?>
                                            <b style="color:red;">TC numaranız sadece rakamlardan oluşmalıdır...</b>
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
                            <?php 
                                $zaman=explode(" ",$kullanici->kullanici_zaman);
                            ?>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="kullanici_zaman">Kayıt Tarihi <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="" id="kullanici_zaman" name="kullanici_zaman" disabled="" value="<?php echo $zaman[0]; ?>" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="kullanici_zaman">Kayıt Saati <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="time" id="kullanici_zaman" name="kullanici_zaman" disabled="" value="<?php echo $zaman[1]; ?>"  class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="kullanici_tc">Tc <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="kullanici_tc" name="kullanici_tc" value="<?php echo $kullanici->kullanici_tc ?>" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="kullanici_adsoyad">Ad Soyad <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="kullanici_adsoyad" name="kullanici_adsoyad" value="<?php echo $kullanici->kullanici_adsoyad ?>" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="kullanici_password">Şifre <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="kullanici_password" name="kullanici_password" value="<?php echo $kullanici->kullanici_password ?>" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="kullanici_mail">Mail <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="kullanici_mail" name="kullanici_mail"  disabled="" value="<?php echo $kullanici->kullanici_mail ?>" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="kullanici_durum">Kullanıcı Durum<span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <select id="heard" class="form-control" name="kullanici_durum" >
                                        <option value="1" <?php echo $kullanici->kullanici_durum == '1' ? 'selected=""' : ''; ?>>Aktif</option>
                                        <option value="0" <?php if ($kullanici->kullanici_durum==0) { echo 'selected=""'; } ?>>Pasif</option>
                                    </select>
                                </div>
                            </div>
                            <input type="hidden" name="kullanici_id" value="<?php echo $kullanici->kullanici_id ?>"> 

                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                    <button type="submit" name="kullaniciduzenle" class="btn btn-success">Güncelle</button>
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