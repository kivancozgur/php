<?php


function merhaba($isim = false, $soyisim = false){
	
	if($isim == false){
		
		/* Ýsmini Yazmadý */
		
		$isim = 'Ýsimsiz';
		
	}
	
	if($soyisim == false){
		
		$soyisim ='soyisimsiz';
		
	}
	
	
	echo 'Merhaba senin adýn '.$isim.' Soyismin: '.$soyisim;
	
}


merhaba('Emre', false);



?>