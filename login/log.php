<?php  
    include 'konet.php';

    $id = $_POST['id'];
    $nama = $_POST['username'];
    $id_kelas = $_POST['email'];
    $alamat = $_POST['password'];

    
    mysqli_query($conn, "INSERT INTO user VALUES('$id', '$nama', '$id_kelas', '$alamat')");

    header("location:k.php");
?>