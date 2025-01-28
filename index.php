<?php  
include 'connect.php';
session_start();
$pesan_error = '';
$jenis_error = '';

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";
    $result = $conn ->query($sql);
    
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc(); 
        $_SESSION['username'] = $row['username'];
        $_SESSION['is_login'] = true;
        header("Location: ../siswa/siswa.php");
        exit();
    } else {
        $sql = "SELECT * FROM admin WHERE username = '$username'";
        $result = $conn ->query($sql);
        
        if ($result->num_rows > 0) {
            $pesan_error = "Password salah.";
            $jenis_error = "password";
        } else {
            $pesan_error = "Username tidak ditemukan.";
            $jenis_error = "username";
        }
    }
}

if (isset($_SESSION['username'])) {
  if ($_SESSION['level'] == "admin") {
    // User admin, arahkan ke halaman siswa/siswa.php
    header("Location: ../siswa/siswa.php");
    exit();
  } else if ($_SESSION['level'] == "user") {
    // User user, arahkan ke halaman user/murid.php
    header("Location: ../user/murid.php");
    exit();
  }
    session_unset();
    session_destroy();
}

?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Login</title>
    <link rel="stylesheet" href="../css/login.css"> 
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
<form action="./login/cek_login.php" method="POST">
    <div class="head">
        <h2 class="title">Form Login</h2>
        <p>Login to your account</p>
    </div>
    <div class="">
         <label for="username">Username</label>
    <input type="text" id="username" name="username">     
    </div>
    <div>
        <label for="password">Password</label>
        <input type="password" id="password" name="password">
            <?php if (isset($_SESSION['pesan_error'])) : ?>
            <p class="error-message"><?php echo $_SESSION['pesan_error']; ?></p>
            <?php endif; ?>
    </div>
    <div>    
        <button type="submit" name="login">Login</button>
    </div>
    <p class="signup">Don't have an account? <a href="login/admin.php">Sign up</a></p>
</form>
</body>
</html>