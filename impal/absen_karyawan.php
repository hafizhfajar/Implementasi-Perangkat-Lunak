<!DOCTYPE html>
<html>
<head>
  <link href="css/bootstrap.css" rel="stylesheet">
  <link href="css/carousel.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <script src="js/jquery-3.2.1.js"></script>
  <script src="js/bootstrap.js"></script>
  <link rel="icon" href="img/passport.png">
	<title>Absen-ACIM</title>
</head>
<body>
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

	<form action="save_absenkaryawan.php" method="post">
	<center><h2> <b> Input Absensi Karyawan </b> </h2> 
		Nama &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;:
  		<input type="text" name="nama">
  		<br>
  		<br>
		Keterangan :
		&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
  		<input type="radio" name="status" value="sakit" checked> SAKIT 
  		&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
 		<input type="radio" name="status" value="izin"> IZIN 
 		&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
 		<input type="radio" name="status" value="alpha"> ALPHA <br>
 		<br>

  		  <input type="Submit" value="save" >
		
	

<br>
<br>
<h2><strong>Data Absen</strong></h2>



  <table border='2 ' class="table table-striped"> 
    <tr>
      <th>No.</th>
      <th>Nama</th>
      <th>Keterangan</th> 
    </tr> 


    <?php
    include 'config.php';
    $query = "select * from absenkaryawan order by id DESC";
    $cek = mysql_query($query);


    
    if(mysql_num_rows($cek) == 0){
      echo '<tr><td colspan="6">Tidak ada data!</td></tr>';   
    }else{  
      $no = 1;  
      while($data = mysql_fetch_assoc($cek)){ 
          echo '<td>'.$no.'</td>';  
          echo '<td>'.$data['nama'].'</td>'; 
          echo '<td>'.$data['status'].'</td>';   
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

