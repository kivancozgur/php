<?php
$ad=$_POST["ad"];
echo $_POST['ad']."<br>";
$cinsiyet=$_POST["p1"];
echo $_POST['p1']."<br>";
$yas=$_POST["p2"];
echo $_POST['p2']."<br>";
$engel=$_POST["p3"];
echo $_POST['p3']."<br>";
if ($ad=="Kadın") {
	echo "ASKERE GİDEMEZ";
}
if ($yas=="20 Yaşında veya büyük" && $engel="Engeli Yok") {
	echo "ASKERE İÇİN ELVERİŞLİ";
}
else if ($yas=="20 Yaşından Küçük" && $engel="Engel Var") {
	
	echo "ASKERE GİDEMEZ <br>";
}
else if ($yas=="20 Yaşında veya büyük" && $engel="Engel Var") {
	
	echo "ASKERE GİDEMEZ <br>";
}
?>