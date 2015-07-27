<?php
include "../koneksi/koneksi.php";
$id = $_GET['id'];
mysql_query("delete from kategori where id='$id'");
header("location:../?menu=category&p=all");
?>