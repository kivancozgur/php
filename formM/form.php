<form action="kontrol.php" method="POST">
<table cellpadding="5" cellspacing="5">
<tr>
<td>Ad-Soyad:</td>
<td><input type="text" name="adsoyad" /></td>
</tr>
<tr>
<td>E-mail: </td>
<td><input type="text" name="email" /></td>
</tr>
<tr>
<td>website: </td>
<td><input type="text" name="website" /></td>
</tr>
<tr>
<td>Yas:</td>
<td><select name="yas">
	<option value="16">16</option>
	<option value="17">17</option>
	<option value="18">18</option>
	<option value="19">19</option>
	<option value="20">20</option>
</select></td>
</tr>
<tr>
<td>Cinsiyet:</td>
<td><select name="cinsiyet">
  <option value="erkek">erkek</option>                 
	<option value="kiz">kiz</option>
</select></td>
</tr>
<tr>
<td>sehir:</td>
<td><select name="sehir">
	<option value="Eskisehir">Eskisehir</option>
	<option value="Ankara">Ankara</option>
	<option value="Istanbul">Istanbul</option>
	<option value="Bursa">Bursa</option>
	<option value="Izmir">Izmir</option>
</select></td>
</tr>
<tr>


<td></td>
	<td><input type="submit" value="Gonder" /></td>
</tr>
</table>
</form>