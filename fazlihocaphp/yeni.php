<?
$kullanici="root";
$sifre="";
$host="localhost";
$veritabani="mezun";
$baglan=mysql_connect($host,$kullanici,$sifre);
mysql_select_db($veritabani,$baglan);
?>