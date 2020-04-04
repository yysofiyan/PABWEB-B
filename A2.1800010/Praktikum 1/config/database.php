<?php
date_default_timezone_set("ASIA/JAKARTA");
$server="localhost";
$username="id13145521_ahmad";
$password="Nawawi123@@@";
$database="id13145521_mh";

$db=mysqli_connect($server, $username, $password, $database);

if(!$db){

    die('koneksi database gagal :'.mysqli_connect_error());
}
?>