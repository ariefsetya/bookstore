<div class="">
<span><a href="?menu=home">Home</a> >> <a href="?menu=books">Books</a></span>
<div style="font-size:20pt;">Books</div>
<br />
<br />
<?php
$list = mysql_query("select*from kategori");
while($elist = mysql_fetch_array($list)){

	echo "<div class='hal'>";
	$lagi = mysql_query("select*from buku where id_kategori='$elist[id]'");
	while($elagi = mysql_fetch_array($lagi)){
?>
	<div class="books">
		<div class="books-inner">
			<a style="border-bottom:0px solid;" href="?menu=detail&id=<?php echo $elagi['id'];?>"><img height="200px" width="180px" src="foto/<?php echo $elagi['cover'];?>"/></a>
		</div>
		<?php
		echo "<a href='?menu=detail&id=$elagi[id]'>".$elagi['judul']."</a>";
		?>
		
	</div>
	<?php
	}
	echo "</div>";

	}
	?>
</div>