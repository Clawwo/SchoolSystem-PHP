<?php
include "../connect.php";

// Mengambil NIS dari URL
$id = $_GET['id'];

// Menghapus data siswa berdasarkan NIS
mysqli_query($conn,"DELETE from kelas where id_kelas='$id'");

mysqli_close($conn);

header("Location: kelas.php");
?>