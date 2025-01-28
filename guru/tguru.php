<?php  
    include '../connect.php';

    $nama = $_POST['Nama'];
    $alamat = $_POST['Alamat'];
    $tlp = $_POST['Telp'];

    mysqli_query($conn, "INSERT INTO guru (Nama, Alamat, Telp) VALUES('$nama', '$alamat', '$tlp' )");

    header("Location: guru.php");
?>