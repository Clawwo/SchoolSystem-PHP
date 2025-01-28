<?php
include "../connect.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $ttl = $_POST['ttl'];
    $telp = $_POST['telp'];

    $query = "UPDATE mapel SET Id_mapel='$nis', Nama_mapel='$nama', Id_guru='$telp', Jumlah_jam='$ttl', Id_kelas='$alamat' WHERE Id_mapel='$nis'";
    mysqli_query($conn, $query);

    header("Location: mapel.php");
    exit();
}

$nis = $_GET['id'];
$query = "SELECT * FROM mapel WHERE Id_mapel='$nis'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
?>

<link rel="stylesheet" href="../css/edit.css">
<form method="post" action="">
    <div class="head">
            <h1>Edit Mapel</h1>
            <p>Anda sedang mengedit mapel dengan Id Mapel <b><?php echo $row['Id_mapel']; ?></b></p>
        </div>
    <input type="hidden" name="nis" value="<?php echo $row['Id_mapel']; ?>">
    <label>Mapel <input type="text" name="nama" value="<?php echo $row['Nama_mapel']; ?>"></label><br>
    <label>Id Guru <input type="number" name="telp" value="<?php echo $row['Id_guru']; ?>"></label><br>
    <label>Jam Pelajaran <input type="number" name="ttl" value="<?php echo $row['Jumlah_jam']; ?>"></label><br>
    <label>Id Kelas <input type="number" name="alamat" value="<?php echo $row['Id_kelas']; ?>"></label><br>
    <div class="buton">
            <a href="mapel.php">Cancel</a>
            <input type="submit" value="Update">
        </div>
</form>
