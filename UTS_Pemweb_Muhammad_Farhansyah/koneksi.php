<?php
$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'pemweb';
$port = 3308;

$koneksi = mysqli_connect($host, $username, $password, $dbname, $port);

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
