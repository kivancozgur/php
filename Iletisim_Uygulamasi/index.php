<?php 

if ($_POST) {
	$diger='MIME-Version:1.0'."\r\n";
	$diger .='Content-type:text/html; charset=iso-8859-9'."\r\n";
	$adsoyad=$_POST["adsoyad"];
	$eposta=$_POST["eposta"];
	$mesaj=$_POST["mesaj"];
	$konu="İLETİŞİM BİLDİRİMİ";
	$kime="webkivanc@gmail.com";
	$icerik="<div style='padding:5px; background-color:#000; border:2px solid #444;color:red;margin-bottom:5px'>Kıvanç Özgür</div>
			 Gönderen: ".$adsoyad."<br>
			 E-Posta : ".$eposta."<br>
			 Konu : ".$konu;
	$diger .='From: ('.$adsoyad.')'.$eposta;
	$gonder =mail($kime,$konu,$icerik,$diger);
	if ($gonder) {
		echo "İLETİŞİM GÖNDERİLDİ";
	}
	
}else{
	echo '<form action="" method="post">
 	<table cellpadding="5" cellspacing="5">
 		<tr>
 			<td>Ad-Soyad : </td>
 			<td><input type="text" name="adsoyad"></td>
 		</tr>
 		<tr>
 			<td>E-Posta : </td>
 			<td><input type="text" name="eposta"></td>
 		</tr>
 		<tr>
 			<td>Mesaj : </td>
 			<td><textarea rows="3" cols="30" name="mesaj"></textarea></td>
 		</tr>
 		<tr>
 			<td><input type="submit" name="Gonder"></td>
 		</tr>
 	</table>
 </form>';
}
 ?>
