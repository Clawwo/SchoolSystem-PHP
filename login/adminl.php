<?php  
include '../connect.php';
session_start();
$pesan_error = '';
$jenis_error = '';

if (isset($_SESSION['is_login'])) {
    header("Location: ../siswa/siswa.php");
}


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
<form action="" method="POST">
    <div>
        <h2 class="title">Form Login</h2>
        <label for="username">Username</label>
        <input type="text" id="username" name="username" required class="<?php echo ($jenis_error == 'username') ? 'error' : ''; ?>">
        <?php if (!empty($pesan_error) && $jenis_error == 'username') : ?>
            <p class="error-message"><?php echo $pesan_error; ?></p>
        <?php endif; ?>
    </div>
    <div>
        <label for="password">Password</label>
        <input type="password" id="password" name="password" required class="<?php echo ($jenis_error == 'password') ? 'error' : ''; ?>">
        <?php if (!empty($pesan_error) && $jenis_error == 'password') : ?>
            <p class="error-message"><?php echo $pesan_error; ?></p>
        <?php endif; ?>
        <p class="forgot"><a href="#">Forgot password?</a></p>
    </div>
    <div>    
        <button type="submit" name="login">Login</button>
    </div>
    <p class="signup">Don't have an account? <a href="admin.php">Sign up</a></p>
</form>
</body>
</html>