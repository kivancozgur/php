<?php 
	if (isset($_GET['msg'])){
		if (file_exists('msg.html')) {
		   $f = fopen('msg.html',"a+");
		} else {
		   $f = fopen('msg.html',"w+");
		}
      $nick = isset($_GET['nick']) ? $_GET['nick'] : "Hidden";
      $msg  = isset($_GET['msg']) ? htmlspecialchars($_GET['msg']) : ".";
      $line = "<li><div class=\"left\"><img src=\"data/rjsomers.jpeg\" ></div><div class=\"right\">$nick: <p>$msg</p></div></li>";
		fwrite($f,$line."\r\n");
		fclose($f);
		
		echo $line;
		
	} else if (isset($_GET['all'])) {
	   $flag = file('msg.html');
	   $content = "";
	   foreach ($flag as $value) {
	   	$content .= $value;
	   }
	   echo $content;

	}
?>	
