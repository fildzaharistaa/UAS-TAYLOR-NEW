<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="https://clipground.com/images/taylor-swift-logo-png-8.png" type="image/x-icon">
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="stylesheet" href="./css/komentar.css">
    <title>Komentar</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.8/slick.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.8/slick-theme.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
<main class="main">
    <aside class="sidebar">
        <nav class="nav">
            <div class="logofr">
                <img class="logo" src="https://i.pinimg.com/564x/69/6a/9e/696a9e1a088e722fbafee71cd6e923aa.jpg">
            </div>
            <ul>
                <li><a href="./indexadm.html">Home</a></li>
                <li><a href="./profiladm.php">Profile</a></li>
                <li><a href="./albumadm.html">Albums</a></li>
                <li><a href="./komunitasadm.html">Link Community</a></li>
                <li><a href="./aboutadm.html">About Us</a></li>
                <li class="active"><a href="./komentaradm.php">Comment</a></li>
                <li><a href="./logout.html">Log Out</a></li>
            </ul>
        </nav>
    </aside>

    <?php
    session_start();
    include "config.php"; 
    
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

    <section class="beranda">
        <a class="menux">☰</a>

        <div class="container-fluid">
            <nav class="navbar navbar-light">
                <form class="form-inline"></form>
            </nav>
        </div>
        <div class="container">
            <div class="inner">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Manage Comments</h2>
                        <table class="table">
                            <thead class="bg-light">
                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">Comments</th>
                                    <th scope="col">Stars</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if (!empty($comments)): ?>
                                    <?php foreach ($comments as $comment): ?>
                                        <tr>
                                            <td><?php echo htmlspecialchars($comment['Name']); ?></td>
                                            <td><?php echo htmlspecialchars($comment['Comments']); ?></td>
                                            <td><?php echo htmlspecialchars($comment['Stars']); ?></td>
                                            <td>
                                                <a href="komentaradm.php?delete_id=<?php echo $comment['id']; ?>" class="btn btn-delete">Delete</a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                <?php else: ?>
                                    <tr>
                                        <td colspan="4">No comments found</td>
                                    </tr>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

</body>
</html>
