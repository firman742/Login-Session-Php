<?php
// cek session
session_start();

// jadikan nilai session kosong terlebih dahula
$_SESSION = [];

// Lalu Hancurkan session tersebut
session_unset();
session_destroy();

// Kembalikan ke halaman Login Lagi untuk bisa masuk ke Halaman Utama
header("Location:Login.php");
exit;
?>
