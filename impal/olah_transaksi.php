<?php
    include 'config.php';
    $query = "select * from transaksi order by id DESC";
    $cek = mysql_query($query);


    
    if(mysql_num_rows($cek) == 0){
      echo '<tr><td colspan="6">Tidak ada data transaksi!</td></tr>';   
    }else{  
      $totalsemua = 0;  
      while($data = mysql_fetch_assoc($cek)){ 

          $totalsemua = $totalsemua + $data['total'];
        
        
      }
      
    }





    
    $query = "insert into totalharga (id,totalsemua) values (NULL,'".$totalsemua."')";

    mysql_query($query);


    header("location:transaksi.php");
?>