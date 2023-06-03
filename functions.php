<?php 
$conn = mysqli_connect("localhost", "root", "", "smklkscloud");

// ------------------------------------------------------------------------------

function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ( $row = mysqli_fetch_assoc($result) ) 
        { $rows[] = $row;
    }
    return $rows;
}

// ------------------------------------------------------------------------------

function tambah($data) {
    global $conn;
   
    $username = htmlspecialchars($data['username']) ;
    $password = htmlspecialchars($data['password']) ;
    $namalengkap = htmlspecialchars($data['nama_lengkap']) ;
    $email = htmlspecialchars($data['email']) ;
    $level = htmlspecialchars($data['level']) ;
    $blokir =htmlspecialchars($data['blokir']) ;

    $query = "INSERT INTO user
                    value ( '', '$username','$password', '$namalengkap', '$email', '$level', '$blokir')
                    ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}


// ----------------------------------------------------------------------------------

function hapus($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM user WHERE id_user = $id");


    return mysqli_affected_rows($conn);
}



 ?>