<?php
include "../koneksi/koneksi.php";
$id = $_GET['id'];
mysql_query("delete from messages where id='$id'");
header("location:../?menu=messages&p=all");
?>