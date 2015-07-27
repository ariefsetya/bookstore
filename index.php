<?php
	include "koneksi/koneksi.php";
	if(!isset($_GET['menu'])){
		header("location:?menu=home");
	}
	session_start();
	if($_SESSION['username']!=""){
	
	}
	else{
		$_SESSION['username'] = "";
	}
?>
<!DOCTYPE html>
<html>
	<head>	
		<title>Peachpit Press</title>
		<link rel="stylesheet" href="style.css">
	</head>
	<body bgcolor="#fdfdfd">
		<div class="logo" style="">
			<img style="float:left;" src="img/logo.png">
			<div style="width:200px;padding:15px;float:right;">
				<div style="">
				Find Us
				</div>
				<a href="http://www.facebook.com/"><img style="height:60px" src="img/facebook.png"></a>
				<a href="http://www.twitter.com/"><img style="height:60px" src="img/twitter.png"></a>
				<a href="http://plus.google.com/"><img style="height:60px" src="img/googleplus.png"></a>
			</div>
		</div>
		<?php
			include "menu/menu.php";
		?>
		
		<div class="container">
			<?php
				$get = $_GET['menu'];
				if($get=="home"){
					include "home.php";
				}

			?>
		</div>
	</body>
</html>