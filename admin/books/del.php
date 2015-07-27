<?php
include "../koneksi/koneksi.php";
$id = $_GET['id'];
mysql_query("delete from buku where id='$id'");
header("location:../?menu=books&p=all");
?>