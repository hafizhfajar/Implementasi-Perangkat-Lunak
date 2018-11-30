<?php 

include 'config.php';
	$id 			= $_POST['id'];
	$nama           = $_POST['nama'];
	$ttl           	= $_POST['ttl'];
	$alamat        	= $_POST['alamat'];
	$telp  			= $_POST['telp'];
	$jeniskelamin   = $_POST['jeniskelamin'];

	mysql_query("UPDATE biodataadmin SET nama='$nama', ttl='$ttl', alamat='$alamat', telp='$telp', jeniskelamin='$jeniskelamin' WHERE id='$id'");

	header("location:biodata_admin.php?pesan=update");

?>