<?php

function kimlik_bilgisi($ad, $soyad, $suankit, $dogumt,$dy,$annead,$babaad){
	
	echo "ad�:".$ad;
	echo "<br>";
	echo "soyad�:".$soyad;
	echo "<br>";
	echo $yas;
	$yas=$suankit-$dogumt;  
	$suankit."-".$dogumt."=".$yas;
	echo "ya��:".$yas;
	echo "<br>";
	echo "dogum yeri:".$dy;
	echo "<br>";
	echo "anne ad�:".$annead;
	echo "<br>";
	echo "baba ad�:".$babaad;	
	echo "<br><br>";
}

kimlik_bilgisi('Mahmut', 'Tuncer', '2016', '1986','malatya','fatma','mehmet');
kimlik_bilgisi('Mahmut', 'Tuncer', '2016', '1986','malatya','fatma','mehmet');
kimlik_bilgisi('Mahmut', 'Tuncer', '2016', '1986','malatya','fatma','mehmet');



?>