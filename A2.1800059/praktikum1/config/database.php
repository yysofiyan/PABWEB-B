<?php
date_default_timezone_set("ASIA/JAKARTA");
$server="localhost";
$username="id13126711_wildan";
$password="Indraamd1@@@";
$database="id13126711_db_sekolah";

$db=mysqli_connect($server, $username, $password, $database);

if(!$db){

    die('koneksi database gagal :'.mysqli_connect_error());
}
?>