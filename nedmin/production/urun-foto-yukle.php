<?php
    require_once "inc/header.php";
?>

<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Çoklu resim yükleme işlemleri</h3>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Çoklu resim yükleme işlemleri</h2>
                        <div align="right" class="col-md-9">
                            <a class="btn btn-success" href="urun-galeri.php?urun_id=<?php echo $_GET['urun_id'];?>"><i
                                    class="fa fa-plus" aria-hidden="true"></i> Yüklenen Resimleri Gör</a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <div class="x_content">
                            <p>Yüklenecek resimlerin bulunduğu klasöre giderek tamamını tek seferde seçerek yükleyebilirsiniz.</p>
                            <form action="../netting/urungaleri.php" class="dropzone">
                                <input type="hidden" name="urun_id" value="<?php echo $_GET['urun_id'];  ?>">
                            </form>
                        </div>
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