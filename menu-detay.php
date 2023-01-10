<?php
    require_once "inc/header.php";
    
    $menu=$db->getRow("SELECT * FROM menu WHERE menu_seourl=?", array($_GET["sef"]));
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
                <div class="myAbout-heading text-uppercase"><?php echo $menu->menu_ad  ?></div>
                <div class="myAbout-sub"><?php echo $menu->menu_detay  ?></div>
            </div>
        </div>
    </div>
</section>
<!--about end-->

<?php
    require_once "inc/footer.php";
?>