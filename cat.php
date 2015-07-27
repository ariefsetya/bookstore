<span><a href="?menu=home">Home</a> >> <a href="?menu=books">Books</a> >> <a href="">Detail Category</a></span>

<div>
	<?php
	
	$a = mysql_query("select*from buku where id_kategori='$_GET[cat]'");
	while($b = mysql_fetch_array($a)){
	?>
		<div class="books">
		<div class="books-inner">
			<a style="border-bottom:0px solid;" href="?menu=detail&id=<?php echo $b['id'];?>"><img height="200px" width="180px" src="foto/<?php echo $b['cover'];?>"/></a>
		</div>
		<?php
		echo "<a href='?menu=detail&id=$b[id]'>".$b['judul']."</a>";
		?>
		
	</div>
	<?php
	}
	?>
</div>