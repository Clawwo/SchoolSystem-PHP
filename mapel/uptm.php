<?php 
  // Membuat koneksi ke database
  include "../connect.php";

  // Mengambil data dari form
  $nis = $_POST['nis'];
  $nama = $_POST['nama'];
  $alamat = $_POST['alamat'];
  $ttl = $_POST['ttl'];
  $telp = $_POST['telp'];

  // Mengupdate data siswa
  $query = "UPDATE mapel SET Id_mapel='$nis', Nama_mapel='$nama', Id_guru='$telp', Jumlah_jam='$ttl', Id_kelas='$alamat'  WHERE Id_mapel='$nis'";
  mysqli_close($conn);
?>
