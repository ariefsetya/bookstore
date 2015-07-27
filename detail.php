<?php
	$id = $_GET['id'];
	$o = mysql_query("select*from buku where id='$id'");
	$so = mysql_fetch_array($o);
?>
<span><a href="?menu=home">Home</a> >> <a href="?menu=books">Books</a> >> <a href="">Detail Books</a></span>

<div class="">
	<div>Detail Books</div>
	<br />
	<table width="100%">
		<tr>
			<td rowspan="5" width="20%">
				<img width="100%" src="foto/<?php echo $so['cover'];?>">
			</td>
			<td> Name : <?php echo $so['judul'];?></div>
		</tr>
		<tr>
			<td> Author : <?php echo $so['pengarang'];?></td>
		</tr>
		<tr>
			<td> Price : <?php echo $so['harga'];?></td>
		</tr>
		<tr>
			<td> ISBN : <?php echo $so['isbn'];?></td>
		</tr>
		<tr>
			<td></td>
		</tr>
		<tr>
			<td colspan=2>About the Book<br /><?php echo $so['about'];?></td>
		</tr>
			
	</table>
</div>