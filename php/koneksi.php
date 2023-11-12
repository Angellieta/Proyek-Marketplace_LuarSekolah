<?php

    $host = 'localhost';
    $nama = 'root';
    $pass = 'shelyhan07';
    $db = 'db_evodis';

    $koneksi = mysqli_connect($host, $nama,$pass, $db);
    if (!$koneksi) {
        echo "Failed to connect to Database: ". mysqli_connect_error();
    }
?>