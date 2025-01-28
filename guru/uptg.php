<?php 
  // Membuat koneksi ke database
  include "../connect.php";

  // Mengambil data dari form
  $nis = $_POST['nis'];
  $nama = $_POST['nama'];
  $alamat = $_POST['alamat'];
  $telp = $_POST['telp'];

  // Mengupdate data siswa
  $query = "UPDATE guru SET Nama='$nama', Alamat='$alamat', Telp='$telp' WHERE Id_kelas='$nis'";
  mysqli_close($conn);
?>
