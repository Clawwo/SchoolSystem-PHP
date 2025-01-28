<?php
include "../connect.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $id_kelas = $_POST['id_kelas'];
    $alamat = $_POST['alamat'];
    $ttl = $_POST['ttl'];
    $telp = $_POST['telp'];

    $query = "UPDATE siswa SET Nama='$nama', Id_kelas='$id_kelas', Alamat='$alamat', TTL='$ttl', Telp='$telp' WHERE NIS='$nis'";
    mysqli_query($conn, $query);

    header("Location: siswa.php");
    exit();
}

$nis = $_GET['nis'];
$query = "SELECT * FROM siswa WHERE NIS='$nis'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Siswa</title>
    <link rel="stylesheet" href="../css/edit.css">
</head>
<body>
    <form method="post" action="">
        <div class="head">
            <h1>Edit Siswa</h1>
            <p>Anda sedang mengedit siswa dengan NIS <b><?php echo $row['NIS']; ?></b></p>         
        </div>
        <input type="hidden" name="nis" value="<?php echo $row['NIS']; ?>">
        <label>Nama <input type="text" name="nama" value="<?php echo $row['Nama']; ?>"></label><br>
        <label>ID Kelas <input type="text" name="id_kelas" value="<?php echo $row['Id_kelas']; ?>"></label><br>
        <label>Alamat <input type="text" name="alamat" value="<?php echo $row['Alamat']; ?>"></label><br>
        <label>TTL <input type="text" name="ttl" value="<?php echo $row['TTL']; ?>"></label><br>
        <label>Telp <input type="text" name="telp" value="<?php echo $row['Telp']; ?>"></label><br>
        <div class="buton">
            <a href="siswa.php">Cancel</a>
            <input type="submit" value="Update">
        </div>
    </form>

</body>
</html>


