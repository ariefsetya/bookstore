<?php

	if(!isset($_GET['p'])){
		echo "<script>window.location='?menu=level&p=all'</script>";
	}
	else if($_GET['p']=="all"){
		include "level/all.php";
	}
	else if($_GET['p']=="new"){
		include "level/add.php";
	}
	else if($_GET['p']=="edit"){
		include "level/edit.php";
	}
	else if($_GET['p']=="remove"){
		include "level/remove.php";
	}
	?>
