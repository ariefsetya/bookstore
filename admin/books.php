<?php
	if(!isset($_GET['p'])){
		echo "<script>window.location='?menu=books&p=all'</script>";
	}
	else if($_GET['p']=="all"){
		include "books/all.php";
	}
	else if($_GET['p']=="new"){
		include "books/add.php";
	}
	else if($_GET['p']=="edit"){
		include "books/edit.php";
	}
	else if($_GET['p']=="remove"){
		include "books/remove.php";
	}
	?>
