<?php
if(isset($_POST['username'])){
	if($_POST['username']=="arief" and $_POST['password']=="arief"){
		$_SESSION['username']="arief";
		$_SESSION['password']="arief";
		header("location:?menu=messages");
	}
}
?>
<!DOCTYPE html>
<html>
	<head>	
		<title>Peachpit Press Admin</title>
		<link rel="stylesheet" href="style.css">
	</head>
	<body style="background-image:url(img/bg.jpg)">
		<div class="">
		<form action="" method="POST">
			<center>
			<div style="padding:15px;height:20px;-webkit-border-radius:10px;background-color:#fbfbfb;width:300px;margin-top:300px;font-size:15pt;">Sign In</div>
			<table style="background-color:#f5f5f5;width:300px">
				<tr>
					<td><center>Username</center></div>
				</tr>
				<tr>
					<td><center><input type="text" name="username" value="arief" style="width:250px;"/></center></div>
				</tr>
				<tr>
					<td><center>Password</center></div>
				</tr>
				<tr>
					<td><center><input type="password" name="password" value="arief" style="width:250px;"/></center></div>
				</tr>
				<tr>
					<td><center></center></div>
				</tr>
			</table>
			<div style="margin-top:-2px;padding:5px;height:50px;-webkit-border-radius:10px;background-color:#fbfbfb;width:300px;"><button style="height:50px;background-color:#f5f5f5" type="submit" name="btn">Sign In</button></div>
			
			</center>
			</form>
		</div>
	</body>
</html>