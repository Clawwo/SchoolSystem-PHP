<?php 
  // Membuat koneksi ke database
  include "../connect.php";

  // Mengambil data dari form
  $nis = $_POST['nis'];
  $nama = $_POST['nama'];
  $id_kelas = $_POST['id_kelas'];
  $alamat = $_POST['alamat'];
  $ttl = $_POST['ttl'];
  $telp = $_POST['telp'];

  // Mengupdate data siswa
  $query = "UPDATE siswa SET Nama='$nama', Id_kelas='$id_kelas', Alamat='$alamat', TTL='$ttl', Telp='$telp' WHERE NIS='$nis'";
  mysqli_close($conn);
?>
