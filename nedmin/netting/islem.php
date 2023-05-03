<?php
    ob_start();
    session_start();
    require_once "classes/database.php";
    require_once "classes/control.php";
    require_once "fonksiyon.php";

    $db=new \Database();


    if (isset($_POST['s'])) {
	
		$aranan=$_POST['s'];
		$urunsor=$db->getRows("SELECT * FROM urun where lower(urun_keyword) LIKE ?", array("%$aranan%"));
	
		if (!empty($urunsor)) {
			foreach ($urunsor as $result) { 
				$urun_id=$result->urun_id;
                $urunfoto=$db->getRow("SELECT * FROM urunfoto where urun_id=?", array($urun_id));

                ?> 
					<a href="urun-<?=seo($result->urun_ad).'-'.$result->urun_id?>" class="result-item">
						<img src="img/uploads/<?php echo $urunfoto->urunfoto_resimyol; ?>" class="search-thumb" alt="">
						<div class="search-info">
						<h4><?php echo $result->urun_ad." ".$result->urun_stokkodu; ?></h4>
						<span class="search-sku">Ürün Kodu: <?php echo $result->urun_stokkodu?></span>
						<span class="search-price">&#8378; <?php echo $result->urun_fiyat ?>,00</span>
						</div>
					</a>
		   <?php
		   }
		}else{
		echo "not found";
		}
	}

    if(control("POST") && isset($_POST["genelayarkaydet"])){
        echo $ayar_title = security("ayar_title");
        echo $ayar_description = security("ayar_description");
        $ayar_keywords = security("ayar_keywords");
        $ayar_author = security("ayar_author");
        if (empty($ayar_title) || empty($ayar_description) || empty($ayar_keywords) || empty($ayar_author)) {
            header("Location: ../production/genel-ayar.php?durum=bos");
        }else{
            $ayarupdate=$db->Update("UPDATE ayar SET
                                    ayar_title=?,
                                    ayar_description=?,
                                    ayar_keywords=?,
                                    ayar_author=?
                                    WHERE ayar_id=?
                                    ", array($ayar_title, $ayar_description, $ayar_keywords,$ayar_author, 0));

            if ($ayarupdate) {
                header("Location: ../production/genel-ayar.php?durum=ok");
            }else{
                header("Location: ../production/genel-ayar.php?durum=no");
            }

        }
    }
    if(control("POST") && isset($_POST["iletisimayarkaydet"])){
        $ayar_tel = security("ayar_tel");
        $ayar_gsm = security("ayar_gsm");
        $ayar_faks = security("ayar_faks");
        $ayar_mail = security("ayar_mail");
        $ayar_ilce = security("ayar_ilce");
        $ayar_il = security("ayar_il");
        $ayar_adres = security("ayar_adres");
        $ayar_mesai = security("ayar_mesai");

        if (empty($ayar_tel) || empty($ayar_gsm) || empty($ayar_faks) || empty($ayar_mail) || empty($ayar_ilce) || empty($ayar_il) || empty($ayar_adres) || empty($ayar_mesai)) {
            header("Location: ../production/iletisim-ayar.php?durum=bos");
        }else if (!preg_match("/^[a-zA-ZıİğĞöÖüÜşŞçÇ\s]+$/u", $ayar_il)){
            echo "İlinizi doğru giriniz";
        }else if (!preg_match("/^[a-zA-ZıİğĞöÖüÜşŞçÇ\s]+$/u", $ayar_ilce)){
            echo "İlçenizi doğru giriniz";
        }else if (!filter_var($ayar_mail, FILTER_VALIDATE_EMAIL)) {
            echo "E Posta formatınızın doğruluğunu kontrol edin";
        }else{
            $ayarupdate=$db->Update("UPDATE ayar SET
                                    ayar_tel=?,
                                    ayar_gsm=?,
                                    ayar_faks=?,
                                    ayar_mail=?,
                                    ayar_ilce=?,
                                    ayar_il=?,
                                    ayar_adres=?,
                                    ayar_mesai=?
                                    WHERE ayar_id=?
                                    ", array($ayar_tel, $ayar_gsm, $ayar_faks, $ayar_mail, $ayar_ilce, $ayar_il, $ayar_adres, $ayar_mesai, 0));
            if ($ayarupdate) {
                header("Location: ../production/iletisim-ayar.php?durum=ok");
            }else{
                header("Location: ../production/iletisim-ayar.php?durum=no");
            }
        }
    }
    if(control("POST") && isset($_POST["apiayarkaydet"])){
        $ayar_analystic = security("ayar_analystic");
        $ayar_maps = security("ayar_maps");
        $ayar_zopim = security("ayar_zopim");
        if (empty($ayar_analystic) || empty($ayar_maps) || empty($ayar_zopim)) {
            header("Location: ../production/api-ayar.php?durum=bos");
        }else{
            $ayarupdate=$db->Update("UPDATE ayar SET
                                    ayar_analystic=?,
                                    ayar_maps=?,
                                    ayar_zopim=?
                                    WHERE ayar_id=?
                                    ", array($ayar_analystic, $ayar_maps, $ayar_zopim, 0));

            if ($ayarupdate) {
                header("Location: ../production/api-ayar.php?durum=ok");
            }else{
                header("Location: ../production/api-ayar.php?durum=no");
            }

        }
    }
    if(control("POST") && isset($_POST["sosyalayarkaydet"])){
        $ayar_facebook = security("ayar_facebook");
        $ayar_twitter = security("ayar_twitter");
        $ayar_instagram = security("ayar_instagram");
        $ayar_telegram = security("ayar_telegram");
        if (empty($ayar_facebook) || empty($ayar_twitter) || empty($ayar_instagram) || empty($ayar_telegram)) {
            header("Location: ../production/sosyal-ayar.php?durum=bos");
        }else{
            $ayarupdate=$db->Update("UPDATE ayar SET
                                    ayar_facebook=?,
                                    ayar_twitter=?,
                                    ayar_instagram=?,
                                    ayar_telegram=?
                                    WHERE ayar_id=?
                                    ", array($ayar_facebook, $ayar_twitter, $ayar_instagram, $ayar_telegram, 0));

            if ($ayarupdate) {
                header("Location: ../production/sosyal-ayar.php?durum=ok");
            }else{
                header("Location: ../production/sosyal-ayar.php?durum=no");
            }

        }
    } 
    if(control("POST") && isset($_POST["mailayarkaydet"])){
        $ayar_smtphost = security("ayar_smtphost");
        $ayar_smtpuser = security("ayar_smtpuser");
        $ayar_smtppassword = security("ayar_smtppassword");
        $ayar_smtpport = security("ayar_smtpport");
        if (empty($ayar_smtphost) || empty($ayar_smtpuser) || empty($ayar_smtppassword) || empty($ayar_smtpport)) {
            header("Location: ../production/mail-ayar.php?durum=bos");
        }else{
            $ayarupdate=$db->Update("UPDATE ayar SET
                                    ayar_smtphost=?,
                                    ayar_smtpuser=?,
                                    ayar_smtppassword=?,
                                    ayar_smtpport=?
                                    WHERE ayar_id=?
                                    ", array($ayar_smtphost, $ayar_smtpuser, $ayar_smtppassword, $ayar_smtpport, 0));

            if ($ayarupdate) {
                header("Location: ../production/mail-ayar.php?durum=ok");
            }else{
                header("Location: ../production/mail-ayar.php?durum=no");
            }

        }
    }
    if(control("POST") && isset($_POST["hakkimizdakaydet"])){
        echo $hakkimizda_baslik = security("hakkimizda_baslik"); echo "<br";
        echo $hakkimizda_icerik = security("hakkimizda_icerik"); echo "<br";
        echo $hakkimizda_video = security("hakkimizda_video"); echo "<br";
        echo $hakkimizda_vizyon = security("hakkimizda_vizyon"); echo "<br";
        echo $hakkimizda_misyon = security("hakkimizda_misyon"); echo "<br";
    
        if (empty($hakkimizda_baslik) || empty($hakkimizda_icerik) ) {
            header("Location: ../production/hakkimizda.php?durum=bos");
        }else{
            $hakkimizda_update=$db->Update("UPDATE hakkimizda SET
                                hakkimizda_baslik=?,
                                hakkimizda_icerik=?,
                                hakkimizda_video=?,
                                hakkimizda_vizyon=?,
                                hakkimizda_misyon=?
                                WHERE hakkimizda_id=?", array($hakkimizda_baslik,
                                $hakkimizda_icerik,
                                $hakkimizda_video,
                                $hakkimizda_vizyon,
                                $hakkimizda_misyon, 1));
            if ($hakkimizda_update) {
                header("Location: ../production/hakkimizda.php?durum=ok");
            }else{
                header("Location: ../production/hakkimizda.php?durum=no");
            }
        }
    }
    if(control("POST") && isset($_POST["admingiris"])){
        echo $kullanici_mail = security("kullanici_mail"); echo "<br>";
        echo $kullanici_password = security("kullanici_password"); echo "<br>";

        if (empty($kullanici_mail) || empty($kullanici_password)) {
            header("Location: ../production/login.php?durum=bos");
        }else{
            if (!filter_var($kullanici_mail, FILTER_VALIDATE_EMAIL)) {
                header("Location: ../production/login.php?durum=email");
            }else{
                $kullanici_password=md5(md5(md5(sha1($kullanici_password))));               
                $giris=$db->getRow("SELECT * FROM kullanici
                                    WHERE kullanici_mail=? AND 
                                    kullanici_password=? AND
                                    kullanici_yetki=?",array($kullanici_mail,$kullanici_password,5));
                if ($giris) {
                    //session_regenerate_id — Geçerli oturum kimliğini yenisiyle değiştirir
                    session_regenerate_id(true);
                    $_SESSION["userKullanici_mail"]=$giris->kullanici_mail;
                    header("Location: ../production/index.php");
                }else{
                    header("Location: ../production/login.php?durum=no");
                }
            }
        }
    }
    if(control("POST") && isset($_POST['kullaniciDuzenle'])){
        $kullanici_id=$_POST['kullanici_id'];
        $kullanici_tc = security("kullanici_tc");
        $kullanici_adsoyad = security("kullanici_adsoyad");
        $kullanici_durum = security("kullanici_durum");
        $kullanici_password = security("kullanici_password");
    
        if (empty($kullanici_tc) || empty($kullanici_adsoyad) || empty($kullanici_durum) || empty($kullanici_password)) {
            header("Location: ../production/kullanici-duzenle.php?kullanici_id=$kullanici_id&durum=bos");
        }else{
            if (!preg_match("/^[a-zA-ZıİğĞöÖüÜşŞçÇ\s]+$/u", $kullanici_adsoyad)) {
                header("Location: ../production/kullanici-duzenle.php?kullanici_id=$kullanici_id&durum=adsoyad");
            }else{
                if (!preg_match("/^[0-9]+$/u", $kullanici_tc)) {
                    header("Location: ../production/kullanici-duzenle.php?kullanici_id=$kullanici_id&durum=tc1");
                }else{
                    if (strlen($kullanici_password) < 6) {
                        header("Location: ../production/kullanici-duzenle.php?kullanici_id=$kullanici_id&durum=pass");
                    }else{
                    
                        $kullanici_password=md5(md5(md5(sha1($kullanici_password))));
                        $kullanicikaydet=$db->Update("UPDATE kullanici SET
                                                        kullanici_tc=?,
                                                        kullanici_adsoyad=?,
                                                        kullanici_password=?,
                                                        kullanici_durum=?
                                                        WHERE kullanici_id=?", array($kullanici_tc, $kullanici_adsoyad, $kullanici_password, $kullanici_durum, $kullanici_id)
                                                    );
                        if ($kullanicikaydet) {
                            header("Location: ../production/kullanici.php?durum=ok");
                        }else{
                            header("Location: ../production/kullanici.php?durum=no");
                        }
                    
                    }
                }                          
            }
        }
    }
    if (isset($_GET['kullanicisil'])) {
        if ($_GET['kullanicisil']=="ok") {
            $del=$db->Delete("DELETE FROM kullanici WHERE kullanici_id=?", array($_GET['kullanici_id']));
            if ($del) {
                header("Location: ../production/kullanici.php?sil=ok");
            }else{
                header("Location: ../production/kullanici.php?sil=no");
            }
        }
    }
    if (control("POST") && isset($_POST['menuekle'])) {
        $menu_seourl=seo($_POST['menu_ad']);
        $menu_ad = security("menu_ad");
        $menu_detay = security("menu_detay");
        $menu_url = security("menu_url");
        $menu_sira = security("menu_sira");
        $menu_durum = security("menu_durum");
        if (empty($menu_ad) || empty($menu_sira) || empty($menu_durum)) {
            header("Location: ../production/menu.php?durum=bos");
        }else{
        $insert=$db->Insert("INSERT INTO menu SET
                                menu_ad=?,
                                menu_detay=?,
                                menu_url=?,
                                menu_sira=?,
                                menu_seourl=?,
                                menu_durum=?
                                ", array($menu_ad, $menu_detay, $menu_url, $menu_sira, $menu_seourl, $menu_durum)
                            );
            if ($insert) {
                 header("Location: ../production/menu.php?durum=ok");
            } else {
                 header("Location: ../production/menu.php?durum=no");
            }
        }
    }
    if (control("POST") && isset($_POST['menuduzenle'])) {
        $menu_id=$_POST['menu_id'];
        $menu_seourl=seo($_POST['menu_ad']);
        $menu_ad = security("menu_ad");
        $menu_detay = security("menu_detay");
        $menu_url = security("menu_url");
        $menu_sira = security("menu_sira");
        $menu_durum = security("menu_durum");
        if (empty($menu_ad) || empty($menu_sira) || empty($menu_durum)) {
            header("Location: ../production/menu.php?durum=bos");
        }else{
        $menuupdate=$db->Update("UPDATE menu SET
                                menu_ad=?,
                                menu_detay=?,
                                menu_url=?,
                                menu_sira=?,
                                menu_seourl=?,
                                menu_durum=?
                                WHERE menu_id=?
                                ", array($menu_ad, $menu_detay, $menu_url, $menu_sira, $menu_seourl, $menu_durum,$menu_id)
                            );
            if ($menuupdate) {
                 header("Location: ../production/menu.php?durum=ok");
            } else {
                 header("Location: ../production/menu.php?durum=no");
            }
        }
    }
    if (isset($_GET['menusil'])) {
        if ($_GET['menusil']=="ok") {
            $menusil=$db->Delete("DELETE from menu where menu_id=?", array($_GET['menu_id']));
            if ($menusil) {
                 header("Location: ../production/menu.php?sil=ok");
            } else {
                 header("Location: ../production/menu.php?sil=no");
            }
        }
    }
    if (isset($_GET['menu_durum'])) {
        if ($_GET['menu_durum']=="ok") {
            $menu_id=$_GET['menu_id'];
            $menu_durum=$_GET['menu_one'];
            $update=$db->Update("UPDATE menu SET
                                    menu_durum=?
                                    WHERE menu_id=?
                                ", array($menu_durum, $menu_id));
            if ($update) {
                header("Location: ../production/menu.php?durum=ok");
            } else {
                header("Location: ../production/menu.php?durum=no");
            }
        }
    }
    if (control("POST") && isset($_POST['logoduzenle'])) {
       echo  $eski_yol = security("eski_yol");
       
        if ($_FILES["myFile"]["name"] == "") {
            header("Location: ../production/genel-ayar.php?durum=bos");
        }else if (file_exists($_FILES["myFile"]["name"])) {
            header("Location: ../production/genel-ayar.php?durum=deg");
        }else if ($_FILES["myFile"]["size"]>10000000) {
            header("Location: ../production/genel-ayar.php?durum=boyut");
        }else{
            echo  $look=getimagesize($_FILES["myFile"]["tmp_name"]);
            if ($look===FALSE) {
                header("Location: ../production/genel-ayar.php?durum=format");
            }else{
                $fileName=$_FILES["myFile"]["name"];
                $fileTMP=$_FILES["myFile"]["tmp_name"];
                //pathinfo, Verilen bir path 'ten dosyanın adını ve uzantısı
                //PATHINFO_BASENAME: Verilen path in sonunda bulunan dosya adını ve uzantısını verir.
                $newName=pathinfo($fileName,PATHINFO_BASENAME);
                $myPath="../../img/themes/".$newName;
                                        
                if (move_uploaded_file($fileTMP,$myPath)) {
                    $update=$db->Update("UPDATE ayar SET
                        ayar_logo=?
                        ", array($newName)
                    );
                        if ($update) {
                            header("Location: ../production/genel-ayar.php?durum=ok");
                        } else {
                            header("Location: ../production/genel-ayar.php?durum=no");
                        }
                }
            }
        }	
    
    }
    if (control("POST") && isset($_POST['sliderekle'])) {
        echo  $slider_ad = security("slider_ad");
        echo  $slider_icerik = security("slider_icerik");
        echo  $slider_url = security("slider_url");
        echo  $slider_sira = security("slider_sira");
        echo  $slider_durum = security("slider_durum");
        if (empty($slider_ad) || empty($slider_icerik) || empty($slider_durum)) {
            header("Location: ../production/slider.php?durum=bos");
        }else{
            if ($_FILES["myFile"]["name"] == "") {
                header("Location: ../production/slider.php?durum=bos");
            }else{
                if (file_exists($_FILES["myFile"]["name"])) {
                    header("Location: ../production/slider.php?durum=deg");
                }else{
                    if ($_FILES["myFile"]["size"]>10000000) {
                        header("Location: ../production/slider.php?durum=boyut");
                    }else{
                        $look=getimagesize($_FILES["myFile"]["tmp_name"]);
                        if ($look===FALSE) {
                            header("Location: ../production/slider.php?durum=format");
                        }else{
                            $fileName=$_FILES["myFile"]["name"];
                            $fileTMP=$_FILES["myFile"]["tmp_name"];
                            //pathinfo, Verilen bir path 'ten dosyanın adını ve uzantısı
                            //PATHINFO_BASENAME: Verilen path in sonunda bulunan dosya adını ve uzantısını verir.
                            $newName=pathinfo($fileName,PATHINFO_BASENAME);
                            $myPath="../../img/uploads/2022/10/".$newName;
                                    
                            if (move_uploaded_file($fileTMP,$myPath)) {
                                    $insert=$db->Insert("INSERT INTO slider SET
                                    slider_ad=?,
                                    slider_icerik=?,
                                    slider_link=?,
                                    slider_sira=?,
                                    slider_resimyol=?,
                                    slider_durum=?
                                    ", array($slider_ad, $slider_icerik, $slider_url, $slider_sira, $newName, $slider_durum)
                                );
                                if ($insert) {
                                    header("Location: ../production/slider.php?durum=ok");
                                } else {
                                    header("Location: ../production/slider.php?durum=no");
                                }
                            }
                        }
                    }
                }
            }
        }	
     
    }
    if (control("POST") && isset($_POST['sliderduzenle'])) {
        echo $slider_id = intval($_POST["slider_id"]);
        echo  $slider_ad = security("slider_ad");
        echo  $slider_icerik = security("slider_icerik");
        echo  $slider_url = security("slider_url");
        echo  $slider_sira = security("slider_sira");
        echo  $slider_durum = security("slider_durum");
        if (empty($slider_ad) || empty($slider_icerik) || empty($slider_durum)) {
            header("Location: ../production/slider.php?durum=bos");
        }else{
            if ($_FILES["myFile"]["name"] == "") {
                header("Location: ../production/slider.php?durum=bo");
            }else{
                if (file_exists($_FILES["myFile"]["name"])) {
                    header("Location: ../production/slider.php?durum=deg");
                }else{
                    if ($_FILES["myFile"]["size"]>10000000) {
                        header("Location: ../production/slider.php?durum=boyut");
                    }else{
                        $look=getimagesize($_FILES["myFile"]["tmp_name"]);
                        if ($look===FALSE) {
                            header("Location: ../production/slider.php?durum=format");
                        }else{
                            $fileName=$_FILES["myFile"]["name"];
                            $fileTMP=$_FILES["myFile"]["tmp_name"];
                            //pathinfo, Verilen bir path 'ten dosyanın adını ve uzantısı
                            //PATHINFO_BASENAME: Verilen path in sonunda bulunan dosya adını ve uzantısını verir.
                            $newName=pathinfo($fileName,PATHINFO_BASENAME);
                            $myPath="../../img/uploads/2022/10/".$newName;
                                    
                            if (move_uploaded_file($fileTMP,$myPath)) {
                                    $update=$db->Insert("UPDATE slider SET
                                    slider_ad=?,
                                    slider_icerik=?,
                                    slider_link=?,
                                    slider_sira=?,
                                    slider_resimyol=?,
                                    slider_durum=?
                                    WHERE slider_id=?
                                    ", array($slider_ad, $slider_icerik, $slider_url, $slider_sira, $newName, $slider_durum, $slider_id)
                                );
                                if ($update) {
                                    header("Location: ../production/slider.php?durum=ok");
                                } else {
                                    header("Location: ../production/slider.php?durum=no");
                                }
                            }
                        }
                    }
                }
            }
        }	
     
    }
    if (isset($_GET['slidersil'])) {
        if ($_GET['slidersil']=="ok") {
            $slidersil=$db->Delete("DELETE from slider where slider_id=?", array($_GET['slider_id']));
            if ($slidersil) {
                 header("Location: ../production/slider.php?sil=ok");
            } else {
                 header("Location: ../production/slider.php?sil=no");
            }
        }
    }
    if (isset($_GET['slider_durum'])) {
        if ($_GET['slider_durum']=="ok") {
            $slider_id=$_GET['slider_id'];
            $slider_durum=$_GET['slider_one'];
            $update=$db->Update("UPDATE slider SET
                                    slider_durum=?
                                    WHERE slider_id=?
                                ", array($slider_durum, $slider_id));
            if ($update) {
                header("Location: ../production/slider.php?durum=ok");
            } else {
                header("Location: ../production/slider.php?durum=no");
            }
        }
    }
    if(control("POST") && isset($_POST["kullanicigiris"])){
        echo $kullanici_mail = security("kullanici_mail"); echo "<br>";
        echo $kullanici_password = security("kullanici_password"); echo "<br>";
        echo $beni_hatirla = security("beni_hatirla"); echo "<br>";

        if (empty($kullanici_mail) || empty($kullanici_password)) {
            header("Location: ../../uyelik_islemleri.php?durum=bos");
        }else{
            if (!filter_var($kullanici_mail, FILTER_VALIDATE_EMAIL)) {
                header("Location: ../../uyelik_islemleri.php?durum=email");
            }else{
                $kullanici_password=md5(md5(md5(sha1($kullanici_password))));               
                $giris=$db->getRow("SELECT * FROM kullanici
                                    WHERE kullanici_mail=? AND 
                                    kullanici_password=? AND
                                    kullanici_yetki=?",array($kullanici_mail,$kullanici_password,1));
                if ($giris) {
                    session_regenerate_id(true);
                    $_SESSION["kullanici_mail"]=$giris->kullanici_mail;
                    if ($beni_hatirla == "on") {
                        setcookie("kullanici_mail", $kullanici_mail, strtotime("+1 day"));
                    }
                    
                    header("Location: ../../index.php");
                }else{
                    header("Location: ../../uyelik_islemleri.php?durum=no");
                }
            }
        }
    }
    if(control("POST") && isset($_POST['kullanicikaydet'])){
        echo $kullanici_adsoyad = security("kullanici_adsoyad");
        echo $kullanici_mail = security("kullanici_mail");
        echo $kullanici_tel = security("kullanici_tel");
        echo $kullanici_passwordone = security("kullanici_passwordone");
        echo $kullanici_passwordtwo = security("kullanici_passwordtwo");

            if ($kullanici_passwordone==$kullanici_passwordtwo) {
                if (strlen($kullanici_passwordone)>=6) {
                    $isHave=$db->getColumn("SELECT * FROM kullanici WHERE kullanici_mail=?", array($kullanici_mail));
                    if ($isHave) {
                        header("Location: ../../register.php?durum=mukerrerkayit");
                    }else{
                        //md5 fonksiyonu şifreyi md5 şifreli hale getirir.
                        echo $kullanici_password=md5(md5(md5(sha1($kullanici_passwordone)))); echo "<br>";
                        //Kullanıcı kayıt işlemi yapılıyor...
                        $kullanicikaydet=$db->Insert("INSERT INTO kullanici SET
                                                        kullanici_adsoyad=?,
                                                        kullanici_mail=?,
                                                        kullanici_tel=?,
                                                        kullanici_password=?,
                                                        kullanici_yetki=?", array($kullanici_adsoyad, $kullanici_mail, $kullanici_tel, $kullanici_password, 1)
                                                    );
                        if ($kullanicikaydet) {
                            header("Location: ../../index.php");
                        }else{
                            header("Location: ../../register.php?durum=basarisiz");
                        }
                    }
                }else{
                    header("Location: ../../register.php?durum=eksiksifre");
                }
            }else{
                header("Location: ../../register.php?durum=farklisifre");
            }
    }
    if (control("POST") && isset($_POST['kategoriduzenle'])) {
        $kategori_id=$_POST['kategori_id'];
        $kategori_seourl=seo($_POST['kategori_ad']);
        $kategori_ad = security("kategori_ad");
        $kategori_sira = security("kategori_sira");
        $kategori_durum = security("kategori_durum");
        if (empty($kategori_ad) || empty($kategori_sira) || empty($kategori_durum)) {
            header("Location: ../production/kategori.php?durum=bos");
        }else{
        $kategoriupdate=$db->Update("UPDATE kategori SET
                                kategori_ad=?,
                                kategori_sira=?,
                                kategori_seourl=?,
                                kategori_durum=?
                                WHERE kategori_id=?
                                ", array($kategori_ad, $kategori_sira, $kategori_seourl, $kategori_durum,$kategori_id)
                            );
            if ($kategoriupdate) {
                 header("Location: ../production/kategori.php?durum=ok");
            } else {
                 header("Location: ../production/kategori.php?durum=no");
            }
        }
    }
    if (isset($_GET['kategorisil'])) {
        if ($_GET['kategorisil']=="ok") {
            $kategorisil=$db->Delete("DELETE from kategori where kategori_id=?", array($_GET['kategori_id']));
            if ($kategorisil) {
                 header("Location: ../production/kategori.php?sil=ok");
            } else {
                 header("Location: ../production/kategori.php?sil=no");
            }
        }
    }
    if (isset($_GET['kategori_durum'])) {
        if ($_GET['kategori_durum']=="ok") {
            $kategori_id=$_GET['kategori_id'];
            $kategori_durum=$_GET['kategori_one'];
            $update=$db->Update("UPDATE kategori SET
                                    kategori_durum=?
                                    WHERE kategori_id=?
                                ", array($kategori_durum, $kategori_id));
            if ($update) {
                header("Location: ../production/kategori.php?durum=ok");
            } else {
                header("Location: ../production/kategori.php?durum=no");
            }
        }
    }
    if (control("POST") && isset($_POST['kategoriekle'])) {
        $kategori_seourl=seo($_POST['kategori_ad']);
        $kategori_ad = security("kategori_ad");
        $kategori_sira = security("kategori_sira");
        $kategori_durum = security("kategori_durum");
        if (empty($kategori_ad) || empty($kategori_sira) || empty($kategori_durum)) {
            header("Location: ../production/kategori.php?durum=bos");
        }else{
        $insert=$db->Insert("INSERT INTO kategori SET
                                kategori_ad=?,
                                kategori_sira=?,
                                kategori_seourl=?,
                                kategori_durum=?
                                ", array($kategori_ad, $kategori_sira, $kategori_seourl, $kategori_durum)
                            );
            if ($insert) {
                 header("Location: ../production/kategori.php?durum=ok");
            } else {
                 header("Location: ../production/kategori.php?durum=no");
            }
        }
    }
    if (control("POST") && isset($_POST['urunekle'])) {
        $urun_seourl=seo($_POST['urun_ad']);
        $kategori_id = security("kategori_id");
        $urun_ad = security("urun_ad");
        $urun_detay = security("urun_detay");
        $urun_fiyat = security("urun_fiyat");
        $urun_stokkodu = security("urun_stokkodu");
        $urun_indirim = security("urun_indirim");
        $urun_keyword = security("urun_keyword");
        $urun_stok = security("urun_stok");
        $urun_onecikar = security("urun_onecikar");
        $urun_ozel = security("urun_ozel");
        $urun_yeni = security("urun_yeni");
        $urun_durum = security("urun_durum");
        

        if (empty($kategori_id) or empty($urun_ad) or empty($urun_fiyat) or empty($urun_keyword) or empty($urun_durum) or empty($urun_stok)) {
            header("Location: ../production/urun-ekle.php?durum=bos");
        }else{
            if (!preg_match("/^[a-zA-ZıİğĞöÖüÜşŞçÇ\s]+$/u", $urun_ad)) {
                header("Location: ../production/urun-ekle.php?durum=urunad");
            }else{
                $isHave=$db->getColumn("SELECT urun_id FROM urun
                                            WHERE urun_ad=?", array($urun_ad));
                if ($isHave) {
                    header("Location: ../production/urun-ekle.php?durum=urunad2");
                }else{
                    $uruninsert=$db->Insert("INSERT INTO urun SET
                                            kategori_id=?,
                                            urun_ad=?,
                                            urun_detay=?,
                                            urun_fiyat=?,
                                            urun_stokkodu=?,
                                            urun_indirim=?,
                                            urun_keyword=?,
                                            urun_stok=?,
                                            urun_onecikar=?,
                                            urun_ozel=?,
                                            urun_yeni=?,
                                            urun_durum=?,	
                                            urun_seourl=?",
                                            array($kategori_id, $urun_ad, $urun_detay, $urun_fiyat, $urun_stokkodu, $urun_indirim, $urun_keyword, $urun_stok, $urun_onecikar, $urun_ozel, $urun_yeni, $urun_durum, $urun_seourl));
                    if ($uruninsert) {
                        header("Location: ../production/urun.php?durum=ok");
                    } else {
                        header("Location: ../production/urun.php?durum=no");
                    }
                }
            }
        }
    }
    if (control("POST") && isset($_POST['urunduzenle'])) {
        $urun_id=$_POST['urun_id'];
        $urun_seourl=seo($_POST['urun_ad']);
        $kategori_id = security("kategori_id");
        $urun_ad = security("urun_ad");
        $urun_detay = security("urun_detay");
        $urun_fiyat = security("urun_fiyat");
        $urun_stokkodu = security("urun_stokkodu");
        $urun_indirim = security("urun_indirim");
        $urun_keyword = security("urun_keyword");
        $urun_stok = security("urun_stok");
        $urun_onecikar = security("urun_onecikar");
        $urun_ozel = security("urun_ozel");
        $urun_yeni = security("urun_yeni");
        $urun_durum = security("urun_durum");
        

        if (empty($kategori_id) or empty($urun_ad) or empty($urun_fiyat) or empty($urun_keyword) or empty($urun_durum) or empty($urun_stok)) {
            header("Location: ../production/urun-duzenle.php?urun_id=$urun_id&durum=bos");
        }else{
            if (!preg_match("/^[a-zA-ZıİğĞöÖüÜşŞçÇ\s]+$/u", $urun_ad)) {
                header("Location: ../production/urun-duzenle.php?urun_id=$urun_id&durum=urunad");
            }else{
                $urunupdate=$db->Update("UPDATE urun SET
                                        kategori_id=?,
                                        urun_ad=?,
                                        urun_detay=?,
                                        urun_fiyat=?,
                                        urun_stokkodu=?,
                                        urun_indirim=?,
                                        urun_keyword=?,
                                        urun_stok=?,
                                        urun_onecikar=?,
                                        urun_ozel=?,
                                        urun_yeni=?,
                                        urun_durum=?,	
                                        urun_seourl=?
                                        WHERE urun_id=?",
                                        array($kategori_id, $urun_ad, $urun_detay, $urun_fiyat, $urun_stokkodu, $urun_indirim, $urun_keyword, $urun_stok, $urun_onecikar, $urun_ozel, $urun_yeni, $urun_durum, $urun_seourl, $urun_id));
                if ($urunupdate) {
                    header("Location: ../production/urun.php?durum=ok");
                } else {
                    header("Location: ../production/urun.php?durum=no");
                } 
            }
        }
    }
    if (isset($_GET['urunsil'])) {
        if ($_GET['urunsil']=="ok") {
            $kontrol=$db->Delete("DELETE from urun where urun_id=?", array($_GET['urun_id']));
            if ($kontrol) {
                 header("Location: ../production/urun.php?durum=ok");
            } else {
                 header("Location: ../production/urun.php?durum=no");
            }
        }
    }
    if (isset($_GET['urun_durum'])) {
        if ($_GET['urun_durum']=="ok") {
            $urun_id=$_GET['urun_id'];
            $urun_durum=$_GET['urun_one'];
            $update=$db->Update("UPDATE urun SET
                                    urun_durum=?
                                    WHERE urun_id=?
                                ", array($urun_durum, $urun_id));
            if ($update) {
                header("Location: ../production/urun.php?durum=ok");
            } else {
                header("Location: ../production/urun.php?durum=no");
            }
        }
    }
    if (control("POST") && isset($_POST['sepetEkle'])) {
        echo $urun_adet = security("urun_adet"); echo "<br>";
        echo $kullanici_id = security("kullanici_id"); echo "<br>";
        echo $urun_id = security("urun_id"); echo "<br>";
        echo $product_color = security("product_color"); echo "<br>";
        $isHave=$db->getColumn("SELECT * FROM sepet WHERE urun_id=?", array($urun_id));
        if ($isHave) {
            $insert=$db->Update("UPDATE sepet SET
            urun_adet=?,
            urun_renk=?",
            array($urun_adet, $product_color));
        }else{
            $insert=$db->Insert("INSERT INTO sepet SET
                                        urun_adet=?,
                                        kullanici_id=?,
                                        urun_id=?,	
                                        urun_renk=?",
                                        array($urun_adet, $kullanici_id, $urun_id, $product_color));
           
        }
        if ($insert) {
             header("Location: ../../cart?durum=ok");
        } else {
             header("Location: ../../cart?durum=no");
        }
    }
    if (control("POST") && isset($_POST['sepet_guncelle'])) {
        echo $urun_adet=security('urun_adet'); echo "<br>";
        echo $urun_id = security("urun_id"); echo "<br>";

        $insert=$db->Update("UPDATE sepet SET
                                        urun_adet=?
                                        WHERE urun_id=?",
                                        array($urun_adet, $urun_id));
    
        if ($update) {
            Header("Location:../../cart");
        } else {
            Header("Location:../../cart");
        }
    }
    if (isset($_GET['sepetsil'])) {
        if ($_GET['sepetsil']=="ok") {
            $kontrol=$db->Delete("DELETE from urun where urun_id=?", array($_GET['urun_id']));
            if ($kontrol) {
                 header("Location: ../../cart.php");
            } else {
                 header("Location: ../../cart.php?durum=no");
            }
        }
    }
    if (isset($_GET['yorumsil'])) {
        if ($_GET['yorumsil']=="ok") {
            $kontrol=$db->Delete("DELETE from yorumlar where yorum_id=?", array($_GET['yorum_id']));
            if ($kontrol) {
                 header("Location: ../production/yorum.php?durum=ok");
            } else {
                 header("Location: ../production/yorum.php?durum=no");
            }
        }
    }
    if (isset($_GET['yorum_onay'])) {
        if ($_GET['yorum_onay']=="ok") {
            $yorum_id=$_GET['yorum_id'];
            $yorum_onay=$_GET['yorum_one'];
            $update=$db->Update("UPDATE yorumlar SET
                                    yorum_onay=?
                                    WHERE yorum_id=?
                                ", array($yorum_onay, $yorum_id));
            if ($update) {
                header("Location: ../production/yorum.php?durum=ok");
            } else {
                header("Location: ../production/yorum.php?durum=no");
            }
        }
    }
    if (control("POST") && isset($_POST['bankaDuzenle'])) {
        $banka_id=$_POST['banka_id'];
        $banka_ad = security("banka_ad");
        $banka_siparistipi = security("banka_siparistipi");
        $banka_iban = security("banka_iban");
        $banka_hesapadsoyad = security("banka_hesapadsoyad");
        $banka_durum = security("banka_durum");
        

        if (empty($banka_ad) or empty($banka_siparistipi) or empty($banka_iban) or empty($banka_hesapadsoyad)) {
            header("Location: ../production/banka-duzenle.php?banka_id=$banka_id&durum=bos");
        }else{
            if (!preg_match("/^[a-zA-ZıİğĞöÖüÜşŞçÇ\s]+$/u", $banka_ad)) {
                header("Location: ../production/urun-duzenle.php?banka_id=$banka_id&durum=bankaad");
            }else{
                $bankaupdate=$db->Update("UPDATE banka SET
                                        banka_ad=?,
                                        banka_siparistipi=?,
                                        banka_iban=?,
                                        banka_hesapadsoyad=?,
                                        banka_durum=?
                                        WHERE banka_id=?",
                                        array($banka_ad, $banka_siparistipi, $banka_iban, $banka_hesapadsoyad, $banka_durum, $banka_id));
                if ($bankaupdate) {
                    header("Location: ../production/banka.php?durum=ok");
                } else {
                    header("Location: ../production/banka.php?durum=no");
                } 
            }
        }
    }
    if (isset($_GET['bankasil'])) {
        if ($_GET['bankasil']=="ok") {
            $kontrol=$db->Delete("DELETE from banka where banka_id=?", array($_GET['banka_id']));
            if ($kontrol) {
                 header("Location: ../production/banka.php?durum=ok");
            } else {
                 header("Location: ../production/banka.php?durum=no");
            }
        }
    }
    if (isset($_GET['banka_durum'])) {
        if ($_GET['banka_durum']=="ok") {
            $banka_id=$_GET['banka_id'];
            $banka_durum=$_GET['banka_one'];
            $update=$db->Update("UPDATE banka SET
                                    banka_durum=?
                                    WHERE banka_id=?
                                ", array($banka_durum, $banka_id));
            if ($update) {
                header("Location: ../production/banka.php?durum=ok");
            } else {
                header("Location: ../production/banka.php?durum=no");
            }
        }
    }
    if (control("POST") && isset($_POST['kullaniciGuncelle'])) {
        echo $kullanici_adsoyad=security("kullanici_adsoyad"); echo "<br>";
        echo $kullanici_mail=security("kullanici_mail"); echo "<br>";
        echo $kullanici_tel=security("kullanici_tel"); echo "<br>";
        echo $kullanici_il=security("kullanici_il"); echo "<br>";
        echo $kullanici_ilce=security("kullanici_ilce"); echo "<br>";
        echo $kullanici_adres=security("kullanici_adres"); echo "<br>";
        
            $update=$db->Update("UPDATE kullanici SET
                                        kullanici_adsoyad = ?,  
                                        kullanici_mail = ?,  
                                        kullanici_tel = ?,  
                                        kullanici_il = ?,  
                                        kullanici_ilce = ?,  
                                        kullanici_adres = ?",
                                        array($kullanici_adsoyad, $kullanici_mail, $kullanici_tel,$kullanici_il, $kullanici_ilce, $kullanici_adres));
            if ($update) {
                header("Location: ../../hesabim");
            } else {
                header("Location: ../../hesabim.php?durum=no");
            } 
    }
    if (control("POST") && isset($_POST['kullanicisifreGuncelle'])) {
        echo $kullanici_id = $_POST["kullanici_id"];
        echo $kullanici_eskipassword=security('kullanici_eskipassword'); echo "<br>";
        echo $kullanici_passwordone=security('kullanici_passwordone'); echo "<br>";
        echo $kullanici_passwordtwo=security('kullanici_passwordtwo'); echo "<br>";

        $kullanici_password = md5(md5(md5(sha1($kullanici_eskipassword))));

        $kullanici = $db->getRow("SELECT * FROM kullanici WHERE kullanici_password=?", array($kullanici_password));

        if (!isset($kullanici)) {
            header("Location:../../sifre-guncelle?durum=eskisifrehata");
        }else{
            if ($kullanici_passwordone==$kullanici_passwordtwo) {
                if (strlen($kullanici_passwordone)>=6) {
                    //md5 fonksiyonu şifreyi md5 şifreli hale getirir.
                    $password=md5(md5(md5(sha1($kullanici_passwordone))));

                    $update=$db->Update("UPDATE kullanici SET
                                            kullanici_password=?
                                            WHERE kullanici_id=?",
                                            array($password, $kullanici_id));
                    if ($update) {
                        header("Location:../../sifre-guncelle");
                    } else {
                        header("Location:../../sifre-guncelle.php?durum=no");
                    }
                } else {
                    header("Location:../../sifre-guncelle.php?durum=eksiksifre");
                }
            } else {
                header("Location:../../sifre-guncelle?durum=sifreleruyusmuyor");
                exit;
            }
        }
    }

    if (control("POST") && isset($_POST['siparis_onayla'])) {
        echo $kullanici_id = security("kullanici_id");
        echo $siparis_banka = security("siparis_tip");
        echo $siparis_toplam = security("siparis_toplam");
        echo $siparis_checkbox = security("siparis_checkbox");
        echo $kullanici_checkbox = security("kullanici_checkbox");
        echo $siparis_ulke = security("siparis_ulke");
        echo $siparis_il = security("siparis_il");
        echo $siparis_ilce = security("siparis_ilce");
        echo $siparis_adres = security("siparis_adres");

        if ($siparis_checkbox != "on") {
            header("Location: ../../odeme?durum=onayla");
        }else{
            if ($kullanici_checkbox == "on") {
                $insert=$db->Insert("INSERT INTO siparis SET
                                            kullanici_id=?,
                                            siparis_ulke=?,
                                            siparis_il=?,
                                            siparis_ilce=?,
                                            siparis_adres=?,
                                            siparis_tip=?,
                                            siparis_toplam=?",
                                            array($kullanici_id, $siparis_ulke, $siparis_il, $siparis_ilce, $siparis_adres, $siparis_banka, $siparis_toplam));
            }else{
                $insert=$db->Insert("INSERT INTO siparis SET
                                        kullanici_id=?,	
                                        siparis_tip=?,
                                        siparis_toplam=?",
                                        array($kullanici_id, $siparis_banka, $siparis_toplam));

                if ($insert) {
                    //Sipariş başarılı kaydedilirse...
                    $siparis_id = $db->getRow("SELECT MAX(siparis_id) AS MaksimumValue FROM siparis");
                    echo $son_id=$siparis_id->MaksimumValue;
                    echo "<hr>";
                    echo $kullanici_id=$_POST['kullanici_id'];
                    $sepetsor=$db->getRows("SELECT * FROM sepet where kullanici_id=?", array($kullanici_id));
                    foreach ($sepetsor as $sepet) {
                        $urun_id=$sepet->urun_id; 
                        $urun_adet=$sepet->urun_adet;
            
                        $uruncek=$db->getRow("SELECT * FROM urun where urun_id=?", array($urun_id));
                        echo $urun_fiyat=$uruncek->urun_fiyat * (100 - $uruncek->urun_indirim)/100;
                        $stoksayi = $uruncek->urun_stok;

                        $stokdustu=$stoksayi-$urun_adet;
                        $kaydet=$db->Update("UPDATE urun SET
                                                urun_stok=?
                                                WHERE urun_id=?",
                                                array($stokdustu, $urun_id));
                        $kaydet=$db->Insert("INSERT INTO siparis_detay SET
                                                siparis_id=?,
                                                urun_id=?,	
                                                urun_fiyat=?,
                                                urun_adet=?",
                                                array($son_id, $urun_id, $urun_fiyat, $urun_adet));
                    }
                    if ($insert) {
                        //Sipariş detay kayıtta başarıysa sepeti boşalt
                        $sil=$db->Delete("DELETE from sepet where kullanici_id=?",array($kullanici_id));
                    
                        header("Location: ../../siparislerim?durum=ok");
                        exit;
                    }
                } else {
                    header("Location: ../../siparislerim?durum=no");
                }
            }
        }
    }
    if (control("POST") && isset($_POST['yorumkaydet'])) {
        $gelen_url=$_POST['gelen_url'];
        echo $urun_id=security('urun_id'); echo "<br>";
        echo $kullanici_id=security('kullanici_id'); echo "<br>";
        echo $yorum_email=security('yorum_email'); echo "<br>";
        echo $yorum_ad=security('yorum_ad'); echo "<br>";
        echo $yorum_detay=security('yorum_detay'); echo "<br>";
        echo $cookies=security('cookies'); echo "<br>";
        
        if (isset($_SESSION['kullanici_mail'])){
        $insert=$db->Insert("INSERT INTO yorumlar SET
                        yorum_detay=?,
                        kullanici_id=?,
                        urun_id=?
                        ", array($yorum_detay, $kullanici_id, $urun_id));
        
        }else{

            if ($cookies != "on") {
                $insert=$db->Insert("INSERT INTO yorumlar SET
                                yorum_detay=?,
                                yorum_email=?,
                                yorum_ad=?,
                                urun_id=?
                                ", array($yorum_detay, $yorum_email, $yorum_ad, $urun_id));
            }else{
                $insert=$db->Insert("INSERT INTO yorumlar SET
                                yorum_detay=?,
                                yorum_email=?,
                                yorum_ad=?,
                                urun_id=?
                                ", array($yorum_detay, $yorum_email, $yorum_ad, $urun_id));
                if ($insert) {
                    $kullanici=$db->Insert("INSERT INTO kullanici SET
                        kullanici_mail=?,
                        kullanici_adsoyad=?
                        ", array($yorum_email, $yorum_ad));
                } 
                
            }
        }
            
    
    
        if ($insert) {
    
            Header("Location:$gelen_url?durum=ok");
    
        } else {
    
            Header("Location:$gelen_url?durum=no");
        }
    
    }
    if(isset($_POST['urunfotosil'])) {
        $urun_id=$_POST['urun_id'];    
        echo $checklist = $_POST['urunfotosec'];
    
        foreach($checklist as $list) {
    
            $sil=$db->Delete("DELETE FROM urunfoto where urunfoto_id=?", array($list));
        }
    
        if ($kontrol) {
    
            Header("Location:../production/urun-galeri.php?urun_id=$urun_id&durum=ok");
    
        } else {
    
            Header("Location:../production/urun-galeri.php?urun_id=$urun_id&durum=no");
        }
    
    
    } 
?>