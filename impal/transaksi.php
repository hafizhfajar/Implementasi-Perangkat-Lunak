<!DOCTYPE html>
<html>
<head>
  <link href="css/bootstrap.css" rel="stylesheet">
  <link href="css/carousel.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <script src="js/jquery-3.2.1.js"></script>
  <script src="js/bootstrap.js"></script>
  <link rel="icon" href="img/passport.png">
  <title>Menu Transaksi-ACIM</title>
</head>
<body background="">

  <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" 
            data-toggle="collapse" data-target="#navbar">
                   <span class="icon-bar"></span>
                   <span class="icon-bar"></span>
                   <span class="icon-bar"></span>
                   <span class="icon-bar"></span>
                   <span class="icon-bar"></span>
            </button>

          </div>

      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
      <li><a href="menu_karyawan.php">Menu Utama </a></li>
      <li><a href="transaksi.php">Transaksi </a></li>
      <li><a href="biodata_karyawan.php">Biodata </a></li>
      <li><a href="absen_karyawan.php">Absen </a></li>
      <li><a href="index.php">LOGOUT! </a></li>
        </ul>
      </div>
    </div>
</nav>
<br>
<br>
  <form action="save_transaksi.php" method="post">
 <center> <h2> <b> Menu Transaksi </b> </h2> 
    ID Barang &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;:
      <input type="text" name="id_barang">
      <br>
    Nama Barang &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;:
      <input type="text" name="nama">
      <br>
    Harga Barang &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;:
      <input type="text" name="harga">
      <br>
    Jumlah Barang &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;:
      <input type="text" name="jumlah">
      <br>

    
    <br>

        <input type="Submit" value="Tambah" >
    </form>

    
  


<br>
<br>
<strong>Data Belanja</strong>
  <table border='2' class="table table-striped"> 
    <tr>
      <th>No.</th>
      <th>ID Barang</th>
      <th>Nama</th>
      <th>Harga</th>
      <th>Jumlah</th>
      <th>Total</th> 
    </tr> 


    <?php
    include 'config.php';
    $query = "select * from transaksi order by id DESC";
    $cek = mysql_query($query);
    
    if(mysql_num_rows($cek) == 0){
      echo '<tr><td colspan="6">Tidak ada data transaksi!</td></tr>';   
    }else{  
      $no = 1;  
      while($data = mysql_fetch_assoc($cek)){ 
          echo '<td>'.$no.'</td>';  
          echo '<td>'.$data['id_barang'].'</td>'; 
          echo '<td>'.$data['nama'].'</td>';
          echo '<td>'.$data['harga'].'</td>';
          echo '<td>'.$data['jumlah'].'</td>';
          echo '<td>'.$data['total'].'</td>'; 
          echo '</tr>';
        
        $no++;  
      }
      
    }

    ?>

  </table>







<form action="olah_transaksi.php" method="post">

<br>

        <input type="Submit" value="Selesai" >
</form>









<strong>Total Harga Semua Belanja</strong>
  <table border='1'> 
    <tr>
      <th>Harga Total</th>
    </tr> 


    <?php
    include 'config.php';
    $query = "select * from totalharga order by id DESC";
    $cek = mysql_query($query);


    
    if(mysql_num_rows($cek) == 0){
      echo '<tr><td colspan="6">Belum selesai</td></tr>';   
    }else{    
      while($data = mysql_fetch_assoc($cek)){ 
 
          echo '<td>'.$data['totalsemua'].'</td>'; 
         
          echo '</tr>';
        
      }
      
    }

    ?>
  
</table>  











<form action="selesai_transaksi.php" method="post">

<br>

        <input type="Submit" value="Transaksi Baru" >
</form>
</center>










  <nav>
    <ul>
      <br>  
    </ul>
  </nav>
  
</body>
</html>

