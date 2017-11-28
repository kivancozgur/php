<?php
$baglan = @mysql_connect("localhost","root","mysql");
	$vt_sec = mysql_select_db("mesajlar", $baglan);
	
	mysql_query("SET CHARACTER SET latin5");
?>