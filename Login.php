<?php
session_start();

//jika sudah login maka kembalikan ke halaman utama 
if( isset($_SESSION["login"]) ){
    header("Location:index.php");
   exit;
}
// Menghubungkan ke database
require('koneksi.php');
// 
if( isset($_POST['login']) ){

    $username = $_POST['username'];
    $password = $_POST['password'];


   $result = mysqli_query($conn,"SELECT * FROM user WHERE username = '$username'");
    // Cek Username
    if ( mysqli_num_rows($result) === 1 ){

        // Cek password
        $row = mysqli_fetch_assoc($result);
        if(password_verify($password,$row['password']) ){
          
            // Pasang Session
            $_SESSION["login"] = true ;
            header("location: index.php");
            exit;
          
        }
    }

    
    $error = true;

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
  
</head>
<body>
    <form action="" style="border:1px solid #ccc" method="post">
   
<div class="container">

    <h1>LOGIN</h1>
    <p>Please fill in this form to create an account.</p>
    <?php if(isset($error) ): ?>
                <p class="error">Username / Password Salah</p>
            <?php endif;?>
    <hr>

        <label for="username"><b>Username</b></label>
        <input type="text" placeholder="Enter username" name="username" id="username" required>

        <label for="password"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="password" id="password" required>

    <hr>
    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

    <button type="submit" name="login" class="registerbtn">Login</button>
  </div>
  
  <div class="container signin">
    <p>Belum Punya Akun? <a href="Registasi.php">Daftar</a>.</p>
  </div>
</form>
</body>
</html>
