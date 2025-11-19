<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Alınan Veri</title>
</head>
<body>
	<hr>
	<?php
		if(!empty($_POST['kullaniciAdi'])){
			echo "Kullanıcı bulundu: ".$_POST["kullaniciAdi"]."<br>";
		}

		else{
			echo "Kullanıcı bulunamadı!";
		}
	?>
	<hr>
</body>
</html>