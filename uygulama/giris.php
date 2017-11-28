<meta charset="utf-8">
<?php
include("ayarlar.php");
session_start();

if ($_POST)	  {
	$kullanici_adi =$_POST["kullanici_adi"];
	$sifre = $_POST["sifre"];
	$bul = mysql_query("select * from uyeler where kullanici_adi='$kullanici_adi' && sifre='$sifre'");
	$say = mysql_num_rows($bul);

if ($say>0){
	$goster = mysql_fetch_array($bul);
	
	
	$_SESSION["oturum"]=1;
	$_SESSION["kullanici_adi"]=$kullanici_adi;
	
	
	echo "<center><h1>merhaba '$kullanici_adi'<br></h1></center>";
	echo'<center><h1><a href="mesaj_yaz.php">mesaj yazmak için Týklayýn<br></a></h1></center>';
	echo'<center><h1><a href="mesaj_oku.php">gelen mesajlarýnýzý görmek için týklayýnýz<br></a></h1></center>';
	echo'<center><h1><a href="gonderilen.php">gönderilen mesajlarýnýzý görmek için týklayýnýz<br></a></h1></center>';
} else{
	echo "<center><h1><font color ='red'>giris basarýsýz oldu<br></font></h1></center>";
	  echo'<center><h1><a href="giris.php">tekrar denemek için Týklayýn</a></h1></center>';
	}
} else {
	if (!empty($_SESSION['kullanici_adi'])){
		header ("Location:mesaj_yaz.php");
	}
	else {
	
	echo '<form action="" method="POST"style="margin-left:450px;margin-top:200px;">
	<table cellpadding="5" cellspacing="5">
	<tr>
	<td style="font-size:20px;color:white;">Kullanıcı Adı : </td>
	<td><input type="text" name ="kullanici_adi" /></td>
	</tr>
	<tr>
	<td style="font-size:20px;color:white;">Şifre : </td>
	<td><input type ="text" name="sifre" /></td>
	</tr>
	<tr>
	<td></td>
	<td><input style="color:white; background-color:#333; border-color:#333;padding-left:39px;padding-right:39px; padding-bottom:10px;padding-top:10px; font-size:20px;"type ="submit" value="Giriş Yap" /></textarea></td>
	</tr>
	</table>
	</form>';
}
}
?>
<html>
<body>
<body bgcolor="dimgray">
</body>
</html>