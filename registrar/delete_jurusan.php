<?php
include('dbcon.php');
$id=$_GET['id'];
mysql_query("delete from jurusan where kode_jurusan='$id'")or die(mysql_error());
header('location:students.php');
?>