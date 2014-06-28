<?php
include('dbcon.php');
$id=$_GET['id'];
mysql_query("delete from perguruan_tinggi where id_universitas='$id'")or die(mysql_error());
header('location:course.php');
?>