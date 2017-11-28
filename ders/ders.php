<?php
 $top=0;
 for ($i=1;$i<=10;$i++)
 {
 echo $i;
 if ($i<>10)
 echo “+”;
 $top=$top+$i;
 }
 echo “=”. $top;
 ?>