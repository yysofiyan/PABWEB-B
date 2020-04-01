<<<<<<< HEAD
<?php
    
    date_default_timezone_set("ASIA/JAKARTA");

    $server     = "localhost";
    $username   = "id12860208_root";
    $password   = "Qwerty123";
    $database   = "id12860208_sekolah_db";

    $db = mysqli_connect($server, $username, $password, $database);

    if (!$db) {
        die('Koneksi Database Gagal : '.mysqli_connect_error());
    }
=======
<?php
    
    date_default_timezone_set("ASIA/JAKARTA");

    $server     = "localhost";
    $username   = "id12860208_root";
    $password   = "Qwerty123";
    $database   = "id12860208_sekolah_db";

    $db = mysqli_connect($server, $username, $password, $database);

    if (!$db) {
        die('Koneksi Database Gagal : '.mysqli_connect_error());
    }
>>>>>>> upstream/master
?>