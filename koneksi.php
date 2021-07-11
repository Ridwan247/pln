<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "pln";

// Create connection
$koneksi = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$koneksi) {
    echo "Gagal koneksi database";
}
