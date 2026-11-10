<?php
// config/database.php
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'penjualan';
// inisialisasi koneksi dengan MySQLi secara Object Oriented
$koneksi = new mysqli($host, $user, $pass, $db);

if($koneksi->connect_error) {
    die("koneksi database");
}
?>
