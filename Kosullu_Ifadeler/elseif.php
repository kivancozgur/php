<meta charset="utf-8">
<?php 
$sayfa=@$_GET["sayfa"];

echo '<a href="elseif.php?sayfa=iletisim">Iletisim</a> | <a href="elseif.php?sayfa=hakkimda">Hakkimda</a> | <a href="elseif.php?sayfa=referans">Referanslar</a>';

if ($sayfa=="hakkimda") {
	echo "<h1>SEA MÜBAREK</h1>";
}elseif ($sayfa=="iletisim") {
	echo "<h1>iletişime geçtik</h1>";
}elseif ($sayfa=="referans") {
	echo "<h1>Referanslar Eklenecektir</h1>";
}else{
	echo "<h1>Yanlış Yere Girdiniz</h1>";
}

 ?>