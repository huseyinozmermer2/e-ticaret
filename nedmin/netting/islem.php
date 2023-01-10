<?php
 ob_start();
 session_start();
    require_once "../classes/database.php";
    require_once "../classes/control.php";
    require_once "../production/fonksiyon.php";

    $db=new \Database();

    if(control("POST") && isset($_POST["genelayarkaydet"])){
        $ayar_title = security("ayar_title");
        $ayar_description = security("ayar_description");
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
        $ayar_youtube = security("ayar_youtube");
        $ayar_google = security("ayar_google");
        if (empty($ayar_facebook) || empty($ayar_twitter) || empty($ayar_youtube) || empty($ayar_google)) {
            header("Location: ../production/sosyal-ayar.php?durum=bos");
        }else{
            $ayarupdate=$db->Update("UPDATE ayar SET
                                    ayar_facebook=?,
                                    ayar_twitter=?,
                                    ayar_youtube=?,
                                    ayar_google=?
                                    WHERE ayar_id=?
                                    ", array($ayar_facebook, $ayar_twitter, $ayar_youtube, $ayar_google, 0));

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
        $hakkimizda_ust = security("hakkimizda_ust");
        $hakkimizda_usticerik = security("hakkimizda_usticerik");
        $hakkimizda_alt = security("hakkimizda_alt");
        $hakkimizda_altt = security("hakkimizda_altt");
        $hakkimizda_alticerik = security("hakkimizda_alticerik");
        $hakkimizda_alt2 = security("hakkimizda_alt2");
        $hakkimizda_alticerik2 = security("hakkimizda_alticerik2");
        $hakkimizda_alt3 = security("hakkimizda_alt3");
        $hakkimizda_alticerik3 = security("hakkimizda_alticerik3");
        $hakkimizda_alt4 = security("hakkimizda_alt4");
        $hakkimizda_alticerik4 = security("hakkimizda_alticerik4");
    
        if (empty($hakkimizda_ust) || empty($hakkimizda_usticerik) ) {
            header("Location: ../production/hakkimizda.php?durum=bos");
        }else{
            $hakkimizda_update=$db->Update("UPDATE hakkimizda SET
                                hakkimizda_ust=?,
                                hakkimizda_usticerik=?,
                                hakkimizda_alt=?,
                                hakkimizda_altt=?,
                                hakkimizda_alticerik=?,
                                hakkimizda_alt2=?,
                                hakkimizda_alticerik2=?,
                                hakkimizda_alt3=?,
                                hakkimizda_alticerik3=?,
                                hakkimizda_alt4=?,
                                hakkimizda_alticerik4=?
                                WHERE hakkimizda_id=?", array($hakkimizda_ust, $hakkimizda_usticerik, $hakkimizda_alt, $hakkimizda_altt, $hakkimizda_alticerik,$hakkimizda_alt2, $hakkimizda_alticerik2, $hakkimizda_alt3, $hakkimizda_alticerik3, $hakkimizda_alt4, $hakkimizda_alticerik4, 1));
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
                    $_SESSION["kullanici_mail"]=$giris->kullanici_mail;
                    header("Location: ../production/index.php");
                }else{
                    header("Location: ../production/login.php?durum=no");
                }
            }
        }
    }
    if(control("POST") && isset($_POST['kullaniciduzenle'])){
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
        $menu_kategori = security("menu_kategori");
        if (empty($menu_ad) || empty($menu_sira) || empty($menu_durum)) {
            header("Location: ../production/menu.php?durum=bos");
        }else{
        $insert=$db->Insert("INSERT INTO menu SET
                                menu_ad=?,
                                menu_detay=?,
                                menu_url=?,
                                menu_sira=?,
                                menu_seourl=?,
                                menu_durum=?,
                                menu_kategori=?
                                ", array($menu_ad, $menu_detay, $menu_url, $menu_sira, $menu_seourl, $menu_durum, $menu_kategori)
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
    if (control("POST") && isset($_POST['blogekle'])) {
        $BlogTarih = security("BlogTarih");
        $BlogBaslik = security("BlogBaslik");
        $BlogUst = security("BlogUst");
        $BlogAlticerik = security("BlogAlticerik");
        $BlogAlticerik2 = security("BlogAlticerik2");
        $BlogAlticerik3 = security("BlogAlticerik3");
        $BlogAlticerik4 = security("BlogAlticerik4");
        $BlogAlticerik5 = security("BlogAlticerik5");
        $BlogAlticerik6 = security("BlogAlticerik6");
        
        if (empty($BlogTarih)  || empty($BlogBaslik) || empty($BlogUst) || empty($BlogAlticerik)) {
            header("Location: ../production/blog.php?durum=bos");
        }else{
            if ($_FILES["myFile"]["name"] == "") {
                header("Location: ../production/blog.php?durum=bos");
            }else{
                if (file_exists($_FILES["myFile"]["name"])) {
                    header("Location: ../production/blog.php?durum=deg");
                }else{
                    if ($_FILES["myFile"]["size"]>10000000) {
                        header("Location: ../production/blog.php?durum=boyut");
                    }else{
                        $look=getimagesize($_FILES["myFile"]["tmp_name"]);
                        if ($look===FALSE) {
                            header("Location: ../production/blog.php?durum=format");
                        }else{
                            $fileName=$_FILES["myFile"]["name"];
                            $fileTMP=$_FILES["myFile"]["tmp_name"];
                            $newName=pathinfo($fileName,PATHINFO_BASENAME);
                            $myPath="../../img/blog/".$newName;
                                    
                            if (move_uploaded_file($fileTMP,$myPath)) {
                                $insert=$db->Insert("INSERT INTO blog SET
                                                        BlogTarih=?,
                                                        BlogBaslik=?,
                                                        BlogUst=?,
                                                        BlogAlticerik=?,
                                                        BlogAlticerik2=?,
                                                        BlogAlticerik3=?,
                                                        BlogAlticerik4=?,
                                                        BlogAlticerik5=?,
                                                        BlogAlticerik6=?,
                                                        BlogImage=?
                                                        ", array($BlogTarih, $BlogBaslik, $BlogUst, $BlogAlticerik, $BlogAlticerik2, $BlogAlticerik3, $BlogAlticerik4, $BlogAlticerik5, $BlogAlticerik6, $newName)
                                                    );
                                    if ($insert) {
                                        header("Location: ../production/blog.php?durum=ok");
                                    } else {
                                        header("Location: ../production/blog.php?durum=no");
                                    }
                            }
                        }
                    }
                }
            }
        }
    }
    if (control("POST") && isset($_POST['blogduzenle'])) {
        $blog_id=intval($_POST['blog_id']);
        $BlogTarih = security("BlogTarih");
        $BlogBaslik = security("BlogBaslik");
        $BlogUst = security("BlogUst");
        $BlogAlticerik = security("BlogAlticerik");
        $BlogAlticerik2 = security("BlogAlticerik2");
        $BlogAlticerik3 = security("BlogAlticerik3");
        $BlogAlticerik4 = security("BlogAlticerik4");
        $BlogAlticerik5 = security("BlogAlticerik5");
        $BlogAlticerik6 = security("BlogAlticerik6");
        
        if (empty($BlogTarih)  || empty($BlogBaslik) || empty($BlogUst) || empty($BlogAlticerik)) {
            header("Location: ../production/blog.php?durum=bos");
        }else{
            if ($_FILES["myFile"]["name"] == "") {
                header("Location: ../production/blog.php?durum=bos");
            }else{
                if (file_exists($_FILES["myFile"]["name"])) {
                    header("Location: ../production/blog.php?durum=deg");
                }else{
                    if ($_FILES["myFile"]["size"]>10000000) {
                        header("Location: ../production/blog.php?durum=boyut");
                    }else{
                        $look=getimagesize($_FILES["myFile"]["tmp_name"]);
                        if ($look===FALSE) {
                            header("Location: ../production/blog.php?durum=format");
                        }else{
                            $fileName=$_FILES["myFile"]["name"];
                            $fileTMP=$_FILES["myFile"]["tmp_name"];
                            //pathinfo, Verilen bir path 'ten dosyanın adını ve uzantısı
                            //PATHINFO_BASENAME: Verilen path in sonunda bulunan dosya adını ve uzantısını verir.
                            $newName=pathinfo($fileName,PATHINFO_BASENAME);
                            $myPath="../../img/blog/".$newName;
                                    
                            if (move_uploaded_file($fileTMP,$myPath)) {
                                $update=$db->Update("UPDATE blog SET
                                                        BlogTarih=?,
                                                        BlogBaslik=?,
                                                        BlogUst=?,
                                                        BlogAlticerik=?,
                                                        BlogAlticerik2=?,
                                                        BlogAlticerik3=?,
                                                        BlogAlticerik4=?,
                                                        BlogAlticerik5=?,
                                                        BlogAlticerik6=?,
                                                        BlogImage=?
                                                        WHERE BlogID=?
                                                        ", array($BlogTarih, $BlogBaslik, $BlogUst, $BlogAlticerik, $BlogAlticerik2, $BlogAlticerik3, $BlogAlticerik4, $BlogAlticerik5, $BlogAlticerik6, $newName, $blog_id)
                                                    );
                                    if ($update) {
                                        header("Location: ../production/blog.php?durum=ok");
                                    } else {
                                        header("Location: ../production/blog.php?durum=no");
                                    }
                            }
                        }
                    }
                }
            }
        }
    }
    if (isset($_GET['blogsil'])) {
        if ($_GET['blogsil']=="ok") {
            $blogsil=$db->Delete("DELETE from blog where BlogID=?", array($_GET['blog_id']));
            if ($blogsil) {
                 header("Location: ../production/blog.php?sil=ok");
            } else {
                 header("Location: ../production/blog.php?sil=no");
            }
        }
    }
    if (control("POST") && isset($_POST['uretimekle'])) {
        $uretim_baslik = security("uretim_baslik");
        $uretim_icerik = security("uretim_icerik");
        $uretim_ad = security("uretim_ad");
        
        if (empty($uretim_baslik)  || empty($uretim_icerik)) {
            header("Location: ../production/uretim-ekle.php?durum=bos");
        }else{
            if ($_FILES["myFile"]["name"] == "") {
                header("Location: ../production/uretim-ekle.php?durum=fotobos");
            }else{
                $look=getimagesize($_FILES["myFile"]["tmp_name"]);
                if ($look===FALSE) {
                    header("Location: ../production/uretim-ekle.php?durum=format");
                }else{
                    $fileName=$_FILES["myFile"]["name"];
                    $fileTMP=$_FILES["myFile"]["tmp_name"];
                    $newName=pathinfo($fileName,PATHINFO_BASENAME);
                    $myPath="../../img/uretim/".$newName;
                            
                    if (move_uploaded_file($fileTMP,$myPath)) {
                        $insert=$db->Insert("INSERT INTO uretim SET
                                                uretim_baslik=?,
                                                uretim_icerik=?,
                                                uretim_ad=?,
                                                uretim_foto=?", array($uretim_baslik, $uretim_icerik, $uretim_ad, $newName)
                                            );
                            if ($insert) {
                                header("Location: ../production/uretim.php?durum=ok");
                            } else {
                                header("Location: ../production/uretim.php?durum=no");
                            }
                    }
                }
            }
        }
    }
    if (control("POST") && isset($_POST['uretimduzenle'])) {
        $uretim_id=intval($_POST['uretim_id']);
        $uretim_baslik = security("uretim_baslik");
        $uretim_icerik = security("uretim_icerik");
        $uretim_ad = security("uretim_ad");
        
        if (empty($uretim_baslik)  || empty($uretim_icerik)) {
            header("Location: ../production/uretim.php?durum=bos");
        }else{
            if ($_FILES["myFile"]["name"] == "") {
                $update=$db->Update("UPDATE uretim SET
                                        uretim_baslik=?,
                                        uretim_icerik=?,
                                        uretim_ad=?
                                        WHERE uretim_id=?
                                        ", array($uretim_baslik, $uretim_icerik, $uretim_ad, $uretim_id)
                                    );
                    if ($update) {
                        header("Location: ../production/uretim.php?durum=ok");
                    } else {
                        header("Location: ../production/uretim.php?durum=no");
                    }
            }else{
                if (file_exists($_FILES["myFile"]["name"])) {
                    header("Location: ../production/uretim.php?durum=deg");
                }else{
                    if ($_FILES["myFile"]["size"]>10000000) {
                        header("Location: ../production/uretim.php?durum=boyut");
                    }else{
                        $look=getimagesize($_FILES["myFile"]["tmp_name"]);
                        if ($look===FALSE) {
                            header("Location: ../production/uretim.php?durum=format");
                        }else{
                            $fileName=$_FILES["myFile"]["name"];
                            $fileTMP=$_FILES["myFile"]["tmp_name"];
                            $newName=pathinfo($fileName,PATHINFO_BASENAME);
                            $myPath="../../img/uretim/".$newName;
                                    
                            if (move_uploaded_file($fileTMP,$myPath)) {
                                $update=$db->Update("UPDATE uretim SET
                                                        uretim_baslik=?,
                                                        uretim_icerik=?,
                                                        uretim_ad=?,
                                                        uretim_foto=?
                                                        WHERE uretim_id=?
                                                        ", array($uretim_baslik, $uretim_icerik, $uretim_ad, $newName, $uretim_id)
                                                    );
                                    if ($update) {
                                        header("Location: ../production/uretim.php?durum=ok");
                                    } else {
                                        header("Location: ../production/uretim.php?durum=no");
                                    }
                            }
                        }
                    }
                }
            }
        }
    }
    if (isset($_GET['uretimsil'])) {
        if ($_GET['uretimsil']=="ok") {
            $uretimsil=$db->Delete("DELETE from uretim where uretim_id=?", array($_GET['uretim_id']));
            if ($uretimsil) {
                 header("Location: ../production/uretim.php?sil=ok");
            } else {
                 header("Location: ../production/uretim.php?sil=no");
            }
        }
    }
    if(control("POST") && isset($_POST["kullanicigiris"])){
        echo $kullanici_mail = security("kullanici_mail"); echo "<br>";
        echo $kullanici_password = security("kullanici_password"); echo "<br>";
        
        echo $kullanici_password=md5(md5(md5(sha1($kullanici_password)))); echo "<br>";

        $giris=$db->getRow("SELECT * FROM kullanici
                            WHERE kullanici_mail=? AND 
                            kullanici_password=? AND
                            kullanici_yetki=?",array($kullanici_mail,$kullanici_password,1));
        if ($giris) {
            //session_regenerate_id — Geçerli oturum kimliğini yenisiyle değiştirir
            session_regenerate_id(true);
            $_SESSION["userkullanici_mail"] = $giris->kullanici_mail;
            header("Location: ../../index.php");
        }else{
            header("Location: ../../uyelik_islemleri.php?durum=no");
        }
    }
    if(control("POST") && isset($_POST['kullanicikaydet'])){
        echo $kullanici_adsoyad = security("kullanici_adsoyad");
        echo $kullanici_mail = security("kullanici_mail");
        echo $kullanici_passwordone = security("kullanici_passwordone");
        echo $kullanici_passwordtwo = security("kullanici_passwordtwo");

            if ($kullanici_passwordone==$kullanici_passwordtwo) {
                if (strlen($kullanici_passwordone)>=6) {
                    $isHave=$db->getColumn("SELECT * FROM kullanici WHERE kullanici_mail=?", array($kullanici_mail));
                    if ($isHave) {
                        header("Location: ../../register.php?durum=mukerrerkayit");
                    }else{
                        //md5 fonksiyonu şifreyi md5 şifreli hale getirir.
                        $password=md5($kullanici_passwordone);
                        //Kullanıcı kayıt işlemi yapılıyor...
                        $kullanicikaydet=$db->Insert("INSERT INTO kullanici SET
                                                        kullanici_adsoyad=?,
                                                        kullanici_mail=?,
                                                        kullanici_password=?,
                                                        kullanici_yetki=?", array($kullanici_adsoyad, $kullanici_mail, $password, 1)
                                                    );
                        if ($kullanicikaydet) {
                            header("Location: ../../index.php?durum=loginbasarili");
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
        $kategori_durum = security("kategori_durum");
        $kategori_sira = security("kategori_sira");

        $kategoriupdate=$db->Update("UPDATE kategori SET
                                kategori_ad=?,
                                kategori_durum=?,	
                                kategori_seourl=?,
                                kategori_sira=?
                                WHERE kategori_id=?
                            ", array($kategori_ad, $kategori_durum, $kategori_seourl, $kategori_sira, $kategori_id));
        if ($kategoriupdate) {
            header("Location: ../production/kategori.php?durum=ok");
        } else {
            header("Location: ../production/kategori.php?durum=no");
        }
    }
    if (control("POST") && isset($_POST['kategoriekle'])) {
        $kategori_seourl=seo($_POST['kategori_ad']);
        $kategori_ad = security("kategori_ad");
        $kategori_durum = security("kategori_durum");
        $kategori_sira = security("kategori_sira");

        $kategoriinsert=$db->Insert("INSERT INTO kategori SET
                                kategori_ad=?,
                                kategori_durum=?,	
                                kategori_seourl=?,
                                kategori_sira=?
                            ", array($kategori_ad, $kategori_durum, $kategori_seourl, $kategori_sira));
        if ($kategoriinsert) {
              header("Location: ../production/kategori.php?durum=ok");
         } else {
              header("Location: ../production/kategori.php?durum=no");
         }
    }
    if (isset($_GET['kategorisil'])) {
        if ($_GET['kategorisil']=="ok") {
            $kontrol=$db->Delete("DELETE FROM kategori WHERE kategori_id=?", array($_GET['kategori_id']));
            if ($kontrol) {
                 header("Location: ../production/kategori.php?durum=ok");
            } else {
                 header("Location: ../production/kategori.php?durum=no");
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
    if (control("POST") && isset($_POST['urunekle'])) {
        $urun_seourl=seo($_POST['urun_ad']);
        $kategori_id = security("kategori_id");
        $urun_ad = security("urun_ad");
        $urun_detay = security("urun_detay");
        $urun_fiyat = security("urun_fiyat");
        $urun_video = security("urun_video");
        $urun_keyword = security("urun_keyword");
        $urun_durum = security("urun_durum");
        $urun_stok = security("urun_stok");
        if (empty($kategori_id) or empty($urun_ad) or empty($urun_fiyat) or empty($urun_keyword) or empty($urun_durum) or empty($urun_stok)) {
            header("Location: ../production/urun-ekle.php?durum=bos");
        }else{
            if (!preg_match("/^[a-zA-ZıİğĞöÖüÜşŞçÇ\s]+$/u", $urun_ad)) {
                header("Location: ../production/urun-ekle.php?durum=urunad");
            }else{
                if (!preg_match("/^[a-zA-ZıİğĞöÖüÜşŞçÇ\s]+$/u", $urun_keyword)) {
                    header("Location: ../production/urun-ekle.php?durum=urunkeyword");
                }else{
                    $isHave=$db->getColumn("SELECT urun_id FROM urun
                                            WHERE urun_ad=?", array($urun_ad));
                    if ($isHave) {
                        header("Location: ../production/urun-ekle.php?durum=urunad2");
                    }else{
                        if ($_FILES["myFile"]["name"] == "") {
                            header("Location: ../production/urun-ekle.php?durum=urunfoto");
                        }else{
                            $fileName=$_FILES["myFile"]["name"];
                            $fileTMP=$_FILES["myFile"]["tmp_name"];
                            $ext=pathinfo($fileName,PATHINFO_EXTENSION);
                            $newName=rand()."_".time().".".$ext;
                            $myPath="../../img/urunler/".$newName;

                            $look=getimagesize($fileTMP);
                            if ($look===FALSE) {
                                header("Location: ../production/urun-ekle.php?durum=format");
                            }else{     
                                if (move_uploaded_file($fileTMP,$myPath)) {
                                    $urunkaydet=$db->Insert("INSERT INTO urun SET
                                                            kategori_id=?,
                                                            urun_ad=?,
                                                            urun_detay=?,
                                                            urun_fiyat=?,
                                                            urun_video=?,
                                                            urun_keyword=?,
                                                            urun_durum=?,
                                                            urun_stok=?,	
                                                            urun_seourl=?,
                                                            urun_foto=?",
                                                            array($kategori_id, $urun_ad, $urun_detay, $urun_fiyat, $urun_video, $urun_keyword, $urun_durum, $urun_stok, $urun_seourl, $newName));
                                    if ($urunkaydet) {
                                        header("Location: ../production/urun.php?durum=ok");
                                    } else {
                                        header("Location: ../production/urun.php?durum=no");
                                    }
                                }
                            }
                        }
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
        $urun_video = security("urun_video");
        $urun_keyword = security("urun_keyword");
        $urun_durum = security("urun_durum");
        $urun_stok = security("urun_stok");

        if (empty($kategori_id) or empty($urun_ad) or empty($urun_fiyat) or empty($urun_keyword) or empty($urun_durum) or empty($urun_stok)) {
            header("Location: ../production/urun-duzenle.php?urun_id=$urun_id&durum=bos");
        }else{
            if (!preg_match("/^[a-zA-ZıİğĞöÖüÜşŞçÇ\s]+$/u", $urun_ad)) {
                header("Location: ../production/urun-duzenle.php?urun_id=$urun_id&durum=urunad");
            }else{
                if (!preg_match("/^[a-zA-ZıİğĞöÖüÜşŞçÇ\s]+$/u", $urun_keyword)) {
                    header("Location: ../production/urun-duzenle.php?urun_id=$urun_id&durum=urunkeyword");
                }else{
                    $isHave=$db->getColumn("SELECT urun_id FROM urun
                                            WHERE urun_ad=?", array($urun_ad));
                    if ($isHave) {
                        header("Location: ../production/urun-duzenle.php?urun_id=$urun_id&durum=urunad2");
                    }else{
                        $fileName=$_FILES["myFile"]["name"];
                        $fileTMP=$_FILES["myFile"]["tmp_name"];
                        $ext=pathinfo($fileName,PATHINFO_EXTENSION);
                        $newName=rand()."_".time().".".$ext;
                        $myPath="../../img/urunler/".$newName;

                        $look=getimagesize($fileTMP);
                        if ($look===FALSE) {
                            header("Location: ../production/urun-duzenle.php?urun_id=$urun_id&durum=format");
                        }else{     
                            if (move_uploaded_file($fileTMP,$myPath)) {
                                $urunupdate=$db->Update("UPDATE urun SET
                                                        kategori_id=?,
                                                        urun_ad=?,
                                                        urun_detay=?,
                                                        urun_fiyat=?,
                                                        urun_video=?,
                                                        urun_keyword=?,
                                                        urun_durum=?,
                                                        urun_stok=?,	
                                                        urun_seourl=?,
                                                        urun_foto=?
                                                        WHERE urun_id=?",
                                                        array($kategori_id, $urun_ad, $urun_detay, $urun_fiyat, $urun_video, $urun_keyword, $urun_durum, $urun_stok, $urun_seourl, $urun_id, $newName));
                                if ($urunupdate) {
                                    header("Location: ../production/urun.php?durum=ok");
                                } else {
                                    header("Location: ../production/urun.php?durum=no");
                                }
                            }
                        }
                    }
                }
            }
        }
    }
    if (control("POST") && isset($_POST['urunguncelle'])) {
        $urun_id=$_POST['urun_id'];
        $urun_adet = security("urun_adet");

        if (empty($urun_adet)) {
            header("Location: ../production/sepet.php?urun_id=$urun_id&durum=bos");
        }else{
            $urunupdate=$db->Update("UPDATE sepet SET
                                    urun_adet=?
                                    WHERE urun_id=?",
                                    array($urun_adet, $urun_id));
            if ($urunupdate) {
                header("Location: ../../sepet.php?durum=ok");
            } else {
                header("Location: ../production/sepet.php?durum=no");
            }
        }
    }
    if (control("POST") && isset($_POST['urunsepetGuncelle'])) {
        $urun_id=$_POST['urun_id'];
        $urun_adet = security("urun_adet");

        if (empty($urun_adet)) {
            header("Location: ../../sepet.php?urun_id=$urun_id&durum=bos");
        }else{
            $urunupdate=$db->Update("UPDATE sepet SET
                                    urun_adet=?
                                    WHERE urun_id=?",
                                    array($urun_adet, $urun_id));
            if ($urunupdate) {
                header("Location: ../../sepet.php?durum=ok");
            } else {
                header("Location: ../../sepet.php?durum=no");
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
    if (control("POST") && isset($_POST['sepetekle'])) {
        $urun_adet = security("urun_adet");
        $kullanici_id = security("kullanici_id");
        $urun_id = security("urun_id");
        $inlineRadio1 = security("inlineRadio1");

        $insert=$db->Insert("INSERT INTO sepet SET
                                    urun_adet=?,
                                    kullanici_id=?,
                                    urun_id=?,	
                                    urun_kg=?",
                                    array($urun_adet, $kullanici_id, $urun_id, $inlineRadio1));
        if ($insert) {
             header("Location: ../../sepet?durum=ok");
        } else {
             header("Location: ../../sepet?durum=no");
        }
    }
    if (control("POST") && isset($_POST['sepetekle2'])) {
        $urun_adet = security("urun_adet");
        $urun_id = security("urun_id");
        $inlineRadio1 = security("inlineRadio1");

        $insert=$db->Insert("INSERT INTO sepet SET
                                    urun_adet=?,
                                    urun_id=?,	
                                    urun_kg=?",
                                    array($urun_adet, $urun_id, $inlineRadio1));
        if ($insert) {
             header("Location: ../../sepet?durum=ok");
        } else {
             header("Location: ../../sepet?durum=no");
        }
    }
    if (control("POST") && isset($_POST['kullanicisifreguncelle'])) {
        $kullanici_id=security("kullanici_id");
        echo $kullanici_eskipassword = security("kullanici_eskipassword"); echo "<br>";
        echo $kullanici_passwordone = security("kullanici_passwordone"); echo "<br>";
        echo $kullanici_passwordtwo = security("kullanici_passwordtwo"); echo "<br>";
        $kullanici_password=md5(md5(md5(sha1($kullanici_eskipassword))));
        $kullanici=$db->getRow("SELECT * FROM kullanici
                                    WHERE kullanici_password=?",
                                array($kullanici_password));

        if ($kullanici) {
            //eski şifre doğruysa başla
            if ($kullanici_passwordone==$kullanici_passwordtwo) {
                if (strlen($kullanici_passwordone)>=6) {
                    //md5 fonksiyonu şifreyi md5 şifreli hale getirir.
                    $password=md5(md5(md5(sha1($kullanici_passwordone))));
                    $kullanici_yetki=1;
                    $kullanicikaydet=$db->Update("UPDATE kullanici SET
                                                    kullanici_password=?
                                                    WHERE kullanici_id=?",
                                                array($password, $kullanici_id));
                    if ($kullanicikaydet) {
                         header("Location: ../../sifre-guncelle.php?durum=sifredegisti");
                        // header("Location: ../production/genel-ayarlar.php?durum=ok");
                    } else {
                         header("Location: ../../sifre-guncelle.php?durum=no");
                    }
                    // Bitiş
                } else {
                     header("Location: ../../sifre-guncelle.php?durum=eksiksifre");
                }
            } else {
                 header("Location: ../../sifre-guncelle?durum=sifreleruyusmuyor");
                exit;
            }
        } else {
            header("Location: ../../sifre-guncelle?durum=eskisifrehata");
        }
        exit;
    }
    if (control("POST") && isset($_POST['kullanicibilgiguncelle'])) {
        $kullanici_id=$_POST['kullanici_id'];
        $kullanici_adsoyad = security("kullanici_adsoyad");
        $kullanici_mail = security("kullanici_mail");
        $kullanici_il = security("kullanici_il");
        $kullanici_ilce = security("kullanici_ilce");
        $kullanici_adres = security("kullanici_adres");
        $ayarkaydet=$db->Update("UPDATE kullanici SET
                                    kullanici_mail=?,
                                    kullanici_adsoyad=?,
                                    kullanici_adres=?,
                                    kullanici_il=?,
                                    kullanici_ilce=?
                                    WHERE kullanici_id=?",
                                 array($kullanici_mail, $kullanici_adsoyad, $kullanici_adres, $kullanici_il, $kullanici_ilce, $kullanici_id));
        if ($ayarkaydet) {
            header("Location: ../../hesabim?durum=ok");
        } else {
            header("Location: ../../hesabim?durum=no");
        }
    
    }
    if (isset($_GET['sepeturunsil'])) {
        if ($_GET['sepeturunsil']=="ok") {
            $kontrol=$db->Delete("DELETE from sepet where sepet_id=?", array($_GET['sepet_id']));
            if ($kontrol) {
                 header("Location: ../../sepet?durum=ok");
            } else {
                 header("Location: ../../sepet?durum=no");
            }
        }
    }
    if (control("POST") && isset($_POST['bankasiparisekle'])) {
        $siparis_tip="Banka Havalesi";
        $kullanici_id = security("kullanici_id");
        $siparis_banka = security("siparis_banka");
        $siparis_toplam = security("siparis_toplam");
        $insert=$db->Insert("INSERT INTO siparis SET
                                kullanici_id=?,
                                siparis_tip=?,	
                                siparis_banka=?,
                                siparis_toplam=?",
                                array($kullanici_id, $siparis_tip, $siparis_banka, $siparis_toplam));

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
                echo $urun_fiyat=$uruncek->urun_fiyat;
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
               
                header("Location: ../../sparislerim?durum=ok");
                exit;
            }
        } else {
            header("Location: ../../siparislerim?durum=no");
        }
    }
    

    

?>