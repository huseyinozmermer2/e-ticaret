<?php

function control($value){
	switch ($value) {
		case 'POST':return (!empty($_SERVER["REQUEST_METHOD"]=="POST")) ? true:false;
		break;
		case 'GET':return (!empty($_SERVER["REQUEST_METHOD"]=="GET")) ? true:false;
		break;
		
		default:return false; break;
	}
}

function security($text){
	if (isset($_POST[$text])) {
		$clean=trim($_POST[$text]);
	}else if (isset($_GET[$text])){
		$clean=trim($_GET[$text]);
	}
		$clean=strip_tags($clean);
		//ENT_QUOTES, Çift tırnaklara ilaveten tek tırnaklar da dönüştürülür.
		$clean=htmlspecialchars($clean,ENT_QUOTES);
		$clean=str_replace("insert","",$clean);
		$clean=str_replace("INSERT","",$clean);
		$clean=str_replace("SELECT","",$clean);
		$clean=str_replace("exec","",$clean);
		$clean=str_replace("EXEC","",$clean);
		$clean=str_replace("drop","",$clean);
		$clean=str_replace("DROP","",$clean);
		return $clean;
		
}