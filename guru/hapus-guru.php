<?php
include "../connect.php";

// Mengambil NIS dari URL
$id = $_GET['nis'];

// Menghapus data siswa berdasarkan NIS
mysqli_query($conn,"DELETE from guru where Id_guru='$id'");

mysqli_close($conn);

header("Location: guru.php");
?>