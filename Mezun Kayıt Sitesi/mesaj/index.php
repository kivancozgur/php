<?php
function createForm(){
?>
      <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
	  <div id="info"><span>Sohbete Katılmak İçin <b>Nick name</b> giriniz <a href="#" title="">KAPAT</a></span></div>
        <div id="message">
            
            <div id="new-message">

                <span>
                    <input id="msg" type="text" name="name" /></span>
                <span>
                    <input class="gonder" type="submit" name="submitBtn" value="Giriş Yap" /></span>

            </div>
       
      </form>
<?php
}

if (isset($_GET['u'])){
   unset($_SESSION['nickname']);
}

// Process login info
if (isset($_POST['submitBtn'])){
      $name    = isset($_POST['name']) ? $_POST['name'] : "Unnamed";
      $_SESSION['nickname'] = $name;
}

$nickname = isset($_SESSION['nickname']) ? $_SESSION['nickname'] : "Hidden";   
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "DTD/xhtml1-transitional.dtd">
<html>
<head>
   <title>Micro Chat</title>
   <meta http-equiv="Content-Type" content="text/HTML; charset=utf-8" />
   <link href="style/style.css" rel="stylesheet" type="text/css" />
      <link href="css/reset.css" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,700&amp;subset=latin,latin-ext" rel="stylesheet" type="text/css">
    <script src="js/jquery.js" type="text/javascript"></script>
	   <script>
        $(document).ready(function () {

            $(".close").click(function () {
                $("#live-chat").fadeOut(500);
            });
            $("#info a").click(function () {
                $("#info span").fadeOut(500);
            });
            $("#new-message button").click(function () {
                var newMssage = $("#message-input").val();
                if (newMssage == "") {
                    alert("Upppss");
                }
                else {
                    $("#message ul").append("  <li><div class=left><img src=data/rjsomers.jpeg alt= /></div><div class=right>You<p>" + newMssage + "</p></div></li>");
                    $("#message-input").val("");
                    $('#message ul').scrollTop(10000000);
                }

            });

        });
    </script>
	
    <script language="javascript" type="text/javascript">
    <!--
      var httpObject = null;
      var link = "";
      var timerID = 0;
      var nickName = "<?php echo $nickname; ?>";

      // Get the HTTP Object
      function getHTTPObject(){
         if (window.ActiveXObject) return new ActiveXObject("Microsoft.XMLHTTP");
         else if (window.XMLHttpRequest) return new XMLHttpRequest();
         else {
            alert("Your browser does not support AJAX.");
            return null;
         }
      }   

      // Change the value of the outputText field
      function setOutput(){
         if(httpObject.readyState == 4){
            var response = httpObject.responseText;
            var objDiv = document.getElementById("result");
            objDiv.innerHTML += response;
            objDiv.scrollTop = objDiv.scrollHeight;
            var inpObj = document.getElementById("msg");
            inpObj.value = "";
            inpObj.focus();
         }
      }

      // Change the value of the outputText field
      function setAll(){
         if(httpObject.readyState == 4){
            var response = httpObject.responseText;
            var objDiv = document.getElementById("result");
            objDiv.innerHTML = response;
            objDiv.scrollTop = objDiv.scrollHeight;
         }
      }

      // Implement business logic    
      function doWork(){    
         httpObject = getHTTPObject();
         if (httpObject != null) {
            link = "message.php?nick="+nickName+"&msg="+document.getElementById('msg').value;
            httpObject.open("GET", link , true);
            httpObject.onreadystatechange = setOutput;
            httpObject.send(null);
         }
      }

      // Implement business logic    
      function doReload(){    
         httpObject = getHTTPObject();
         var randomnumber=Math.floor(Math.random()*10000);
         if (httpObject != null) {
            link = "message.php?all=1&rnd="+randomnumber;
            httpObject.open("GET", link , true);
            httpObject.onreadystatechange = setAll;
            httpObject.send(null);
         }
      }

      function UpdateTimer() {
         doReload();   
         timerID = setTimeout("UpdateTimer()", 5000);
      }
    
    
      function keypressed(e){
         if(e.keyCode=='13'){
            doWork();
         }
      }
    //-->
    </script>   
</head>
<body onLoad="UpdateTimer();">
<CENTER>
    <div id="header">
    <div id="header_inner">
    <ul class="menu" style="  list-style-type: none;
  padding:20px;">
      <li style="background-color: rgba(0, 0, 0, 0.2);   float: left;   border-radius: 10px;
  margin-left: 200px;"><a href="../kayit.html" style="
  padding-bottom: 20px;
  padding-right: 50px;
  padding-top: 20px;
  padding-left: 50px;
  display: block;
  color:#FFFFFF;
  font-size: 14pt;
font-family: 'Roboto',sans-serif;
  text-align: center;
  text-decoration: none;
">Anasayfa</a></li>
      <li style="background-color: rgba(0, 0, 0, 0.2);   float: left; border-radius: 10px;
  margin-left: 200px;"><a href="../liste.html" style="
  padding-bottom: 20px;
  padding-right: 50px;
  padding-top: 20px;
  padding-left: 50px;
  display: block;
  color:#FFFFFF;
  font-size: 14pt;
font-family: 'Roboto',sans-serif;
  text-align: center;
  text-decoration: none;">Liste</a></li>
        <li style="background-color: rgba(0, 0, 0, 0.2);   float: left; border-radius: 10px;
  margin-left: 200px;"><a href="../mesaj/index.php" style="
  padding-bottom: 20px;
  padding-right: 50px;
  padding-top: 20px;
  padding-left: 50px;
  display: block;
  color:#FFFFFF;
  font-size: 14pt;
font-family: 'Roboto',sans-serif;
  text-align: center;
  text-decoration: none;
  " >Mesaj</a></li>
    </ul> 
    </div>
  </div>
  <br>
  <br>
</CENTER>

 <div id="live-chat">
        <div id="title">
            <div class="left">
                <h2>MKC üyeleri burada </h2>
            </div>
            <div class="right"></div>
        </div>
		<?php 

if (!isset($_SESSION['nickname']) ){ 
    createForm();
} else  { 
      $name    = isset($_POST['name']) ? $_POST['name'] : "Unnamed";
      $_SESSION['nickname'] = $name;
    ?>
              <div id="info"><span>Sohbet Ederken Argo konuşmalardan <b>UZAK</b> duralım <a href="#" title="">KAPAT</a></span></div>
	
        <div id="result">
		<div id="message">
		<ul>
		<li>

	   <?php 
        $data = file("msg.html");
        foreach ($data as $line) {
        	echo $line;
        }
     ?>
	 </li>
	 </ul>
	</div>
	</div>

    
      <div id="sender" onKeyUp="keypressed(event);">
         <input type="text" name="msg" size="30" id="msg" />
         <button class="gonder" onClick="doWork();">Yaz</button>
      </div>   
<?php            
    }

?>
        
    </div> 

    
</body>   