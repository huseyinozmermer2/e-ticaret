<?php
    require_once "inc/header.php";
?>


   <!--production start-->
<section class="Production  text-center">
    <div class="container">       
        <div class="row">
            <?php
                $uretim=$db->getRow("SELECT * FROM uretim");
            ?>
            <div class="col">
                <img src="img/uretim/<?php echo $uretim->uretim_foto ?>" alt="" class="img-fluid mt-lg-5 mb-lg-5" >
                <div class="Production-heading text-uppercase"><?php echo $uretim->uretim_baslik ?></div>
                <div class="Production-sub mb-4"><?php echo $uretim->uretim_icerik ?></div>
                <?php
                    $uretim1=$db->getRows("SELECT * FROM uretim WHERE uretim_id>?", array(1));
                        foreach ($uretim1 as $uretim1) {
                ?>
                <img src="img/uretim/<?php echo $uretim1->uretim_foto ?>" alt="" width="100" height="75" class="mb-5"/>
                <div class="Production-heading1"><?php echo $uretim1->uretim_baslik ?></div>
                <div class="Production-sub mb-4"><?php echo $uretim1->uretim_icerik ?></div>
            </div>
            <?php
                }
            ?>
        </div>
    </div>
</section>
<!--üretim end-->
<?php
    require_once "inc/footer.php";
?>