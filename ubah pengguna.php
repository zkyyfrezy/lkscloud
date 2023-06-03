<?php 

    // Koneksi ke database
    $conn = mysqli_connect("localhost", "root", "", "smklkscloud");

    // Memeriksa apakah parameter id_pengguna telah dikirim melalui URL
    if (isset($_GET['id_user'])) {
        $id = $_GET['id_user'];

        // Mendapatkan data pengguna berdasarkan id_pengguna
        $query = "SELECT * FROM user WHERE id_user = '$id'";
        $result = mysqli_query($koneksi, $query);
        $data = mysqli_fetch_assoc($result);
    }

    // Memeriksa apakah form telah disubmit
    if (isset($_POST['submit'])) {
        $id = $_POST['id_user'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $namalengkap = $_POST['nama_lengkap'];
        $email = $_POST['email'];
        $level = $_POST['level'];
        $blokir = $_POST['blokir'];

        // Memperbarui data pengguna dalam database
        $query = "UPDATE user SET 
        			$username ='$username', 
        			$password = '$password',
        			$namalengkap = '$namalengkap',
        			$email = '$email',
        			$level = '$level',
        			$blokir = '$blokir'
        		WHERE id_user = '$id_'";
        $result = mysqli_query($koneksi, $query);

        if ($result) {
            echo "Data pengguna berhasil diperbarui.";
        } else {
            echo "Gagal memperbarui data pengguna: " . mysqli_error($koneksi);
        }
    }


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
	        <input type="hidden" name="id_user" value="<?php echo $data['id_user']; ?>">
	        <ul>
	        	<li>
	        		<label for="nama">Username :</label>
	        		<input type="text" name="username" value="<?php echo $data['username']; ?>">
	        	</li>
	        </ul>
	        <ul>
	        	<li>
	        		<label for="password">Password :</label>
	        		<input type="password" name="password" value="<?php echo $data['password']; ?>">
	        	</li>
	        </ul>
	        <ul>
	        	<li>
	        		<label for="nama lengkap">Nama Lengkap :</label>
	        		<input type="text" name="nama lengkap" value="<?php echo $data['nama_lengkap']; ?>">
	        	</li>
	        </ul>
	        <ul>
	        	<li>
	        		<label for="email">Email :</label>
	        		<input type="text" name="email" value="<?php echo $data['email']; ?>">
	        	</li>
	        </ul>
	        <ul>
	        	<li>
	        		<label>Level :</label>
	        		<input type="radio" name="level" value="<?php echo $data['level']; ?>">Admin
	        		<input type="radio" name="level" value="<?php echo $data['level']; ?>">User
	        	</li>
	        </ul>
	        <ul>
	        	<li>
	        		<label>Blokir :</label>
	        		<input type="radio" name="blokir" value="<?php echo $data['blokir']; ?>">Ya
	        		<input type="radio" name="blokir" value="<?php echo $data['blokir']; ?>">Tidak
	        	</li>
	        </ul>
	        
	        <input type="submit" name="submit" value="Ubah">
	    </form>

</body>
</html>