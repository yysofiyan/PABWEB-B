<?php 

date_default_timezone_set("ASIA/JAKARTA");

$server = "localhost";
$username = "root";
$password = "";
$database = "db_sekolah";

$db = mysqli_connect($server, $username, $password, $database);                                                                                                                                             // koneksi database - Danni Ramdhani Samsudin

if (!$db) {
    die('Koneksi Database Gagal : '.mysqli_connect_error());
}

?>