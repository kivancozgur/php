<?php
include("ayar.php");
$ad=$_POST["adtext"];
$soyad=$_POST["soyadtext"];
$yas=$_POST["yastext"];
$telefon=$_POST["teltext"];
$adres=$_POST["adrestext"];
$mezun=$_POST["mezuntext"];
$is=$_POST["istext"];
$bolum=$_POST["bolumtext"];
$sql="insert into prkayit (ad,soyad,yas,telefon,adres,mezunyili,isler,bolum) values('$ad','$soyad','$yas','$telefon','$adres','$mezun','$is','$bolum')";
mysql_query("$sql");
?>

