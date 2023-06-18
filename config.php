<?php

$server = "localhost";
$user = "root";
$password = ""; #sesuai DB
$nama_database = ""; #belum

$db = mysqli_connect($server, $user, $password, $nama_database);

if( !$db ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}

?>
