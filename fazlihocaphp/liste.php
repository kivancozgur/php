<?
include("yeni.php");
$sql="select * from kayit";
$sorgu=mysql_query("$sql");
while($sonuc=mysql_fetch_array($sorgu))
{
	
	echo $sonuc["ad"]."<br>";
	echo $sonuc["soyad"]."<br>";
}
?>