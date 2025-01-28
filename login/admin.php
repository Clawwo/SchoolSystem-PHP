<?php  
include '../connect.php';
$pesan = '';

if (isset($_POST['izin'])) {
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $password = $_POST['password'];
  
    // Periksa apakah username dan nama sudah ada pada database
    $query = "SELECT * FROM admin WHERE username = '$username' OR nama = '$nama'";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) > 0) {
      while ($row = mysqli_fetch_assoc($result)) {
        if ($row['nama'] == $nama) {
          $pesan = "Nama sudah digunakan";
          $jenis_error = 'nama';
        } elseif ($row['username'] == $username) {
          $pesan = "Username sudah digunakan";
          $jenis_error = 'username';
        }
      }
    } else {
      // Proses penyimpanan data
      $query = "INSERT INTO admin (nama, username, password) VALUES ('$nama', '$username', '$password')";
      $sql = mysqli_query($conn, $query);
      if ($sql) {
        $pesan = "Data berhasil disimpan.";
        header("Location: adminl.php");
        exit();
      } else {
        $pesan = "Data gagal.";
      }
    }
  }
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Registrasi</title>
  <link rel="stylesheet" href="../css/login.css"> 
</head>
<body>
    <form action="admin.php" method="POST"> 
    <h2 class="title">Form Registrasi</h2>
      <div>
        <label for="nama">Nama</label>
        <input type="text" id="nama" name="nama" required>
        <?php if (!empty($pesan) && $jenis_error == 'nama') : ?>
      <p class="error-message"><?php echo $pesan; ?></p>
    <?php endif; ?>
      </div>
      <div>
        <label for="username">Username</label>
        <input type="text" id="username" name="username" required>
        <?php if (!empty($pesan) && $jenis_error == 'username') : ?>
      <p class="error-message"><?php echo $pesan; ?></p>
    <?php endif; ?>
      </div>
      <div>
        <label for="password">Password</label>
        <input type="password" id="password" name="password" required>
      </div>
      <div>      
        <button type="submit" name="izin">Registrasi</button>
      </div>
      <p class="signup"> Have an account? <a href="adminl.php">Sign in</a></p>
    </form>
</body>
</html>