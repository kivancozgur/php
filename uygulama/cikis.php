<?php
  
session_start();
 
ob_start();
 
session_destroy();
 
echo "<center><h1><font color ='green'>Çýkýþ Yaptýnýz.Ana Sayfaya Yönlendiriliyorsunuz</font></h1></center>";
 
header("Refresh: 2; url=index.php");

?>
<html>
<body>
<body bgcolor="silver ">
</body>
</html>