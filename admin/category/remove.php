<?php
$id = $_GET['id'];
$M = mysql_query("select*from kategori where id='$id'");
$R = mysql_fetch_array($M);
?>
<div>
	<div class="judulp">Remove a category</div>
	<h3>Are you really to remove these category?
	<br /><?php echo $R['nama'];?><h3>
	<div style="float:right;"><a href="category/del.php?id=<?php echo $id;?>">Yes</a>&nbsp;&nbsp;<a href="?menu=category">Cancel</a></div>
</div>
	