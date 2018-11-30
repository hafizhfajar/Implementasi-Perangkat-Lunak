<?php 
session_start();
include 'config.php';
 
$username = $_POST['username'];
$password = $_POST['password'];


$query = "select *from akun_login where username='".$username."' and password='".$password."'";
$cek = mysql_query($query);
$data = mysql_fetch_array($cek);

if($password == $data['password']){
	$_SESSION['jabatan'] = $data ['jabatan'];
	$_SESSION['username'] = $data['username'];
	if($data['jabatan'] ==  "admin"){
		header('location: menu_admin.php');
	}
	elseif ($data['jabatan'] == "karyawan") {
		header('location: menu_karyawan.php');
	}
	else {
		echo 'Password Tidak Sama, Silahkan Ulangi !';
	}
}else{
	echo 'Username atau Password salah, Silahkan Ulangi ! ';
	echo 'back to login -->' ;
	
}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<a href="index.php">LOGIN</a>
</body>
</html>