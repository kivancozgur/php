<!DOCTYPE html>
<html>
<head>
	<title>Mesajlaşma</title>
	<meta charset="utf-8">
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.5.2.min.js"></script>
	<script type="text/javascript">
		document.onkeydown=mesajGonder;
		function mesajGonder(x) {
			var tus;
			tus=x.which;
			if (tus==13) {
				$("textarea[name=mesaj]").attr("disabled","disabled");
				var mesaj = $("textarea[name=mesaj]").val();
				$.ajax({
					type:"POST",
					url:"chat.php",
					data:{"tip":"gonder","mesaj":mesaj},
					success:function(sonuc) {
						if (sonuc=="bos") {
							alert("Lütfen boş mesaj göndermeyin..");
							$("textarea[name=mesaj]").removeAttr("disabled");
						}else{
							$("textarea[name=mesaj]").removeAttr("disabled");
							$("textarea[name=mesaj]").val("");
							sohbetGuncelle();
						} 
					}
				});
			}
		}
	</script>
	<link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body>
<?php if ($_SESSION["oturum"]) { ?>
<div id="sohbetGenel"></div>
<div id="sohbetIcerik"></div>
<div id="mesajGonder">
<h3>Mesaj Gönder:</h3><textarea rows="0" cols="0" name="mesaj"></textarea>
</div>
<?php } ?>
</body>
</html>