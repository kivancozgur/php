<table width="auto" border="0" cellspacing="0" cellpadding="2" style="text-align: center;">
<tr>
<td width=50><strong>id</strong></td>	
<td width=50><strong>Ad</strong></td>
<td width=50><strong>Soyad</strong></td>
<td width=50><strong>Yaş</strong></td>
<td width=50><strong>Telefon</strong></td>
<td width=50><strong>Adres</strong></td>
<td width=50><strong>Mezun Yılı</strong></td>
<td width=50><strong>İş</strong></td>
<td width=50><strong>Bölüm</strong></td>
</tr>

<?php
include("ayar2.php");
$sql="select * from prkayit";
$sorgu=mysql_query("$sql");
while($sonuc=mysql_fetch_array($sorgu))
{
?>
	<tr>

	<td><?php echo $sonuc["id"]." "?></td>
	<td><?php echo $sonuc["ad"]." "?></td>
	<td><?php echo $sonuc["soyad"]." "?></td>
	<td><?php echo $sonuc["yas"]." "?></td>
	<td><?php echo $sonuc["telefon"]." "?></td>
	<td><?php echo $sonuc["adres"]." "?></td>
	<td><?php echo $sonuc["mezunyili"]." "?></td>
	<td><?php echo $sonuc["isler"]." "?></td>
	<td><?php echo $sonuc["bolum"]."<br>"?></td>
</tr>
	<?}
?></table>