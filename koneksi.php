<?php
$host = "localhost";     // server database
$user = "root";          // username default XAMPP
$pass = "";              // password default (kosong)
$db   = "manajemengudang";        // nama database kamu

$koneksi = mysqli_connect($host, $user, $pass, $db);

// cek koneksi
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
} else {

}
?>