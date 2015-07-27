<div>
	<div style="font-size:20pt;float:left">category</div>
	<a href="?menu=category&p=new" style="font-size:20pt;float:right">Add a category</a>
	<br />
	<br />
	<br />
	<table width="100%" style="border:1px solid #000;" border="0px">
		<thead style="background-color:lightblue;">
			<td>ID</td>
			<td>Name</td>
			<td colspan=2>Action</td>
		</thead>
		<?php
			$data = mysql_query("select*from kategori order by id asc");
			$a = 1;
			while($sdata=mysql_fetch_array($data)){
		?>
		<tbody style="border-bottom:1px solid #000;">
			<td style="border-top:1px solid #000;"><?php echo $sdata['id'];?></td>
			<td style="border-top:1px solid #000;"><?php echo $sdata['nama'];?></td>
			<td style="border-top:1px solid #000;"><a href="?menu=category&p=edit&id=<?php echo $sdata['id'];?>">Edit</a></td>
			<td style="border-top:1px solid #000;"><a href="?menu=category&p=remove&id=<?php echo $sdata['id'];?>">Remove</a></td>
		</tbody>
		<?php
		}
		?>
	</table>
</div>