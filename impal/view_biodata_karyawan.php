<!DOCTYPE html>
<html>
<head>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/carousel.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script src="js/jquery-3.2.1.js"></script>
    <script src="js/bootstrap.js"></script>
    <link rel="icon" href="img/passport.png">
  <title>Biodata-ACIM</title>
</head>
<body background="minimarket.jpg">    
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
                  <li><a href="menu_admin.php">Menu Admin </a></li>
                  <li><a href="biodata_admin.php">Biodata </a></li>
                  <li><a href="absen_admin.php"> Absen Admin </a></li>
                  <li><a href="view_transaksi.php"> View Transaksi </a></li>
                  <li><a href="view_absen_karyawan.php"> View Absen Karyawan</a></li>
                  <li><a href="view_biodata_karyawan.php"> View Biodata Karyawan</a></li>
                  <li><a href="index.php" > Logout </a></li>
                 </ul>
            </div>
          </div>
        </nav>
        <br>
        <br>
        <br>
  
  
<center><h2><strong>Biodata milik Karyawan</strong></h2>
<br>





  <table border='2'  class="table table-striped"> 
    <tr>
      <th>No.</th>
      <th>Nama</th>
      <th>TTL</th>
      <th>Alamat</th>
      <th>No. Telp</th>
      <th>Jenis Kelamin</th>   
    </tr> 


    <?php
    include 'config.php';
    $query = "select * from biodatakaryawan order by id DESC";
    $cek = mysql_query($query);


    
    if(mysql_num_rows($cek) == 0){
      echo '<tr><td colspan="6">Tidak ada data!</td></tr>';   
    }else{  
      $no = 1;  
      while($data = mysql_fetch_assoc($cek)){ 
          echo '<td>'.$no.'</td>';  
          echo '<td>'.$data['nama'].'</td>'; 
          echo '<td>'.$data['ttl'].'</td>';  
          echo '<td>'.$data['alamat'].'</td>'; 
          echo '<td>'.$data['telp'].'</td>'; 
          echo '<td>'.$data['jeniskelamin'].'</td>'; 
          echo '<td><a href="edit_biokar_admin.php?id='.$data['id'].'">Edit</a> </td>'; 
          echo '</tr>';
        
        $no++;  
      }
      
    }

    ?>

  </table>
</center>






  <nav>
    <ul>
      <br>  
    </ul>
  </nav>







</body>
</html>
