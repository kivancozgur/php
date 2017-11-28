<?php

function kimlik_bilgisi($ad, $soyad, $suankit, $dogumt,$dy,$annead,$babaad){
	
	echo "adý:".$ad;
	echo "<br>";
	echo "soyadý:".$soyad;
	echo "<br>";
	echo $yas;
	$yas=$suankit-$dogumt;  
	$suankit."-".$dogumt."=".$yas;
	echo "yaþý:".$yas;
	echo "<br>";
	echo "dogum yeri:".$dy;
	echo "<br>";
	echo "anne adý:".$annead;
	echo "<br>";
	echo "baba adý:".$babaad;	
	echo "<br><br>";
}

kimlik_bilgisi('Mahmut', 'Tuncer', '2016', '1986','malatya','fatma','mehmet');
kimlik_bilgisi('Mahmut', 'Tuncer', '2016', '1986','malatya','fatma','mehmet');
kimlik_bilgisi('Mahmut', 'Tuncer', '2016', '1986','malatya','fatma','mehmet');



?>