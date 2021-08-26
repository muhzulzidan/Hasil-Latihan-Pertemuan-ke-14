<?php

    $server = 'localhost';
    $user = 'za';
    $password = 'maryam100';
    $nama_database = 'digitalent';

    $db = mysqli_connect($server, $user, $password, $nama_database);

    if(!$db){
        die("Gagal terhubung dengan database: " . mysqli_connect_error());
    }
?>