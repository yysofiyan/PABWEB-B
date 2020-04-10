<?php
date_default_timezone_set("ASIA/JAKARTA");
$server="localhost";
$username="id13108843_db_sekolah";
$password="Abdulyusup1@@";
$database="id13108843_abdulyusup";

$db=mysqli_connect($server, $username, $password, $database);

if(!$db){

    die('koneksi database gagal :'.mysqli_connect_error());
}
?>