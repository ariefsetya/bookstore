<div>
	<div class="judulp">Messages</div>
	<table width="100%" style="border:1px solid #000;" border="0px">
		<thead style="background-color:lightblue;">
			<td>ID</td>
			<td>Name</td>
			<td>E-mail</td>
			<td>Phone Number</td>
			<td>Messages</td>
			<td colspan=2>Action</td>
		</thead>
		<?php
			$data = mysql_query("select*from messages order by id asc");
			$a = 1;
			while($sdata=mysql_fetch_array($data)){
		?>
		<tbody style="border-bottom:1px solid #000;">
			<td style="border-top:1px solid #000;"><?php echo $sdata['id'];?></td>
			<td style="border-top:1px solid #000;"><?php echo $sdata['nama'];?></td>
			<td style="border-top:1px solid #000;"><?php echo $sdata['email'];?></td>
			<td style="border-top:1px solid #000;"><?php echo $sdata['phone'];?></td>
			<td style="border-top:1px solid #000;"><?php echo $sdata['message'];?></td>
			<td style="border-top:1px solid #000;"><a href="?menu=messages&p=edit&id=<?php echo $sdata['id'];?>">Edit</a></td>
			<td style="border-top:1px solid #000;"><a href="?menu=messages&p=remove&id=<?php echo $sdata['id'];?>">Remove</a></td>
		</tbody>
		<?php
		}
		?>
	</table>