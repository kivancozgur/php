<?php
$adsoyad = $_POST["adsoyad"];
$tak�m = $_POST["tak�m"];

echo $adsoyad."ho�geldiniz ,tuttu�unuz tak�m;<br/>";
if($tak�m == "a"){
	echo "GALATASARY ";
}elseif ($tak�m == "b"){
	echo "FENERBAH�E ";
}elseif ($tak�m == "c"){
	echo "BE��KTA�";
}elseif ($tak�m == "d"){
	echo "TRABZONSPOR ";
}elseif ($tak�m == "e"){
	echo "BURSASPOR";
}

?>