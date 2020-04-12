<?php
date_default_timezone_set("ASIA/JAKARTA");
$hostname	= "localhost";
$username = "id12822124_root";
$password = "=<O42WK~bIy9#on]";
$database = "id12822124_db_sekolah"; 
$db = mysqli_connect($hostname, $username, $password, $database);
if (!$db) {
die('Koneksi Database Gagal : '.mysqli_connect_error());
}
?>