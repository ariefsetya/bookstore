<?php
if(!empty($_POST['title'])){
	$id = htmlentities($_POST['id']);
	$title = $_POST['title'];
	$author = htmlentities($_POST['author']);
	$isbn = htmlentities($_POST['isbn']);
	$price = htmlentities($_POST['price']);
	$category = htmlentities($_POST['category']);
	$level = htmlentities($_POST['level']);
	

	
	$about = str_replace("'","''",$_POST['about']);
	if(!empty($_FILES['cover'])){
	$folder = $_FILES['cover']['name'];
	$lokasi = $_FILES['cover']['tmp_name'];
	move_uploaded_file($lokasi,"../foto/$folder");
	
		mysql_query("update buku set judul='$title',cover='$folder',pengarang='$author',isbn='$isbn',harga='$price',about='$about',id_kategori='$category',id_kelompok='$level' where id='$id'");
	}
	else{
		mysql_query("update buku set judul='$title',pengarang='$author',isbn='$isbn',harga='$price',about='$about',id_kategori='$category',id_kelompok='$level' where id='$id'");
	}
	echo "<script>window.location='?menu=books&p=all'</script>";
}
else
{
	$getid = $_GET['id'];
	$select = mysql_query("select*from buku where id='$getid'");
	$sel = mysql_fetch_array($select);
}

?>

<div>
	<div>Add a book</div>
	<form action="" method="POST" enctype="multipart/form-data">
	<table width="100%">
		<tr>
			<td>Title</td>
			<td></td>
			<td><input type="text" value="<?php echo $sel['judul'];?>" name="title"/><input type="hidden" value="<?php echo $sel['id'];?>" name="id"/></td>
		</tr>
		<tr>
			<td>Cover</td>
			<td></td>
			<td><input type="file" value="<?php echo $sel['cover'];?>" name="cover"/></td>
		</tr>
		<tr>
			<td>Author</td>
			<td></td>
			<td><input type="text" value="<?php echo $sel['pengarang'];?>" name="author"/></td>
		</tr>
		<tr>
			<td>ISBN</td>
			<td></td>
			<td><input type="text" value="<?php echo $sel['isbn'];?>" name="isbn"/></td>
		</tr>
		<tr>
			<td>Price</td>
			<td></td>
			<td><input type="text" value="<?php echo $sel['harga'];?>" name="price"/></td>
		</tr>
		<tr>
			<td>Level</td>
			<td></td>
			<td><select type="text" name="level">
				<<?php
				$open = mysql_query("select*from level");
				while($sopen=mysql_fetch_array($open)){
				?>
				<option <?php if($sel['id_kelompok']==$sopen['id']){echo "selected";}?> value="<?php echo $sopen['id_kelompok'];?>"><?php echo $sopen['nama'];?></option></td>
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
				<option <?php if($sel['id_kategori']==$sopen['id']){echo "selected";}?> value="<?php echo $sopen['id'];?>"><?php echo $sopen['nama'];?></option>
				<?php
				}
				?>
				</select></td>
		</tr>
		<tr>
			<td>About the book</td>
			<td></td>
			<td><textarea type="text" name="about"><?php echo $sel['about'];?></textarea></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td><button type="submit" name="btn">Submit</button></td>
		</tr>
	</table>
	</form>
</div>