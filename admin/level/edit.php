<?php
if(!empty($_POST['name'])){
	$name = htmlentities($_POST['name']);
	$id = htmlentities($_POST['id']);
	
	mysql_query("update level set nama='$name' where id='$id'");
	header("location:?menu=level");
}
else{
	$dta = $_GET['id'];
	$sdta=mysql_query("select*from level where id='$dta'");
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
			<td></td>
			<td></td>
			<td><button type="submit" name="btn">Submit</button></td>
		</tr>
	</table>
	</form>
</div>