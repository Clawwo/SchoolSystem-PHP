<?php  
    include '../connect.php';

    $nama = $_POST['Nama'];

    
    mysqli_query($conn, "INSERT INTO kelas (Nama_kelas) VALUES ('$nama')");

    header("Location: kelas.php");
?>