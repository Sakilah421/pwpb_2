<?php
$nama_a="Siti Mariam";
$umur_a= 16;
$tinggi_badan_a= 165;
$hobby_a="Bernyanyi";

$nama_b="Siti Nur Sakilah";
$umur_b= 16;
$tinggi_badan_b= 155;
$hobby_b="Dengerin Musik";

$nama_c ="Ramadhan Vidho";
$umur_c = 16;
$tinggi_badan_c = 160;
$hobby_c ="Grass Track";

$hasil = ($tinggi_badan_a + $tinggi_badan_b + $tinggi_badan_c)/3;
          ?>    
<!DOCTYPE html>
<html>
<head>
	<title>Tugas satu</title>
	<style type="text/css">
		body{
			background-image: url(background.jpg);
		background-size: cover;
		}
		ul{
				display: inline;
		float:left;
		padding: 20px;
		border:1px solid #fff;
	margin-top: 10px;
	transition: 0.6s ;
	font-family: arial;
	text-decoration: transparent;
		}
		li{
			display:inline;
		font-size: 20px;
		}
		 li a{
    	padding: 5px;
    	color:white;
    }
		.profile_1{
			float:left;
			width: 200px;
			height: 300px;
			border: 2px solid;
			display: inline-block;
			margin: 50px;
			padding: 50px;
			background-color: white;
		}
		.isi-kotak{
			text-align: center;		
		}
		.profile_2{
			width: 200px;
			height: 300px;
			border: 2px solid;
			display: inline-block;
			margin: 50px;
			padding: 50px;
			background-color: white;
		}
		.isi-kotak2{
			text-align: center;		
		}
		.profile_3{
			width: 200px;
			height: 300px;
			border: 2px solid;
			display: inline-block;
			margin: 50px;
			padding: 50px;
			background-color: white;
		}
		.isi-kotak3{
			text-align: center;
		}
		.card {
			text-align: center;
			margin: 100px;
		}
		.body{
			background-image: url(background.jpg);
		background-size: cover;
		}
	</style>
</head>
<body style="background-image: url(background.jpg) background-size:cover;">
	<header>
		<div class="main">
			<br>
			<br>
			<br>
			<br>
		<nav>
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="tugas satu.php">Tugas Satu</a></li>
					<li><a href="tugasdua.php">Tugas Dua</a></li>
					<li><a href="tugastiga.php">Tugas Tiga</a></li>
					<li><a href="tugasempat.php">Tugas Empat</a></li>
				</ul>
		</nav>		
	</div>
	</header>	
	<div class="card">
		<div class="profile_1">
			<div class="isi-kotak">
				
				<img src="mariam.jpg" width="150px" height="150px">
				 <br>
				 <ul>
				 <?php 
				 	echo "<li> Nama : $nama_a </li><br>";
				 	echo "<li>Umur :$umur_a tahun</li><br>";
				 	echo "<li>Tinggi : $tinggi_badan_a</li><br>";
				 	echo "<li>Hobi : $hobby_a </li><br>";
				 	?> 

				 </ul>
			</div>
		</div>
		<div class="profile_2">
			<div class="isi-kotak2">
				
				<img src="sakilah.jpg" width="130px" height="130px">
				 <br>
				 <br>
				 <ul>
				 <?php 
				 	echo "<li> Nama : $nama_b </li><br>";
				 	echo "<li>Umur :$umur_b tahun</li><br>";
				 	echo "<li>Tinggi : $tinggi_badan_b</li><br>";
				 	echo "<li>Hobi : $hobby_b </li><br>";
				 	?> 

				 </ul>
			</div>
		</div>
		<div class="profile_3">
			<div class="isi-kotak3">
				
				<img src="vidho.jpg" width="150px" height="150px">
				 <br>
				 <ul>
				 <?php 
				 	echo "<li> Nama : $nama_c </li><br>";
				 	echo "<li>Umur :$umur_c tahun</li><br>";
				 	echo "<li>Tinggi : $tinggi_badan_c</li><br>";
				 	echo "<li>Hobi : $hobby_c </li><br>";
				 	?> 

				 </ul>
			</div>
		</div>
	</div>
	<div class="footer">
		<?php
				echo "<center> Hasil Tinggi rata rata : $hasil cm </center>";
		  ?>
</body>
</html>
