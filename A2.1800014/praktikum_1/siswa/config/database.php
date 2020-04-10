<?php

date_default_timezone_set('Asia/Jakarta');

$server   = "localhost";
$username = "root";
$password = "";
$database = "db_sekolah";

$db = mysqli_connect($server,$username,$password,$database);

if(!$db){
    die('Koneksi Databse Gagal :'. mysqli_connect_error());
}

?>