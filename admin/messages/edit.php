<?php
if(!empty($_POST['name'])){
	$name = htmlentities($_POST['name']);
	$email = htmlentities($_POST['email']);
	$phone = htmlentities($_POST['phone']);
	$message = htmlentities($_POST['messages']);
	$id = htmlentities($_POST['id']);
	
	mysql_query("update messages set nama='$name',email='$email',phone='$phone',message='$message' where id='$id'");
	header("location:?menu=messages");
}
else{
	$dta = $_GET['id'];
	$sdta=mysql_query("select*from messages where id='$dta'");
	$data = mysql_fetch_array($sdta);
}

?>

<div>
	<div>Edit a level</div>
	<form action="" method="POST">
	<table width="100%">
		<tr>
			<td>Name</td>
			<td></td>
			<td><input type="text" value="<?php echo $data['nama'];?>" name="name"/><input type="hidden" value="<?php echo $data['id'];?>" name="id"/></td>
		</tr>
		<tr>
			<td>E-mail</td>
			<td></td>
			<td><input type="text" value="<?php echo $data['email'];?>" name="email"/></td>
		</tr>
		<tr>
			<td>Phone Number</td>
			<td></td>
			<td><input type="text" value="<?php echo $data['phone'];?>" name="phone"/></td>
		</tr>
		<tr>
			<td>Messages</td>
			<td></td>
			<td><textarea type="text" name="messages"><?php echo $data['message'];?></textarea></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td><button type="submit" name="btn">Submit</button></td>
		</tr>
	</table>
	</form>
</div>