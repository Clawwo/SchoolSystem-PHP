<?php 
  // Membuat koneksi ke database
  include "../connect.php";

  // Mengambil NIS dari URL
  $id = $_GET['id'];

  // Menghapus data siswa berdasarkan NIS
  mysqli_query($conn,"DELETE from mapel where Id_mapel='$id'");

  mysqli_close($conn);

  header("Location: mapel.php");
?>
