<?php
  require_once "inc/header.php";
?>

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Mail Ayarlar</h3>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Mail Ayarlar <span>,
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
                    <form action="netting/islem.php" method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                          <div class="form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ayar_smtphost">SMTP Host<span class="required">*</span></label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input type="text" id="ayar_smtphost" name="ayar_smtphost" value="<?php echo $ayar->ayar_smtphost ?>" required="required" class="form-control col-md-7 col-xs-12">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ayar_smtpuser">SMTP User<span class="required">*</span></label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input type="text" id="ayar_smtpuser" name="ayar_smtpuser" value="<?php echo $ayar->ayar_smtpuser ?>" required="required" class="form-control col-md-7 col-xs-12">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ayar_smtppassword">SMTP Password<span class="required">*</span></label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input type="text" id="ayar_smtppassword" name="ayar_smtppassword" value="<?php echo $ayar->ayar_smtppassword ?>" required="required" class="form-control col-md-7 col-xs-12">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ayar_smtpport">SMTP Port<span class="required">*</span></label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input type="text" id="ayar_smtpport" name="ayar_smtpport" value="<?php echo $ayar->ayar_smtpport ?>" required="required" class="form-control col-md-7 col-xs-12">
                              </div>
                          </div>
                          
                          <div class="ln_solid"></div>
                          <div class="form-group">
                              <div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                  <button type="submit" name="mailayarkaydet" class="btn btn-success">Güncelle</button>
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