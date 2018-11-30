<?php
include 'config.php';

	$id_barang    = $_POST['id_barang'];
	$nama         = $_POST['nama'];
	$harga        = $_POST['harga'];
	$jumlah       = $_POST['jumlah'];
	$total        =  $harga * $jumlah;




	$query = "insert into transaksi(id,id_barang,nama,harga,jumlah,total,totalsemua) values (NULL,'".$id_barang."','".$nama."','".$harga."','".$jumlah."','".$total."','')";

	mysql_query($query);


	header("location:transaksi.php");
?>