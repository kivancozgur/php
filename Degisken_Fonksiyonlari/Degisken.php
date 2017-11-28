<meta charset="utf-8">
<?php 
	$a=true;
	echo gettype($a);
	settype($a,"string");
	echo '<br>';
	echo gettype($a);
$b=5;
	if (is_numeric($b)) {
		echo "<br>Bu bir sayıdır";
	}
	else{
		echo "<br>Bu bir sayı değildir";
	}
 ?>