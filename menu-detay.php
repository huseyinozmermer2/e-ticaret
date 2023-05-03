<?php
    require_once "inc/header.php";

    $menu=$db->getRow("SELECT * FROM menu WHERE menu_seourl=?", array($_GET["sef"]));
?>

   <!--! contact start  -->
   <section class="menu-detay" style="margin: 30px 0;">
        <div class="container">
            <div class="menu-titles">
                <p style="line-height:30px"><?php echo $menu->menu_detay  ?></p>
            </div>
        </div>
    </section>
    <!--! contact end  -->
  <?php
    require_once "inc/footer.php";
?>