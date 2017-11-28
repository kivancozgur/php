<?php

if ($_POST){
	$urun = $_POST["urun"];
	$adet = $_POST["adet"];
	$adsoyad = $_POST["adsoyad"];
	$tel = $_POST["tel"];
	if (empty($adet) || empty ($adsoyad) || empty ($tel)){
		echo "lutfen boþ alan býrakmayýn";
	}else{
		$deger =$urun."\t".$adet."\t".$adsoyad."\t".$tel."\n";
	$ac = fopen("siparis.txt", "a");
	if (!$ac){
		echo "dosya acilamadi";
		
	}
	fwrite($ac,$deger);
	fclose($ac);
	echo "<h1>tebrikler</h1><p>siparis basariyla alindi.</p>";
	}                                                                       
	
}else{
	echo'<h1>siparis ver </h1>
<form action="" method="post">
<table cellpadding="5" cellspacing="5">
<tr>
<td>urun:</td>
<td><select name="urun"><option value="bilgisayar">bilgisayar</option><option value="telefon">telefon</option><option value="notebook">notebook</option><option value="kulaklýk">kulaklýk</option><option value="klavye">klavye</option></select></td>
</tr>
<tr>
<td>adet:</td>
<td><input type="text" name="adet" /></td>
</tr>
<tr>
<td>alici adi-soyadi:</td>
<td><input type="text" name="adsoyad" /></td>
</tr>
<tr>
<td>telefon no:</td>
<td><input type="text" name="tel" /></td>
</tr>
<tr>
<td></td>
<td><input type="submit" value="Gonder" /></td>
</tr>
</table>
</form>';

}


?>