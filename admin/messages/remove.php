<?php
$id = $_GET['id'];
$M = mysql_query("select*from messages where id='$id'");
$R = mysql_fetch_array($M);
?>
<div>
	<div class="judulp">Remove a message</div>
	<h3>Are you really to remove these message?
	<br /><?php echo $R['message'];?><h3>
	<div style="float:right;"><a href="messages/del.php?id=<?php echo $id;?>">Yes</a>&nbsp;&nbsp;<a href="?menu=messages">Cancel</a></div>
</div>
	