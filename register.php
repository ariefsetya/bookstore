<?php
if(!empty($_POST['name'])){
$name = htmlentities($_POST['name']);
$street = htmlentities($_POST['street']);
$number = htmlentities($_POST['number']);
$country = htmlentities($_POST['country']);
$city = htmlentities($_POST['city']);
$state = htmlentities($_POST['state']);
$phone = htmlentities($_POST['phone']);
$email = htmlentities($_POST['email']);
$pass = htmlentities($_POST['password']);

mysql_query("insert into user values('0','$name','$street','$number','$state','$country','$city','$phone','$email','$pass')");
header("location:?menu=register-success");
}
?>
<span><a href="?menu=home">Home</a> >> <a href="?menu=register">Registration</a></span>

<div class="">
<div style="font-size:larger">Member Registration</div>
	<form action="" method="POST">
	<table width="500px">
		<tr>
			<td>Name</td>
			<td></td>
			<td><input style="width:100%;" type="text" name="name"/></td>
		</tr>
		<tr>
			<td>Street</td>
			<td></td>
			<td><input style="width:100%;" type="text" name="street"/></td>
		</tr>
		<tr>
			<td>Number</td>
			<td></td>
			<td><input style="width:100%;" type="text" name="number"/></td>
		</tr>
		<tr>
			<td>Country</td>
			<td></td>
			<td><input style="width:100%;" type="text" name="country"/></td>
		</tr>
		<tr>
			<td>City</td>
			<td></td>
			<td><input style="width:100%;" type="text" name="city"/></td>
		</tr>
		<tr>
			<td>State</td>
			<td></td>
			<td><input style="width:100%;" type="text" name="state"/></td>
		</tr>
		<tr>
			<td>Phone Number</td>
			<td></td>
			<td><input style="width:100%;" type="text" name="phone"/></td>
		</tr>
		<tr>
			<td>E-mail</td>
			<td></td>
			<td><input style="width:100%;" type="text" name="email"/></td>
		</tr>
		<tr>
			<td>Password</td>
			<td></td>
			<td><input style="width:100%;" type="password" name="password"/></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td><button style="width:100%;" type="submit" name="btn">Submit</button></td>
		</tr>
	</table>
	</form>
</div>