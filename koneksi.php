<?php 
//menyambungkan Ke DB (Database MYSQL tanpa adanya password/Passwordnya dikosongi )
$conn = mysqli_connect("localhost","root","","Name_database");

// function Registrasi
function registrasi($data){
    global $conn;

    $username = strtolower( stripslashes($data['username']) );
    $password = mysqli_real_escape_string($conn,$data['password']);
    $password2 = mysqli_real_escape_string($conn,$data['password2']);

    // Username sudah atau belum
     $result = mysqli_query($conn,"SELECT username FROM Name_Table WHERE username = '$username'");

     if( mysqli_fetch_assoc($result) ){
        echo"
        <script>
            alert('Username Sudah terdaftar');
        </script>";

        return false;
     }

    // Cek konfirmasi password
    if( $password !== $password2){
        echo"
        <script>
            alert('Konfirmasi Password tidak sesuai');
        </script>";

        return false;
    }

    // Enskripsi Password
        $password = password_hash($password, PASSWORD_DEFAULT);
  
    // Tambahkan userbaru ke Database
        mysqli_query($conn,"INSERT INTO Name_Table VALUES (NULL,'$username','$password')");
        return mysqli_affected_rows($conn);

}
?>
