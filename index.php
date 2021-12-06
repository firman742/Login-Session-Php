<?php

    // Pasang session
    session_start();

    // Jika tidak login maka tampilkan halaman Login Terlebih Dahulu     
    if( !isset($_SESSION["login"]) ){
        header("Location:Login.php");
       exit;
    }
    // Keneksi ke Database 
    require('koneksi.php');
    // Ambil Data Dari Tabel di Database     
    $mahasiswa = query("SELECT * FROM Name_Table")

?>


<!-- KONTEN WEB / APLIKASI KITA -->
<html>
  <head>
    <title>JUDUL WEB</title>
    
  </head>
  <body>
    .
    .
    .
  </body>
</html>
