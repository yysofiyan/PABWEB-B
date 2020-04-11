<?php
date_default_timezone_set("ASIA/JAKARTA");

$server = "localhost";
$username = "id13199338_root";
$passwoard = "+[1vVsT^(c%%@~&z";
$database = "id13199338_db_sekolah";

$db = mysqli_connect($server, $username, $passwoard, $database);

if (!$db) {
    die('koneksin database gagal :' . mysqli_connect_error());
}
