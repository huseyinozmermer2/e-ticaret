<?php
  require_once "inc/header.php";

  $hakkimizda = $db->getRow("SELECT * FROM hakkimizda");
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
                    <h2>Hakkımızda Ayarlar <span>,
                    <?php 
                      if (isset($_GET['durum'])) {
                        if ($_GET['durum']=="ok") {
                          echo '<b style="color:green;">İşlem Başarılı...</b>';
                        } elseif ($_GET['durum']=="no") {
                          echo '<b style="color:red;">İşlem Başarısız...</b>';
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
                    <form action="../netting/islem.php" method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Başlık <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" name="hakkimizda_baslik" value="<?php echo $hakkimizda->hakkimizda_baslik ?>" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <!-- Ck Editör Başlangıç -->
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">İçerik <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea id="editor1" name="hakkimizda_icerik" class="ckeditor"><?php echo $hakkimizda->hakkimizda_icerik  ?></textarea>
                        </div>
                      </div>
                      <script type="text/javascript">
                          ClassicEditor
                              .create( document.querySelector( '#editor1' ) )
                              .then( editor => {
                                      console.log( editor );
                              } )
                              .catch( error => {
                                      console.error( error );
                          });
                      </script>
                      <!-- Ck Editör Bitiş -->

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Video <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" name="hakkimizda_video" value="<?php echo $hakkimizda->hakkimizda_video ?>" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Vizyon <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" name="hakkimizda_vizyon" value="<?php echo $hakkimizda->hakkimizda_vizyon ?>" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Misyon <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" name="hakkimizda_misyon" value="<?php echo $hakkimizda->hakkimizda_misyon ?>" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
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
  require_once "inc/footer.php";
?>