<?php
    require_once "inc/header.php";
    if (isset($_GET['sef'])) {
		$kategori=$db->getRow("SELECT * FROM kategori where kategori_seourl=?", array($_GET['sef']));

		$kategori_id=$kategori->kategori_id;

		$urun=$db->getRows("SELECT * FROM urun where kategori_id=? order by urun_id DESC",array($kategori_id));

	} else {

		$urun=$db->getRows("SELECT * FROM urun order by urun_id DESC");

	}
?>


    <!--header start-->
    <header class="homepage text-white text-center">
        <div class="container">
            <div class="homepage-heading text-uppercase">BAKLAVA GAZİANTEP'TİR. HOŞ GELDİNİZ!</div>
            <div class="homepage-sub mb-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sunt quasi pariatur sint asperiores ipsam adipisci. Pariatur minima corporis sit dolores dignissimos ea, ratione nam. Consequatur accusamus aliquid cupiditate nesciunt nemo!</div>               
                <ul class="nav justify-content-center text-decoration-underline">
                    <?php
						$kategori=$db->getRows("SELECT * FROM kategori order by kategori_sira ASC");
                            foreach ($kategori as $kategori) {
				    ?>
								<li class="nav-item"><a class="nav-link" href='kategori-<?php echo seo($kategori->kategori_ad) ?>'><?php echo $kategori->kategori_ad ?></a></li>
					<?php 
							}
					?>
                   
                </ul>
        </div>
    </header>
    <!--header end-->
    
    <?php
            if (empty($urun)) {
    ?>
    <section class="bg-black">
        <div class="container">

            <br><br><br><br>
            <div class="text-white">
                <center>
                    <?php
                            echo "Bu kategoride ürün bulunamadı";
                    ?>
                </center>
            </div>
            <br><br><br><br><br><br><br><br><br><br><br><br>
        </div>
    </section>
    <?php
            }
        ?>
    

   <!--product start-->
    <section id="product" class="bg-black">
        <div class="container">       
            <div class="row">
                <?php
                    foreach ($urun as $urun) {
                ?>
                    <div class="col-sm-6 col-lg-4">
                        <div class="p-item">
                            <a href="urun-<?php echo seo($urun->urun_ad).'-'.$urun->urun_id ?>" class="p-link">
                                <div class="p-hover">
                                    <div class="ph-content text-white">
                                        <button type="button" class="btn btn-primary">Sepete Ekle <i class="bi bi-cart4 me-1"></i></button>
                                    </div>
                                </div>
                                <img class="img-fluid" src="img/urunler/<?php echo $urun->urun_foto ?>" alt="<?php echo $urun->urun_ad ?>" />
                            </a>
                            <div class="p-caption text-center bg-white p-4">
                                <div class="pc-heading "><?php echo $urun->urun_ad ?></div>
                                <div class="pc-subheading text-muted fst-italic">1 KG    <?php echo $urun->urun_fiyat ?> TL</div>
                            </div>
                        </div>
                    </div>
                <?php
                    }
                ?>
            </div>
        </div>
    </section>
    <!--product end-->

<section class="product2 bg-dark text-white">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                        <h2>Antep Baklavaları</h2>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aspernatur eum saepe praesentium, atque tempore provident nisi illo ex cumque doloribus maiores eos adipisci rerum cum quia sed, maxime voluptatem laudantium. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Atque mollitia voluptate iure, nostrum vero exercitationem repellendus corrupti dolorum voluptas perspiciatis, velit culpa ullam! Dolorum consequuntur neque omnis quae rem debitis. Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit voluptates iste vel reprehenderit doloribus pariatur sequi non modi. Labore consectetur placeat nam doloremque omnis voluptatum ad repellat debitis itaque doloribus! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iste delectus reprehenderit totam consequuntur ipsum, cum repudiandae asperiores eos mollitia incidunt. Illum delectus consectetur corrupti maiores impedit nesciunt? Reiciendis, fuga vero. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Excepturi explicabo suscipit magni, asperiores perspiciatis eum. Nam, maxime, fuga maiores vitae iusto ipsum ex accusamus dicta excepturi odio repellendus, harum quos! Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil officiis nobis quisquam incidunt dicta cupiditate, nemo ducimus libero vel, tempora ea nisi quaerat quae in, eligendi illum voluptate reiciendis esse!</p>
            </div>
        </div>
    </div>
</section>

<?php
    require_once "inc/footer.php";
?>