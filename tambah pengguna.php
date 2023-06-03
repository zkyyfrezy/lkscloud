<?php 

require 'functions.php';

// --------------------------------------------

if ( isset($_POST["submit"]) ) {	
	if ( tambah($_POST) > 0 ){
		echo "
		<script>
			alert('data berhasil ditambahkan');
			document.location.href = 'manajemen pengguna.php';
		</script>
		";
	} else {
		echo "
		<script>
			alert('data gagal ditambahkan');
			document.location.href = 'manajemen pengguna.php';
		</script>
		";
	}

// ----------------------------------------------

}
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title>tambah pengguna</title>
 	<link rel="stylesheet" type="text/css" href="tambah pengguna.css">
 </head>
 <body>

 	<nav class="navbar">
        <ul>
            <li>SMK LKS ACEH</li>
        </ul>
    </nav>

  <div class="sidebar">
    <ul>
      <li><a href="dashboard.html">beranda</a></li>
      <li><a href="manajemen pengguna.php">manajemen pengguna</a></li>
      <li><a href="berita.php">berita</a></li>
      <li><a href="kategori.php">kategori</a></li>
      <li><a href="profil.php">profil</a></li>
      <li><a href="program.php">program keahlian</a></li>
      <li><a href="fasilitas.php">fasilitas</a></li>
      <li><a href="download.php">download</a></li>
      <li><a href="album.php">album</a></li>
      <li><a href="logout.php">logout</a></li>
    </ul>
  </div>

  <div class="tambah">
  	<div class="kotak">
	 		<h1>Tambahkan Data Anda</h1>
					<form action="" method="post">
						
						<ul>
							<li>
								<label for="username">Username         : </label>
								<input type="text" name="username" id="username" required>
							</li>
							<li>
								<label for="password">Password         : </label>
								<input type="Password" name="Password" id="Password" required>
							</li>
							<li>
								<label for="nama lengkap">Nama Lengkap : </label>
								<input type="text" name="nama lengkap" id="nama lengkap" required>
							</li>
							<li>
								<label for="email">Email               : </label>
								<input type="text" name="email" id="email" required>
							</li>
							<li>
								<label for="level">Level               : </label>
								<input type="radio" name="level" value="Admin" id="level" checked >Admin
								<input type="radio" name="level" value="user" id="level" >User
							</li>
							<li>
								<label for="blokir">Blokir          : </label>
								<input type="radio" name="blokir" value="Y" id="blokir" >Ya
								<input type="radio" name="blokir" value="N" id="blokir" checked >Tidak
							</li>

						 	<li>
								<button type="submit" name="submit">kirimkan !</button>
							</li> 


						</ul>

					</form>
		</div>
 </div>

 </body>
 </html>