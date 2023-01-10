<?php
    require_once "inc/header.php";
?>
    <!--header start-->
    <header class="imgheadCover text-white text-center">
        <div class="container">
            <div class="backImage-heading text-uppercase">Üyelik işlemleri</div>
        </div>
    </header>
    <!--header end-->
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <h2>Yeni Üye Olmak İstiyorum</h2>                    
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consectetur ratione quia in dolores illum atque repellendus nobis pariatur.</p>
                    <ul class="content-list">
                        <li>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minus itaque deserunt qui, atque saepe quisquam.</li>
                        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta numquam quod ipsam hic quam itaque praesentium obcaecati saepe autem..</li>
                        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit... </li>
                        <li>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reprehenderit vel odit?</li>
                    </ul>
                    <a href="register.php"><p class="text-center"><button type="submit" class="btn btnLogin ">Üyemiz Olun ></button></p></a>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">                
                <h2>Üyeyim, Giriş Yapmak istiyorum</h2>                
                <form action="nedmin/netting/islem.php" method="POST" role="form">
                    <div class="mb-3">
                      <label for="kullanici_mail" class="form-label">E-posta Adresi</label>
                      <input type="email" class="form-control" id="kullanici_mail" name="kullanici_mail">
                    </div>
                    <div class="mb-3">
                      <label for="kullanici_password" class="form-label">Şifre</label>
                      <input type="password" class="form-control" id="kullanici_password" name="kullanici_password">
                    </div>
                    <button type="submit" name="kullanicigiris" class="btn btnLogin">Giriş Yapın ></button>
                  </form>
            </div>
        </div>
    </div>
</section>

<?php
    require_once "inc/footer.php";
?>