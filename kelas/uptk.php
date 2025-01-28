<?php 
  // Membuat koneksi ke database
  include "../connect.php";

  // Mengambil data dari form
  $nis = $_POST['nis'];
  $nama = $_POST['nama'];

  // Mengupdate data siswa
  $query = "UPDATE kelas SET id_kelas='$nis', Nama_kelas='$nama' WHERE id_kelas='$nis'";
  mysqli_close($conn);
?>
