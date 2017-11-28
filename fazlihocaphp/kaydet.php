<?
include("yeni.php");
$ad=$_POST["text1"];
$soyad=$_POST["text2"];
$sql="insert into kayit (ad,soyad) values('$ad','$soyad')";
mysql_query("$sql");
?>

