<?php


function merhaba($isim = false, $soyisim = false){
	
	if($isim == false){
		
		/* �smini Yazmad� */
		
		$isim = '�simsiz';
		
	}
	
	if($soyisim == false){
		
		$soyisim ='soyisimsiz';
		
	}
	
	
	echo 'Merhaba senin ad�n '.$isim.' Soyismin: '.$soyisim;
	
}


merhaba('Emre', false);



?>