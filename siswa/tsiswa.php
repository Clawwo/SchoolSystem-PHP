<?php  
    include '../connect.php';

    $nama = $_POST['Nama'];
    $id_kelas = $_POST['Id_kelas'];
    $alamat = $_POST['Alamat'];
    $tll = $_POST['TTL'];
    $tlp = $_POST['Telp'];

    
    mysqli_query($conn, "INSERT INTO siswa (Nama, id_kelas, Alamat, TTL, Telp) VALUES('$nama', '$id_kelas', '$alamat', '$tll', '$tlp' )");

    header("Location: siswa.php");
?>