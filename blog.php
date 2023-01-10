<?php 
require_once "inc/header.php";
?>

   <!--Blog start-->
<section class="myBlog  text-center">
    <div class="container">       
        <div class="row">
            <div class="col-sm-12 col-lg-9">
                <?php
                    $blog=$db->getRow("SELECT * FROM blog");
                ?>
                <img src="img/blog/<?php echo $blog->BlogImage ?>" alt="" class="img-fluid mt-lg-5">
                <ul class="d-flex me-lg-auto ms-lg-5 mt-lg-2 text-muted" style="list-style-type:none;">
                <li ><strong><?php echo $blog-> BlogTarih ?></strong> | <strong><?php echo $blog->BlogBaslik ?></strong></li>
                </ul>
                <div class="myBlog-heading text-uppercase"><?php echo $blog->BlogUst ?></div>
                <div class="myBlog-sub"><?php echo $blog->BlogAlticerik ?></div>
                <div class="myBlog-sub"><?php echo $blog->BlogAlticerik2 ?></div>
                <div class="myBlog-sub"><?php echo $blog->BlogAlticerik3 ?></div>
                <div class="myBlog-sub"><?php echo $blog->BlogAlticerik4 ?></div>
                <div class="myBlog-sub"><?php echo $blog->BlogAlticerik5 ?></div>
                <div class="myBlog-sub"><?php echo $blog->BlogAlticerik6 ?></div>

            </div>
            <div class="col-sm-12 col-lg-3" id="blogCard">
                <div class="card">
                    <div class="card-body align-content-lg-start">
                        <ul style="padding-left: 0; list-style-type:none; text-align:left;">
                            <li><h5 class="card-title ms-0">KATEGORİLER</h5></li>
                            <li><h6 class="card-subtitle mb-2 text-muted">Baklava Hakkında</h6></li>
                            <li><h6 class="card-subtitle mb-2 text-muted">Ustadan Tavsiyeler</h6></li>
                            <li><h6 class="card-subtitle mb-2 text-muted">Kargo</h6></li>
                            <li><h6 class="card-subtitle mb-2 text-muted">Haberler</h6></li>
                        </ul>
                    </div>
                  </div>
            </div>
        </div>
    </div>
</section>
<!--Blog end-->

<?php  require_once "inc/footer.php"; ?>