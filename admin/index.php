<?php
	session_start();
	include "koneksi/koneksi.php";
	if(!isset($_GET['menu'])){
		header("location:?menu=messages");
	}
	
	if($_SESSION['username']==NULL){
		include "login.php";
	}
	else{
?>
<!DOCTYPE html>
<html>
	<head>	
		<title>Peachpit Press Admin</title>
		<link rel="stylesheet" href="style.css">
	</head>
	<body bgcolor="#fdfdfd">
		<div class="logo">
			<img src="img/logo.png">
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
				else if($get=="books"){
					include "books.php";
				}
				else if($get=="category"){
					include "category.php";
				}
				else if($get=="level"){
					include "level.php";
				}
				else if($get=="messages"){
					include "messages.php";
				}
				else if($get=="logout"){
					session_start();
					$_SESSION['username']="";
					header("location:?menu=home");
				}
				else if($get=="register-success"){
					include "success/register-success.php";
				}
			?>
		</div>
	</body>
</html>
<?php
}
?>