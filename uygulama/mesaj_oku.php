<?php  

include("ayarlar.php");
session_start();
header("Refresh: 5; url=mesaj_oku.php");
$aa = $_SESSION['kullanici_adi'];

$durum = $_POST['durum'];
$kullanici = $_SESSION['kullanici_adi'];
$alici = $_POST['alici'];







if (empty($aa)){
	echo "<center><h1>L�tfen �nce giri� yap�n�z</h1></center>";
	echo '<center><h1><a href="giris.php">giris yapmak i�in T�klay�n</a></h1></center>';
}else{

$mesajlari_okundu_yap = mysql_query("update mesajlar set durum='1' where alici='$kullanici'");
$oku = mysql_query("select * from mesajlar WHERE alici='$aa' order by id desc");

$mesaj_sayisi = mysql_num_rows($oku);

if ($mesaj_sayisi==0){
	echo "<center><h1>mesaj�n�z bulunmamaktad�r </h1></center>";

}else{


while ($mesaj = mysql_fetch_array($oku)) {
	
	echo "<div id='alici'>
	<strong><font color='blue'>g�nderilen tarih:</font></strong>{$mesaj["tarihsaat"]}<br />
	<strong><font color='blue'>Yazan Ki�i:</font></strong>{$mesaj["yazan_kisi"]}<br />
	<strong><font color='orange'>Mesaj:</font></strong>{$mesaj["yazilan_mesaj"]}<br />
	<strong><a href = 'mesaj_sil.php?mesaj_id={$mesaj['id']}'>mesaji sil </a></strong>
	<br>
	</div>";  
	
			}
		}
	}
echo'<center><h1><a href="mesaj_yaz.php">geri d�nmek i�in T�klay�n</a></h1></center>';


?>
<html>
<body>
<body bgcolor="silver ">
</body>
</html>