<?php
if(!empty($_POST['title'])){
	$title = htmlentities($_POST['title']);
	$author = htmlentities($_POST['author']);
	$isbn = htmlentities($_POST['isbn']);
	$price = htmlentities($_POST['price']);
	$category = htmlentities($_POST['category']);
	$level = htmlentities($_POST['level']);
	

	
	$about = str_replace("'","''",$_POST['about']);
	$folder = $_FILES['cover']['name'];
	$lokasi = $_FILES['cover']['tmp_name'];
	move_uploaded_file($lokasi,"../foto/$folder");
	
	mysql_query("insert into buku values('0','$title','$folder','$author','$isbn','$price','$about','$category','$level')");
	echo "<script>window.location='?menu=books&p=all'</script>";
}
else
{

?>

<div>
	<div>Add a book</div>
	<form action="" method="POST" enctype="multipart/form-data">
	<table width="100%">
		<tr>
			<td>Title</td>
			<td></td>
			<td><input type="text" name="title"/></td>
		</tr>
		<tr>
			<td>Cover</td>
			<td></td>
			<td><input type="file" name="cover"/></td>
		</tr>
		<tr>
			<td>Author</td>
			<td></td>
			<td><input type="text" name="author"/></td>
		</tr>
		<tr>
			<td>ISBN</td>
			<td></td>
			<td><input type="text" name="isbn"/></td>
		</tr>
		<tr>
			<td>Price</td>
			<td></td>
			<td><input type="text" name="price"/></td>
		</tr>
		<tr>
			<td>Level</td>
			<td></td>
			<td><select type="text" name="level">
				<<?php
				$open = mysql_query("select*from level");
				while($sopen=mysql_fetch_array($open)){
				?>
				<option value="<?php echo $sopen['id'];?>"><?php echo $sopen['nama'];?></option>
				<?php
				}
				?>
				</select>
		</tr>
		<tr>
			<td>Category</td>
			<td></td>
			<td><select type="text" name="category">
				<<?php
				$open = mysql_query("select*from kategori");
				while($sopen=mysql_fetch_array($open)){
				?>
				<option value="<?php echo $sopen['id'];?>"><?php echo $sopen['nama'];?></option>
				<?php
				}
				?>
				</select></td>
		</tr>
		<tr>
			<td>About the book</td>
			<td></td>
			<td><textarea type="text" name="about"></textarea></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td><button type="submit" name="btn">Submit</button></td>
		</tr>
	</table>
	</form>
</div>

<?php
}
?>