<?php

$yazi="Benim ad�m emre ozer";
echo $yazi;
echo "<br>";
echo strtolower ($yazi);  //metni k���k harfle yazar
echo "<br>";
echo strtoupper($yazi);   // metni b�y�k harfle yazar
echo "<br>";
echo ucwords($yazi);      // metnin ilk harflerini b�y�k yazar
echo "<br>";
echo strlen($yazi);       // metindeki karakter say�s�n� sayar bo�luklar dahil
echo "<br>";
echo strstr($yazi,emre);
echo "<br>";
echo str_replace(emre,mustafa,$yazi);
echo "<br>";
echo substr($yazi,3,16);


?>