<?php
$adsoyad = $_POST["adsoyad"];
$takým = $_POST["takým"];

echo $adsoyad."hoþgeldiniz ,tuttuðunuz takým;<br/>";
if($takým == "a"){
	echo "GALATASARY ";
}elseif ($takým == "b"){
	echo "FENERBAHÇE ";
}elseif ($takým == "c"){
	echo "BEÞÝKTAÞ";
}elseif ($takým == "d"){
	echo "TRABZONSPOR ";
}elseif ($takým == "e"){
	echo "BURSASPOR";
}

?>