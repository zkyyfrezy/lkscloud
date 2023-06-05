<?php 

require 'functions.php';

// Koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "smklkscloud");

   // query data siswa berdasarkan id
$user = query("SELECT * FROM user WHERE id_user = $id")[0];
$resault = mysqli_query($con("SELECT * FROM user"));


while ($user = mysqli_fetch_assoc($resault) ) {
	var_dump($user);
}



// cek apakah tombol submit sudah ditekan atau belum
if ( isset($_POST["submit"]) ) {
	
// cek apakah data berhasil diubah atau tidak
	if ( ubah($_POST) > 0 ){
		echo "
		<script>
			alert('data berhasil diubah');
			document.location.href = 'index.php';
		</script>
		";
	} else {
		echo "
		<script>
			alert('data gagal diubah');
			document.location.href = 'index.php';
		</script>
		";
	}


}
 ?>

 ?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>form ubah pengguna</title>
</head>
<body>

	<h2>Form Ubah Pengguna</h2>
	    <form action="" method="post">
	        <input type="hidden" name="id_user" value="<?php echo $user['id_user']; ?>">
	        <ul>
	        	<li>
	        		<label for="nama">Username :</label>
	        		<input type="text" name="username" value="<?php echo $user['username']; ?>">
	        	</li>
	        </ul>
	        <ul>
	        	<li>
	        		<label for="password">Password :</label>
	        		<input type="password" name="password" value="<?php echo $user['password']; ?>">
	        	</li>
	        </ul>
	        <ul>
	        	<li>
	        		<label for="nama lengkap">Nama Lengkap :</label>
	        		<input type="text" name="nama lengkap" value="<?php echo $user['nama_lengkap']; ?>">
	        	</li>
	        </ul>
	        <ul>
	        	<li>
	        		<label for="email">Email :</label>
	        		<input type="text" name="email" value="<?php echo $user['email']; ?>">
	        	</li>
	        </ul>
	        <ul>
	        	<li>
	        		<label>Level :</label>
	        		<input type="radio" name="level" value="<?php echo $user['level']; ?>">Admin
	        		<input type="radio" name="level" value="<?php echo $user['level']; ?>">User
	        	</li>
	        </ul>
	        <ul>
	        	<li>
	        		<label>Blokir :</label>
	        		<input type="radio" name="blokir" value="<?php echo $user['blokir']; ?>">Ya
	        		<input type="radio" name="blokir" value="<?php echo $user['blokir']; ?>">Tidak
	        	</li>
	        </ul>
	        
	        <input type="submit" name="submit" value="Ubah">
	    </form>

</body>
</html>