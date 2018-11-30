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
	<form action="save_absenadmin.php" method="post">
<br>
<br>
	<center><h2> <b> Input Absensi Admin </b> </h2> 
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
 		 <input type="radio" name="status" value="alpha"> ALPHA 
     <br>

  		  <input type="Submit" value="save" >
		
	
</center>
<br>
<br>
<center><h2><strong><font color ="green">Data Absen</font></strong></h2>



  <table border='2' class="table table-striped"> 
    <tr>
      <th>No.</th>
      <th>Nama</th>
      <th>Keterangan</th> 
    </tr> 


    <?php
    include 'config.php';
    $query = "select * from absenadmin order by id DESC";
    $cek = mysql_query($query);


    
    if(mysql_num_rows($cek) == 0){
      echo '<tr><td colspan="6">Tidak ada data!</td></tr>';   
    }else{  
      $no = 1;  
      while($data = mysql_fetch_assoc($cek)){ 
          echo '<td width=150>'.$no.'</td>';  
          echo '<td width=150>'.$data['nama'].'</td>'; 
          echo '<td width=150>'.$data['status'].'</td>';   
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

