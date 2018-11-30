<?php
    include 'config.php';
    $query = "select * from transaksi order by id DESC";
    $cek = mysql_query($query);


    
    if(mysql_num_rows($cek) == 0){
      echo '<tr><td colspan="6">Tidak ada data transaksi!</td></tr>';   
    }else{  
      $no = 1;  
      while($data = mysql_fetch_assoc($cek)){ 
        
        $query = "insert into selesaitransaksi(id,id_barang,nama,harga,jumlah,total,totalsemua) values (NULL,'".$data['id_barang']."','".$data['nama']."','".$data['harga']."','".$data['jumlah']."','".$data['total']."','')";

		mysql_query($query);

		mysql_query("DELETE FROM transaksi")or die(mysql_error());


      }
     
    }

?>



<?php
 include 'config.php';
    $query = "select * from totalharga order by id DESC";
    $cek = mysql_query($query);


    
    if(mysql_num_rows($cek) == 0){
      echo '<tr><td colspan="6">Tidak ada data transaksi!</td></tr>';   
    }else{  
      $no = 1;  
      while($data = mysql_fetch_assoc($cek)){ 
        

		mysql_query("DELETE FROM totalharga")or die(mysql_error());


      }
     
    }
    header("location:transaksi.php");
?>