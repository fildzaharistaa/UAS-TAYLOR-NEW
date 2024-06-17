<?php
session_start();
include "config.php"; // Pastikan file config.php termasuk koneksi database

// Check jika admin sudah login
if (!isset($_SESSION['admin']) || $_SESSION['admin'] !== true) {
    // Jika belum login, redirect ke halaman login
    header("Location: login.php");
    exit();
}

// Handle penghapusan komentar jika ada permintaan
if (isset($_GET['delete_id'])) {
    $delete_id = $_GET['delete_id'];

    // Lakukan penghapusan (pastikan Anda melakukan validasi dan keamanan tambahan di sini)
    $sql = "DELETE FROM komentar WHERE id = $delete_id";
    if ($conn->query($sql) === TRUE) {
        echo "<p class='success-message'>Komentar berhasil dihapus</p>";
    } else {
        echo "<p class='error-message'>Error menghapus komentar: " . $conn->error . "</p>";
    }
}

// Ambil data komentar
$comments = [];
$sql = "SELECT * FROM komentar";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $comments[] = $row;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Comments</title>
    <!-- Tambahkan stylesheet yang diperlukan -->
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="stylesheet" href="./css/admin.css">
</head>
<body>
    <header>
        <!-- Header admin -->
        <h1>Welcome, Admin!</h1>
        <a href="logout.php">Logout</a> <!-- Tautan untuk logout -->
    </header>

    <main>
        <section class="comments">
            <h2>Manage Comments</h2>
            <table>
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Comments</th>
                        <th>Stars</th>
                        <th>Action</th> <!-- Kolom untuk aksi penghapusan -->
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($comments as $comment): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($comment['Name']); ?></td>
                            <td><?php echo htmlspecialchars($comment['Comments']); ?></td>
                            <td><?php echo htmlspecialchars($comment['Stars']); ?></td>
                            <td>
                                <a href="komentaradmin.php?delete_id=<?php echo $comment['id']; ?>" class="btn btn-delete">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </section>
    </main>

    <!-- Tambahkan script JavaScript jika diperlukan -->
    <script src="./javascript/admin.js"></script>
</body>
</html>
