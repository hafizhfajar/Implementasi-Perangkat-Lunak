<?php

$host       =   "localhost";
$user       =   "root";
$password   =   "";
$database   =   "tubes_impal";


$koneksi = mysql_connect($host, $user, $password, $database) or die(mysql_error());
 

$db = mysql_select_db($database, $koneksi);
 


?>