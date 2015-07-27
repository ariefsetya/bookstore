<div>
	<div style="font-size:20pt;float:left">Books</div>
	<a href="?menu=books&p=new" style="font-size:20pt;float:right">Add a book</a>
	<br />
	<br />
	<br />
	<table width="100%" style="border:1px solid #000;" border="0px">
		<thead style="background-color:lightblue;">
			<td>ID</td>
			<td>Title</td>
			<td>Author</td>
			<td>ISBN</td>
			<td>Price</td>
			<td colspan=2>Action</td>
		</thead>
		<?php
			$data = mysql_query("select*from buku order by id asc");
			$a = 1;
			while($sdata=mysql_fetch_array($data)){
		?>
		<tbody>
			<td style="border-top:1px solid #000;"><?php echo $sdata['id'];?></td>
			<td style="border-top:1px solid #000;"><?php echo $sdata['judul'];?></td>
			<td style="border-top:1px solid #000;"><?php echo $sdata['pengarang'];?></td>
			<td style="border-top:1px solid #000;"><?php echo $sdata['isbn'];?></td>
			<td style="border-top:1px solid #000;"><?php echo $sdata['harga'];?></td>
			<td style="border-top:1px solid #000;"><a href="?menu=books&p=edit&id=<?php echo $sdata['id'];?>">Edit</a></td>
			<td style="border-top:1px solid #000;"><a href="?menu=books&p=remove&id=<?php echo $sdata['id'];?>">Remove</a></td>
		</tbody>
		<?php
		}
		?>
	</table>
</div>