<?php 
	ob_start();
    session_start();
    require_once "classes/database.php";
    require_once "classes/control.php";

    $db=new \Database();

	// if (!empty($_FILES)) {

	// 	$uploads_dir = '../../img/uploads/';
	// 	@$tmp_name = $_FILES['file']["tmp_name"];
	// 	@$name = $_FILES['file']["name"];


	// 	$refimgyol=substr($uploads_dir, 18)."/".$name;
	// 	@move_uploaded_file($tmp_name, "$uploads_dir/$name");

	// 	$urun_id=$_POST['urun_id'];

	// 	$kaydet=$db->Insert("INSERT INTO urunfoto SET
	// 		urunfoto_resimyol=?,
	// 		urun_id=?", array($refimgyol,$urun_id));

	// }

	if (!empty($_FILES)) {
		echo  $eski_yol = security("eski_yol");
		
		if ($_FILES["file"]["name"] == "") {
			header("Location: ../production/urun-foto-yukle.php?durum=bos");
		}else if (file_exists($_FILES["file"]["name"])) {
			header("Location: ../production/urun-foto-yukle.php?durum=deg");
		}else if ($_FILES["file"]["size"]>10000000) {
			header("Location: ../production/urun-foto-yukle.php?durum=boyut");
		}else{
				$fileName=$_FILES["file"]["name"];
				$fileTMP=$_FILES["file"]["tmp_name"];
				//pathinfo, Verilen bir path 'ten dosyanın adını ve uzantısı
				//PATHINFO_BASENAME: Verilen path in sonunda bulunan dosya adını ve uzantısını verir.
				$newName=pathinfo($fileName,PATHINFO_BASENAME);
				$myPath="../../img/uploads/".$newName;
				echo $urun_id=$_POST['urun_id'];
									
				if (move_uploaded_file($fileTMP,$myPath)) {
					$update=$db->Insert("INSERT INTO urunfoto SET
						urunfoto_resimyol=?,
						urun_id=?
						", array($newName, $urun_id)
					);
				}
		}
	}


?>