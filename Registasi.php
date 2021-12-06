<?php
require('koneksi.php');

if( isset($_POST['register']) ){

    if( registrasi($_POST) > 0 ){
        echo"
            <script>
                alert('User baru telah ditambahkan!');
            </script>
        ";
    }else{
        echo mysqli_error($conn);
    } 
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

<form action="" style="border:1px solid #ccc" method="post">
<div class="container">
    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="username"><b>Username</b></label>
    <input type="text" placeholder="Enter username" name="username" id="username" required>

    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" id="password" required>

    <label for="password2"><b>Konfirmasi Password</b></label>
    <input type="password" placeholder="Konfirmasi Password" name="password2" id="password2" required>
    <hr>
    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

    <button type="submit" name="register" class="registerbtn">Register</button>
  </div>
  
  <div class="container signin">
    <p>Already have an account? <a href="Login.php">Sign in</a>.</p>
  </div>
</form>
</body>
</html>
