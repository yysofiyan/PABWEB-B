<?php
date_default_timezone_set("ASIA/JAKARTA");
$server="localhost";
$username="ramdan";
$password="Indraamd1@@@";
$database="haha";

$db=mysqli_connect($server, $username, $password, $database);

if(!$db){

    die('koneksi database gagal :'.mysqli_connect_error());
}
?>