<?php
include('dbcon.php');
$id=$_GET['id'];
mysql_query("delete from fakultas where kode_fakultas='$id'")or die(mysql_error());
header('location:subject.php');
?>