<?php
include "../connect.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $telp = $_POST['telp'];

    $query = "UPDATE guru SET Nama='$nama', Alamat='$alamat', Telp='$telp' WHERE Id_guru='$nis'";
    mysqli_query($conn, $query);

    header("Location: guru.php");
    exit();
}

$nis = $_GET['nis'];
$query = "SELECT * FROM guru WHERE Id_guru='$nis'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/edit.css">
    <title>Edit Page</title>
</head>
<body>
    <h2></h2>
    <form method="post" action="">
        <div class="head">
            <h1>Edit Guru</h1>
            <p>Anda sedang mengedit guru dengan NIS <b><?php echo $row['Id_guru']; ?></b></p>
        </div>
        <input type="hidden" name="nis" value="<?php echo $row['Id_guru']; ?>">
        <label>Nama <input type="text" name="nama" value="<?php echo $row['Nama']; ?>"></label><br>
        <label>Alamat <input type="text" name="alamat" value="<?php echo $row['Alamat']; ?>"></label><br>
        <label>Telp <input type="text" name="telp" value="<?php echo $row['Telp']; ?>"></label><br>
        <div class="buton">
            <a href="guru.php">Cancel</a>
            <input type="submit" value="Update">
        </div>
    </form>
</body>
</html>