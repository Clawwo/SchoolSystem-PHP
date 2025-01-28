<?php
$servername = "localhost"; 
$username = "root";        
$password = "";            
$database = "login";      

// Membuat koneksi
$conn = mysqli_connect($servername, $username, $password, $database);

// Mengecek koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
