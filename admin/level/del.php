<?php
include "../koneksi/koneksi.php";
$id = $_GET['id'];
mysql_query("delete from level where id='$id'");
header("location:../?menu=level&p=all");
?>