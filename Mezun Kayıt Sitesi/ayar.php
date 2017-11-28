<?php
date_default_timezone_set('Europe/Istanbul');
	$baglan = @mysql_connect("localhost","root","mysql");
	$vt_sec = mysql_select_db("mezun", $baglan);
	mysql_query("SET CHARACTER SET ");
	echo "<center><h1>KAYIT BAŞARILI</h1></center>";

?>