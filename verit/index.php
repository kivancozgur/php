<?php 

error_reporting(E_ALL);
ini_set('display_errors', 1);

include("ayarlar.php");

?>
<html>
<head>
       <title>mesajlar</title>
</head>
<body>
<?php
if ($_POST)	  {
	$adsoyad =$_POST["adsoyad"];
	$eposta =$_POST["eposta"];
	$mesaj =$_POST["mesaj"];
	if (!empty($adsoyad) && !empty($eposta) && !empty($mesaj)){
		
		echo'1';
		
		$ekle = mysql_query("insert into mesajlar (yazan,eposta,mesaj,onay) values ('$adsoyad','$eposta','$mesaj','0')");
		
		echo'2';
		
		if ($ekle){
		
		echo'3';
		
			echo "<font color='green'>veriler basariyla eklendi</font>";
		}else{
			
		echo'4';	
			echo "<font color='red'>basarisiz oldu </font>";
		}
	}
} else {
	?>
	<h1>mesaj gonder</h1>
	<form action="" method="POST">
	<table cellpadding="5" cellspacing="5">
	<tr>
	<td>ad-soyad:</td>
	<td><input type="text" name ="adsoyad" /></td>
	</tr>
	<tr>
	<td>e-posta:</td>
	<td><input type ="text" name="eposta" /></td>
	</tr>
	<tr>
	<td>mesaj:</td>
	<td><textarea rows="5" cols="30" name ="mesaj"></textarea></td>
	</tr>
	<tr>
	<td></td>
	<td><input type ="submit" value="gonder" /></textarea></td>
	</tr>
	</table>
	</form>
<?}?>

</body>
</html>
