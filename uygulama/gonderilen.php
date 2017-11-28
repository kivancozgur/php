<?php  

include("ayarlar.php");
session_start();

$aa = $_SESSION['kullanici_adi'];

if (empty($aa)){
	echo "<center><h1>Lütfen önce giriþ yapýnýz</h1></center>";
	echo '<center><h1><a href="giris.php">giris yapmak için Týklayýn</a></h1></center>';
}else{


$oku = mysql_query("select * from mesajlar WHERE yazan_kisi='$aa'order by id desc");
$mesaj_sayisi = mysql_num_rows($oku);

if ($mesaj_sayisi==0){
	echo "<center><h1>kimseye mesaj göndermediniz </h1></center>";

}else{


while ($mesaj = mysql_fetch_array($oku)) {
	echo "<div id='alici'>
	
	<strong><font color='blue'>alici:</font></strong>{$mesaj["alici"]}<br />
	<strong><font color='orange'>Mesaj:</font></strong>{$mesaj["yazilan_mesaj"]}<br />
	<br>
	</div>";
	
			}
		}
	}
echo'<center><h1><a href="mesaj_yaz.php">geri dönmek için Týklayýn</a></h1></center>';


?>
<html>
<body>
<body bgcolor="silver ">
</body>
</html>