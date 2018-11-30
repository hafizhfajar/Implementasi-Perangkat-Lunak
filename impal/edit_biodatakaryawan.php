<!DOCTYPE html>
<html>
<head>
	<title>Edit Biodata - ACIM</title>
</head>
<body>
	
	<h2>Edit Biodata</h2>

	<?php 
	include "config.php";
	$id = $_GET['id'];
	$query_mysql = mysql_query("SELECT * FROM biodatakaryawan WHERE id='$id'")or die(mysql_error());
	$nomor = 1;
	while($data = mysql_fetch_array($query_mysql)){
	?>
	<form action="update_biodatakaryawan.php" method="post">		
		<table>
			<tr>
				<td>Nama</td>
				<td>
					<input type="hidden" name="id" value="<?php echo $data['id'] ?>">
					<input type="text" name="nama" value="<?php echo $data['nama'] ?>">
				</td>					
			</tr>	
			<tr>
				<td>TTL</td>
				<td><input type="text" name="ttl" value="<?php echo $data['ttl'] ?>"></td>					
			</tr>	
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat" value="<?php echo $data['alamat'] ?>"></td>					
			</tr>
			<tr>
				<td>No. Telp</td>
				<td><input type="text" name="telp" value="<?php echo $data['telp'] ?>"></td>					
			</tr>	
			<tr>
				<td>Jenis Kelamin [Male/Female]</td>
				<td><input type="text" name="jeniskelamin" value="<?php echo $data['jeniskelamin'] ?>"></td>					
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>					
			</tr>				
		</table>
	</form>
	<?php } ?>
</body>
</html>