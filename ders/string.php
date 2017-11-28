<?php

$yazi="Benim adým emre ozer";
echo $yazi;
echo "<br>";
echo strtolower ($yazi);  //metni küçük harfle yazar
echo "<br>";
echo strtoupper($yazi);   // metni büyük harfle yazar
echo "<br>";
echo ucwords($yazi);      // metnin ilk harflerini büyük yazar
echo "<br>";
echo strlen($yazi);       // metindeki karakter sayýsýný sayar boþluklar dahil
echo "<br>";
echo strstr($yazi,emre);
echo "<br>";
echo str_replace(emre,mustafa,$yazi);
echo "<br>";
echo substr($yazi,3,16);


?>