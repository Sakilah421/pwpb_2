<!DOCTYPE html>
<html>
<head>
	<title>Tugas Dua</title>
	<style type="text/css">
		img {
			width: 120%;
			height: 120%;
		}
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
			width: 200px;
			height: 300px;
			border: 2px solid;
			display: inline-block;
			margin: 50px;
			padding:50px;
			background-color: white;		
		}
		.isi-kotak{
			margin: 20px;
			text-align: center;		
		}
		.profile_2{
			width: 200px;
			height: 300px;
			border: 2px solid;
			display: inline-block;
			margin: 50px;
			padding:50px;
			background-color: white;
		}
		.isi-kotak2{
			margin: 20px;
			text-align: center;		
		}
		.profile_3{
			width: 200px;
			height: 300px;
			border: 2px solid;
			display: inline-block;
			margin: 50px;
			padding:50px;
			background-color: white;
		}
		.isi-kotak3{
			margin: 18px;
			text-align: center;
		}
		
		.profile_4{
			width: 200px;
			height: 300px;
			border: 2px solid;
			display: inline-block;
			margin: 50px;
			padding:50px;
			background-color: white;
		}
		.isi-kotak4{
			margin: 18px;
			text-align: center;
		}
	
		.profile_5{
			width: 200px;
			height: 300px;
			border: 2px solid;
			display: inline-block;
			margin: 50px;
			padding:50px;
			background-color: white;
		}
		.isi-kotak5{
			margin: 18px;
			text-align: center;
		}
		.profile_6{
			width: 200px;
			height: 300px;
			border: 2px solid;
			display: inline-block;
			margin: 50px;
			padding:50px;
			background-color: white;
		}
		.isi-kotak6{
			margin: 18px;
			text-align: center;
		}
		.card {
			text-align: center;
			display: inline-block;
		}
	</style>
</head>
<body style="background-image: url(background.jpg);">
	<header>
		<div class="main">
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
				 <br>

				 <?php
				 $nama_bangun_ruang_a= "Kubus";
				 $volume="sisi x sisi x sisi";
				 $luas="6 x (sisi x sisi)";
				 $keliling_kubus="12 x rusuk";
				 $gambar = "kubus.gif";

                 echo "<img src=kubus.gif>";
  				 echo "$nama_bangun_ruang_a <br>";
				 echo "Volume : $volume <br>";
				 echo "Luas : $luas <br>";
				 echo "Keliling : $keliling_kubus <br> ";				 
				 ?>

			</div>
		</div>
		<div class="profile_2">
			<div class="isi-kotak2">
				 <br>

				 <?php
				 $nama_bangun_ruang_b= "Kerucut";
				 $volume="1/3 x 22/7 x r2 x t ";
				 $luas="(22/7 x r2) + (22/7 x r x s)";
				 $gambar = "kerucut.gif";

                 echo "<img src=kerucut.gif>";
  				 echo "$nama_bangun_ruang_b <br>";
				 echo "Volume : $volume <br>";
				 echo "Luas : $luas <br>";				 
				 ?>

			</div>
		</div>
	    <div class="profile_3">
			<div class="isi-kotak3">
				 <br>
				 
				 <?php
				 $nama_bangun_ruang_c= "Prisma segitiga";
				 $volume="luas alas segitiga x tinggi atau V = 1/2 X P l x t";
				 $luas_permukaan="keliling alas segitiga x tinggi + (2 x luas alas segitiga";
				 $gambar = "prisma.gif";

                 echo "<img src=prisma.gif>";
  				 echo "$nama_bangun_ruang_c <br>";
				 echo "Volume : $volume <br>";
				 echo "luas_permukaan : $luas <br>";
				 ?>
				 
			</div>	 	
			</div>
		   <div class="profile_4">
			<div class="isi-kotak4">
				 <br>
				 
				 <?php
				 $nama_bangun_ruang_d= "Limas Segiempat";
				 $volume="V = 1/3 x luas alas x tinggi";
				 $luas_permukaan="luas alas + luas selubung limas";
				 $gambar = "limas.gif";

                 echo "<img src=limas.gif>";
  				 echo "$nama_bangun_ruang_d <br>";
				 echo "Volume : $volume <br>";
				 echo "luas_permukaan : $luas <br>";
				 ?>
				 
				 	
			</div>
		 <div class="profile_5">
			<div class="isi-kotak5">
				<br>
				 
				 <?php
				 $nama_bangun_ruang_e= "Tabung";
				 $volume="luas alas x tinggi atau V = 22/7 x r2 x t";
				 $luas_permukaan="(2xluas alas)+(keliling alas x tinggi)";
				 $gambar = "tabung.gif";

                 echo "<img src=tabung.gif>";
  				 echo "$nama_bangun_ruang_e <br>";
				 echo "Volume : $volume <br>";
				 echo "luas_permukaan : $luas <br>";
				 ?>
				 
				
			</div>
		</div>
				 <div class="profile_6">
			<div class="isi-kotak6">
				 <br>
				 
				 <?php
				 $nama_bangun_ruang_f="Lingkaran";
				 $volume="4/3 x 22/7 x r3";
				 $luas_permukaan="4 x 22/7 x r2";
				 $gambar = "lingkaran.gif";

                 echo "<img src=lingkaran.gif>";
  				 echo "$nama_bangun_ruang_f <br>";
				 echo "Volume : $volume <br>";
				 echo "luas_permukaan : $luas <br>";
				 ?>
				 
				 	
			</div>
		</div>
	
	</div>
		
</body>
</html>
