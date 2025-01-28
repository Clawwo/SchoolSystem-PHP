<?php  
    include '../connect.php';

    $nama = $_POST['Nama'];
    $alamat = $_POST['Alamat'];
    $tll = $_POST['TTL'];
    $tlp = $_POST['Telp'];

    
    mysqli_query($conn, "INSERT INTO mapel (Nama_mapel, Id_guru, Jumlah_jam, Id_kelas) VALUES ('$nama', '$alamat', '$tll', '$tlp' )");

    header("Location: mapel.php");
?>