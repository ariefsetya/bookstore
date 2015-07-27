<?php
if(!empty($_POST['name'])){
	$name = htmlentities($_POST['name']);
	
	mysql_query("insert into level values('0','$name')");
	header("location:?menu=level");
}

?>

<div>
	<div>Add a level</div>
	<form action="" method="POST">
	<table width="100%">
		<tr>
			<td>Name</td>
			<td></td>
			<td><input type="text" name="name"/></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td><button type="submit" name="btn">Submit</button></td>
		</tr>
	</table>
	</form>
</div>