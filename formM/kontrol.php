<?php

$adsoyad = $_POST["adsoyad"];
$yas = $_POST["yas"];
$sehir = $_POST["sehir"];
$cinsiyet = $_POST["cinsiyet"];
$email = $_POST["email"];
$website = $_POST["website"];
if ($email==""){
	echo "e-mail boþ býrakýlamaz ";
}elseif ($website==""){
	echo "website boþ býrakýlamaz";
}elseif ($adsoyad==""){
	echo  "ad-soyad boþ býrakýlamaz";
}elseif(is_numeric($adsoyad)) {
	echo "ad-soyad rakamdan oluþamaz";
}else{
	echo "kaydýnýz baþarýyla alýnmýþtýr";
}

?>