<?php
header ("content-Type: text/html;charset=utf-8");

include ("ayarlar.php");
session_start();
$mesaj_id = $_GET['mesaj_id'];
$oturum = $_SESSION['kullanici_adi'];


	
if ($_SESSION['kullanici_adi'] == '') {
		
		echo "<center><strong><h1><font color='red'>Giriş yapınz.</font></h1></strong></center><br><br>";
		echo "<strong><h1><center><a href='giris.php'>Giriş yapmak istiyorsanız tklayınız.</a></center></h1></strong>";
	
	}else {

	if (empty($mesaj_id)){
	
		echo "Mesaj id si boş olamaz!";
					echo "<strong><h1><center><a href='mesaj_yaz.php'>geri dönmek için  tklayınız.</a></center></h1></strong>";

	}else { 
	
	if (!is_numeric($mesaj_id)) {
		
		echo "Mesaj ID sadece sayi olmak zorundadir.";
				echo "<strong><h1><center><a href='mesaj_yaz.php'>geri dönmek için  tklayınız.</a></center></h1></strong>";

	}else {
		
			$kontrol5 = mysql_query("SELECT * FROM mesajlar WHERE id='$mesaj_id'");
			$kontrol7 = mysql_num_rows($kontrol5);
		
	if ($kontrol7 == 0) {
			
			echo "Boyle bir mesaj bulunmamaktadir.";
					echo "<strong><h1><center><a href='mesaj_yaz.php'>geri dönmek için  tklayınız.</a></center></h1></strong>";

			
		}else {
		
			$kontrol9 = mysql_query("DELETE FROM mesajlar WHERE alici='$oturum' && id='$mesaj_id'");
			
		
	if ($kontrol9) {
		
		echo "Mesaj silindi.";
		echo "<strong><h1><center><a href='mesaj_yaz.php'>geri dönmek için  tklayınız.</a></center></h1></strong>";
		
					}	
				}
			}	
		}		
	}		

	



?>