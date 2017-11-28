<?php 

include("ayarlar.php");
session_start();

if ($_POST) {
	
	$a =  $_POST["alici"];
	$b = $_SESSION["kullanici_adi"];
	$c = $_POST["yazilan_mesaj"];
	$tarihsaat = $_POST["tarihsaat"];
	
	
		
	if (empty($a) || empty($b) || empty($c)) {
		
		echo "<center><h1><strong><font colo='red'>Lütfen gerekli yerleri doldurunuz lütfen bekleyiniz</font></strong></h1></center>";
	header("refresh:3;url=mesaj_yaz.php");
	}else {
		if($a == $b) {
			echo "<center><h1><strong><font colo='red'>kendinize mesaj atamazsýnýz lütfen bekleyiniz</font></strong></h1></center>";
			header("refresh:3;url=mesaj_yaz.php");
		}else{
			
	
		$kontrol = mysql_query("SELECT * FROM uyeler WHERE kullanici_adi='$a'");
	
		$kontrol2 = mysql_num_rows($kontrol);
		
		
	if ($kontrol2 == 0) {
		
		echo "<center><h1><strong><font color='red'>Sistemimizde böyle bir alýcý bulunmamaktadýr.<br></font></strong></h1></center>";
	
	
	
	}else{
		$tarihsaat = date ("y-m-d-H-i-s");
		$ekle = mysql_query("INSERT INTO mesajlar (tarihsaat,alici, yazan_kisi , yazilan_mesaj) VALUES ('$tarihsaat','$a', '$b' , '$c')");
		if ($ekle) {
	
		echo "<center><h1><strong><font color='green'>Baþarýyla Gönderdin.</font></strong></h1></center>";
		echo '<center><h1><a href="cikis.php">çýkýþ yapmak için Týklayýn</a></h1></center>';
		echo '<center><h1><a href="mesaj_yaz.php">geri dönmek için Týklayýn</a></h1></center>';
		
	}
	
	else {
	
		echo "<center><h1><font color='red'>HATA!</font></h1></center>";
	}
		
	
}
}
}

}else{
	if ($_SESSION['kullanici_adi'] == ''){
		echo "<center><h1>giris yapiniz lütfen bekleyiniz</h1></center>";
		header("Refresh: 2; url=giris.php");
	} else{
echo '<form action="" method="post">
<table cellpadding="7" cellspacing="7"
	
	<tr> 
	<td><center><h1><strong><font color="blue">Mesaj Gönder('.$_SESSION['kullanici_adi'].')<br><br></font></strong></h1></center></td>
	
	</tr>
	  
	<tr>
		<td>Alýcý:</td>
		<td><select name="alici">';
		$al =mysql_query("select * from uyeler");
		while ($qq = mysql_fetch_array($al)){
						
			if($qq["kullanici_adi"] != $_SESSION['kullanici_adi']){
				
				echo "<option value='".$qq["kullanici_adi"]."'>".$qq["kullanici_adi"]."</option>";
				
			}	
		
		}	
	
		
	echo '</select></td>
	</tr>
	
	<tr>
	<td>Mesaj:<br></td>
	<td><textarea rows="4" cols="50" name="yazilan_mesaj"></textarea></td>
	</tr>
	
    <tr>
		<td></td>
		<td><input type="submit" value="Gonder" /></td>
		</tr>
		<tr>
		<td><center><h2><a href="cikis.php">çýkýþ yapmak için Týklayýn</a></h2></center></td>
		</tr>
		<tr>
		<td><h2> <center><a href="mesaj_oku.php">gelen mesajlarýnýzý görmek  için Týklayýn</a></center></h2><td>
		</tr>
		<tr>
		<td><h2> <center><a href="gonderilen.php">gönderilen mesajlarýnýzý görmek  için Týklayýn</a></center></h2><td>
		</tr>
</table>
</form>';	

			$alici = $_SESSION["kullanici_adi"];

			$kont1 =mysql_query ("SELECT * FROM mesajlar WHERE alici='$alici' && durum ='0'");
			$kont2 = mysql_num_rows($kont1);
	if ($kont2){
		echo "okunmamýþ mesajýýz .'$kont2'.";
	}else{
		echo "mesajýnýz bulunmamaktadýr";
	}	
}
}		


?>
<html>
<body>
<body bgcolor="Orange  ">
</body>
</html>