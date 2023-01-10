<?php
    require_once "inc/header.php";

    $hakkimizda=$db->getRow("SELECT * FROM hakkimizda WHERE hakkimizda_id=?", array(1));
?>
    <!--header start-->
    <header class="aboutUs text-white text-center">
        <div class="container">
        </div>
    </header>
    <!--header end-->

   <!--about start-->
<section class="myAbout bg-dark text-center">
    <div class="container">       
        <div class="row">
            <div class="col">
                <div class="myAbout-heading text-uppercase"><?php echo $hakkimizda->hakkimizda_ust ?></div>
                <div class="myAbout-sub"><?php echo $hakkimizda->hakkimizda_usticerik ?></div>
            </div>
            <div class="myAbout-heading text-uppercase"><?php echo $hakkimizda->hakkimizda_alt ?></div>
            <div class="myAbout-head"><?php echo $hakkimizda->hakkimizda_altt ?></div>
            <div class="myAbout-sub"><?php echo $hakkimizda->hakkimizda_alticerik ?></div>
            <div class="myAbout-head"><?php echo $hakkimizda->hakkimizda_alt2 ?></div>
            <div class="myAbout-sub"><?php echo $hakkimizda->hakkimizda_alticerik2 ?></div>
            <div class="myAbout-head"><?php echo $hakkimizda->hakkimizda_alt3 ?></div>
            <div class="myAbout-sub"><?php echo $hakkimizda->hakkimizda_alticerik3 ?></div>
            <div class="myAbout-head"><?php echo $hakkimizda->hakkimizda_alt4 ?></div>
            <div class="myAbout-sub"><?php echo $hakkimizda->hakkimizda_alticerik4 ?></div>
        </div>
    </div>
</section>
<!--about end-->

<?php
    require_once "inc/footer.php";
?>