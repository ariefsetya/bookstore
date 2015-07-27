<?php
if(isset($_POST['name'])){
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$message=$_POST['message'];
mysql_query("insert into messages values('0','$name','$email','$phone','$message')");
}
?>
<span><a href="?menu=home">Home</a> >> <a href="?menu=contactus">Contact Us</a></span>

<div class="">
<div style="font-size:20pt;">Peachpit Press</div> 
<div style="font-size:10pt;">1249 Eighth Street, Berkeley, CA 94710</div>  
<div style="font-size:10pt;">info@peachpitpress.com</div> 
<br />
<br />
<div style="font-size:larger;">Leave a message</div>
	<form method="POST" action="">
	<table width="500px;">
		<tr>
			<td>Name</td>
			<td></td>
			<td><input type="text" name="name"/></td>
		</tr>
		<tr>
			<td>E-mail</td>
			<td></td>
			<td><input type="text" name="email"/></td>
		</tr>
		<tr>
			<td>Phone Number</td>
			<td></td>
			<td><input type="text" name="phone"/></td>
		</tr>
		<tr>
			<td>Message</td>
			<td></td>
			<td><textarea type="text" name="message"></textarea></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td><button type="submit" name="btn">Submit</button></td>
		</tr>
	</table>
	</form>
</div>