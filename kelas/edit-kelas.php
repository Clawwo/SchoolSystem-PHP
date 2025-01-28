<?php
include "../connect.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];

    $query = "UPDATE kelas SET id_kelas='$nis', Nama_kelas='$nama' WHERE id_kelas='$nis'";
    mysqli_query($conn, $query);

    header("Location: kelas.php");
    exit();
}

$nis = $_GET['id'];
$query = "SELECT * FROM kelas WHERE id_kelas='$nis'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
?>


<link rel="stylesheet" href="../css/edit.css">
<form method="post" action="">
    <div class="head">
            <h1>Edit Kelas</h1>
            <p>Anda sedang mengedit kelas dengan ID kelas <b><?php echo $row['id_kelas']; ?></b></p>
        </div>
    <input type="hidden" name="nis" value="<?php echo $row['id_kelas']; ?>">
    <label>Nama: <input type="text" name="nama" value="<?php echo $row['Nama_kelas']; ?>"></label><br>
    <div class="buton">
            <a href="kelas.php">Cancel</a>
            <input type="submit" value="Update">
        </div>
</form>

<script>
    Swal.fire({
  title: "Do you want to save the changes?",
  showDenyButton: true,
  showCancelButton: true,
  confirmButtonText: "Save",
  denyButtonText: `Don't save`
}).then((result) => {
  /* Read more about isConfirmed, isDenied below */
  if (result.isConfirmed) {
    Swal.fire("Saved!", "", "success");
  } else if (result.isDenied) {
    Swal.fire("Changes are not saved", "", "info");
  }
});
</script>
