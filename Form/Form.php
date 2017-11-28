<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<form action="kontrol.php" method="post">
	<table>
		<tr>
			<td>Ad-Soyad:</td>
			<td><input type="text" name="adsoyad"></td>
		</tr>

		<tr>
			<td>Yas:</td>
			<td><input type="text" name="yas"></td>
		</tr>

		<tr>
			<td>Sehir:</td>
			<td>
				<select name="sehir">
					<option value="Bursa">Bursa</option>
					<option value="Istanbul">Istanbul</option>
					<option value="Izmır">Izmir</option>
				</select>
			</td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="Gönder"></td>
		</tr>
	</table>
</form>