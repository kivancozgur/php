<?php

$adsoyad = $_POST["adsoyad"];
$yas = $_POST["yas"];
$sehir = $_POST["sehir"];
$cinsiyet = $_POST["cinsiyet"];
$email = $_POST["email"];
$website = $_POST["website"];
if ($email==""){
	echo "e-mail bo� b�rak�lamaz ";
}elseif ($website==""){
	echo "website bo� b�rak�lamaz";
}elseif ($adsoyad==""){
	echo  "ad-soyad bo� b�rak�lamaz";
}elseif(is_numeric($adsoyad)) {
	echo "ad-soyad rakamdan olu�amaz";
}else{
	echo "kayd�n�z ba�ar�yla al�nm��t�r";
}

?>