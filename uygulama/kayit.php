<?php

include ("ayarlar.php"); ?>
<html>
<body>
<body bgcolor="green ">
</body>
</html>

<?php

if ($_POST) {
	
$kullanici_adi =  $_POST["kullanici_adi"];
$sifre = $_POST["sifre"];


	$kontrol = mysql_query("SELECT * FROM uyeler WHERE kullanici_adi='$kullanici_adi'");
	
		$kontrol2 = mysql_num_rows($kontrol);
		
	if ($kontrol2 > 0) {
		
		echo "<center><h1><strong><font color='red'>B�yle bir kullan�c� bulunmaktad�r l�tfen bekleyiniz.</font></strong></h1></center>";
		header("refresh:3;url=kayit.php");
	} else {


	if (!empty($kullanici_adi) && !empty($sifre)) {
	
		$ekle = mysql_query("INSERT INTO uyeler (kullanici_adi, sifre ) VALUES ('$kullanici_adi', '$sifre' )");
		

}	if ($ekle) {
	
		echo "<center><h1><font color='blue'>Ba�ar�yla kay�t oldun<br></font></h1></center>";
		echo'<center><h1><a href="giris.php">giri� yapmak i�in T�klay�n</a></h1></center>';
}	else {
	
		echo "<center><h1><font color='red'>bo� alan b�rakmay�n l�tfen bekleyin!</font></h1></center>";
		header("refresh:3;url=kayit.php");
		} 	

	}

}
else{
echo '<form action="" method="post">
<table cellpadding="7" cellspacing="7"

	<tr>
		<td>Kullan�c� Ad�:</td>
		<td><input type="text" name="kullanici_adi" /></td>
	</tr>
	<tr>
		<td>Sifre:</td>
		<td><input type="text" name="sifre" /></td>
		</tr>

    <tr>
		<td></td>
		<td><input type="submit" value="Kay�t ol" /></td>
		</tr>
</table>
</form>';
}
