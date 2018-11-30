<?php
include 'config.php';

$nama           = $_POST['nama'];
$status         = $_POST['status'];


$query = "insert into absenkaryawan(id,nama,status) values (NULL,'".$nama."','".$status."')";
mysql_query($query);

header("location:absen_karyawan.php");
?>