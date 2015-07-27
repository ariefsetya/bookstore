<?php
	if(!isset($_GET['p'])){
		echo "<script>window.location='?menu=category&p=all'</script>";
	}
	else if($_GET['p']=="all"){
		include "category/all.php";
	}
	else if($_GET['p']=="new"){
		include "category/add.php";
	}
	else if($_GET['p']=="edit"){
		include "category/edit.php";
	}
	else if($_GET['p']=="remove"){
		include "category/remove.php";
	}
	?>
