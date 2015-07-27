<?php

	if(!isset($_GET['p'])){
		echo "<script>window.location='?menu=messages&p=all'</script>";
	}
	else if($_GET['p']=="all"){
		include "messages/all.php";
	}
	else if($_GET['p']=="edit"){
		include "messages/edit.php";
	}
	else if($_GET['p']=="remove"){
		include "messages/remove.php";
	}
	?>
