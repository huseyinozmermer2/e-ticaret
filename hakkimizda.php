<?php
    require_once "inc/header.php";

    $hakkimizda = $db->getRow("SELECT * FROM hakkimizda");

?>
<head>
    <title>Hakkımızda Sayfası</title>
</head>
    <section class="abouts">
        <div class="container">
        <div class="abouts-wrapper">
                <div class="about-misyon">
                    <h2>Misyonumuz</h2>
                    <p><?php echo $hakkimizda->hakkimizda_misyon ?></p>
                </div>
                <div class="about-vizyon">
                    <h2>Vizyonumuz</h2>
                    <p><?php echo $hakkimizda->hakkimizda_vizyon ?></p>
                </div>
                <h2>Osmanlı Sanayi</h2>
                <p><?php echo $hakkimizda->hakkimizda_icerik ?></p>
                <div class="about-video">
                    <h2>Tanıtım Videosu</h2>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/<?php echo $hakkimizda->hakkimizda_video ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
            </div>
        </div>

    </section>


<?php
    require_once "inc/footer.php";
?>