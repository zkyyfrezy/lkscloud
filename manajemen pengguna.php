<?php 
 
require 'functions.php';

$conn = mysqli_connect("localhost", "root", "", "smklkscloud");

$resault = mysqli_query($conn, "SELECT * FROM user");

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title>manajemen pengguna</title>
    <link rel="stylesheet" type="text/css" href="manajemen pengguna.css">
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


<div class="mp">	
    <h1>MANAJEMEN PENGGUNA</h1>

    <a href="tambah pengguna.php"><input type="submit" value="tambah pengguna"></a>
        <br>
     <table style="margin-left: auto;  margin-right:auto" border="2" cellpadding="10" cellspacing="0">
        <br>
        <tr style="background-color: lightblue;">
                <th>No</th>
                <th>Username</th>
                <th>Nama Legkap</th>
                <th>Email</th>
                <th>Level</th>
                <th>Blokir</th>
                <th>Aksi</th>    
        </tr>  

        <?php $i =1; ?>
        <?php while( $row = mysqli_fetch_assoc ($resault) ): ?>
            <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $row['username'] ; ?></td>
                <td><?php echo $row['nama_lengkap']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['level']; ?></td>
                <td><?php echo $row['blokir'] ?></td>
                <td>
                   <a style ="text-decoration: none;" href="ubah pengguna.php">✏️</a>
                   <a style ="text-decoration: none;" href="hapus pengguna.php?id_user=<?php echo $row['id_user']; ?>"> ❌</a>
                </td>
            </tr>
        <?php $i++; ?> 
        <?php endwhile; ?>

    </table>

</div>
 </body>
 </html>