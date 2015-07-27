<?php
$id = $_GET['id'];
$M = mysql_query("select*from buku where id='$id'");
$R = mysql_fetch_array($M);
?>
<div>
	<div class="judulp">Remove a book</div>
	<h3>Are you really to remove these book?
	<br /><?php echo $R['judul'];?><h3>
	<div style="float:right;"><a href="books/del.php?id=<?php echo $id;?>">Yes</a>&nbsp;&nbsp;<a href="?menu=books">Cancel</a></div>
</div>
	