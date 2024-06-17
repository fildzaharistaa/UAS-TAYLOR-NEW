<?php
session_start();
include "config.php"; // Pastikan file config.php termasuk koneksi database

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    // Lakukan sanitasi input (opsional tergantung pada kebutuhan aplikasi)
    $email = $conn->real_escape_string($email);
    $password = $conn->real_escape_string($password);
    
    // Contoh query autentikasi (gunakan prepared statement untuk keamanan)
    $sql = "SELECT * FROM admins WHERE email = '$email' AND password = '$password'";
    $result = $conn->query($sql);
    
    if ($result->num_rows == 1) {
        // Autentikasi berhasil
        $_SESSION['admin'] = true; // Set session untuk menandakan status admin
        header("Location: komentaradmin.php"); // Redirect ke halaman admin setelah login
        exit();
    } else {
        $error_message = "Email atau password salah"; // Autentikasi gagal
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>
    <link rel="stylesheet" href="./css/AdmLogin.css">
</head>
<body>
    <div class="container">
        <div class="login">
            <form action="login.php" method="post">
                <h1>LOGIN</h1>
                <hr>
                <p>Taylor Swift Admin</p>
                <label for="email">Email</label>
                <input type="text" id="email" name="email" placeholder="example@gmail.com" required>
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Password" required>
                <button type="submit">LOGIN</button>
                <p><a href="#">Forgot Password?</a></p>
                <?php if (isset($error_message)): ?>
                    <p class="error"><?php echo $error_message; ?></p>
                <?php endif; ?>
            </form>
        </div>
    </div>
</body>
</html>
