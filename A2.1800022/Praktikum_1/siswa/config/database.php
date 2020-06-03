<?php

date_default_timezone_set('Asia/Jakarta');

$server   = "localhost";
$username = "id13248930_apip";
$password = "XXB&J7z(koWumS17";
$database = "id13248930_db_sekolah";

$db = mysqli_connect($server,$username,$password,$database);

if(!$db){
    die('Koneksi Databse Gagal :'. mysqli_connect_error());
}

?>