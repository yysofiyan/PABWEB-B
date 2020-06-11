<?php
// set default_timezone
date_default_timezone_set("ASIA/JAKARTA");

// deklarasi parameter koneksi
$server      = "localhost";
$username    = "root";
$password    = "";
$database    = "db_sekolah";

// koneksi database
$db = mysqli_connect($server, $username, $password, $database);

// cek koneksi
if (!$db) {
    // cek koneksi gagal, tampilkan pesan gagal
    die('koneksi Database Gagal : '.mysqli_connect_error());
}
?>    
