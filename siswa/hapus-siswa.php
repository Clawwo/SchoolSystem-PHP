<?php 
  // Membuat koneksi ke database
  include "../connect.php";

  // Mengambil NIS dari URL
  $nis = $_GET['nis'];

  // Menghapus data siswa berdasarkan NIS
  mysqli_query($conn,"DELETE from siswa where nis='$nis'");

  mysqli_close($conn);

  header("Location: siswa.php");
?>
