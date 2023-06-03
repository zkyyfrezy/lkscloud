<?php 

require 'functions.php';

$conn = mysqli_connect("localhost", "root", "", "smklkscloud");


$id = $_GET['id_user'];

if ( hapus($id) > 0 ){
	echo "<script>
			alert('data berhasil dihapuskan');
			document.location.href = 'manajemen pengguna.php';
		</script>
		";
} else{
	echo "<script>
			alert('data berhasil dihapuskan');
			document.location.href = 'manajemen pengguna.php';
		</script>
		";
}



 ?>