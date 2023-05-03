<?php
  require_once "inc/header.php";
?>

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Genel Ayarlar</h3>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Genel Ayarlar <span>,
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
                    </span></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form action="../netting/islem.php" method="POST" enctype="multipart/form-data"  data-parsley-validate class="form-horizontal form-label-left">
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Yüklü Logo<br><span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <?php 
                            if (strlen($ayar->ayar_logo)>0) {
                              echo '<img width="200" src="../../img/themes/'.$ayar->ayar_logo.'">';
                            } else {
                              echo '<img width="200" src="../../img/themes/logo-yok.png">';
                            }
                          ?>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Resim Seç<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="file" id="first-name"  name="myFile"  class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <input type="hidden" name="eski_yol" value="<?php echo $ayar->ayar_logo ?>">
                      <div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                        <button type="submit" name="logoduzenle" class="btn btn-primary">Güncelle</button>
                      </div>
                    </form>
                    <form action="netting/islem.php" method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Site Başlığı <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" name="ayar_title" value="<?php echo $ayar->ayar_title ?>" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Site Açıklaması <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" name="ayar_description" value="<?php echo $ayar->ayar_description ?>" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Site Anahtar Kelime <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" name="ayar_keywords" value="<?php echo $ayar->ayar_keywords ?>" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Site Yazar <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" name="ayar_author" value="<?php echo $ayar->ayar_author ?>" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button type="submit" name="genelayarkaydet" class="btn btn-success">Güncelle</button>
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