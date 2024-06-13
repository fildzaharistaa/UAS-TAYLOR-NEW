<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="https://clipground.com/images/taylor-swift-logo-png-8.png" type="image/x-icon">

    <!-- custom css kalian ada di direktori ini -->
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="stylesheet" href="./css/komentar.css">

    <!-- ini title -->
    <title>Komentar</title>

    <!-- ini link css buat manggil slick carousel nya dan make tema bawaan nya slick -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.8/slick.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.8/slick-theme.min.css">

    <!-- SLICK BUTUH JQUERY BUAT RUNNING, Jadi ini script yang dibutuhin buat nge running slick-carrousel (sebenernya 1 aja cukup sih) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
<main class="main">
    <!-- BAGIAN Sidebar -->
    <aside class="sidebar">
        <nav class="nav">
            <!-- INI BAGIAN LOGO -->
            <div class="logofr">
                <img class="logo" src="https://i.pinimg.com/564x/69/6a/9e/696a9e1a088e722fbafee71cd6e923aa.jpg">
            </div>
            <ul>
                <!-- kelas active digunain buat ngasih efek nyala -->
                <li><a href="./index.html">Home</a></li>
                <li><a href="./profil.html">Profile</a></li>
                <li><a href="./album.html">Albums</a></li>
                <li><a href="./komunitas.html">Link Community</a></li>
                <li><a href="./about.html">About Us</a></li>
                <li class="active"><a href="">Comment</a></li>
            </ul>
        </nav>
    </aside>

    <?php
    include "config.php";

    // Inisialisasi array komentar
    $comments = [];

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $Name = $_POST['Name'];
        $Comments = $_POST['Comments'];
        $Stars = $_POST['Stars'];

        // Escape input untuk keamanan
        $Name = $conn->real_escape_string($Name);
        $Comments = $conn->real_escape_string($Comments);
        $Stars = $conn->real_escape_string($Stars);

        // Query untuk memasukkan data ke tabel komentar
        $sql = "INSERT INTO komentar (Name, Comments, Stars) VALUES ('$Name', '$Comments', '$Stars')";

        if ($conn->query($sql) === TRUE) {
            echo "<p>New record created successfully</p>";
        } else {
            echo "<p>Error: " . $sql . "<br>" . $conn->error . "</p>";
        }
    }

    // Query untuk mengambil semua komentar dari database
    $sql = "SELECT * FROM komentar";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Menyimpan semua komentar dalam array
        while($row = $result->fetch_assoc()) {
            $comments[] = $row;
        }
    } else {
        echo "<p>No comments found</p>";
    }

    // Tutup koneksi
    $conn->close();
    ?>

    <section class="beranda">
        <a class="menux">☰</a>

        <div class="container-fluid">
            <nav class="navbar navbar-light">
                <form class="form-inline">
                </form>
            </nav>
        </div>
        <div class="container">
            <div class="inner">
                <div class="row">
                    <div class="col-md-3">
                        <h3>Comment Here!</h3>
                        <form action="komentar.php" method="POST">
                            <div class="form-group">
                                <label>Name</label>
                                <input class="form-control" name="Name" placeholder="Masukan nama kamu" required>
                            </div>
                            <div class="form-group">
                                <label>Comment</label>
                                <input class="form-control" id="komentar" name="Comments" placeholder="Masukan komentar kamu" required>
                            </div>
                            <div class="form-group">
                                <label>Give The Rating!</label>
                                <select id="inputState" class="form-control" name="Stars" required>
                                    <option selected disabled>Choose Here</option>
                                    <option value="Bintang 5">5 Stars</option>
                                    <option value="Bintang 4">4 Stars</option>
                                    <option value="Bintang 3">3 Stars</option>
                                    <option value="Bintang 2">2 Stars</option>
                                    <option value="Bintang 1">1 Stars</option>
                                </select>
                            </div>
                            <button type="Submit" class="btn btn-primary">Submit</button>
                            <button type="reset" class="btn btn-primary">Reset</button>
                        </form>
                    </div>
                    <div class="col-md-9">
                        <h3>Comments from all of you! ♡♡♡</h3>
                        <table class="table">
                            <thead class="bg-light">
                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">Comments</th>
                                    <th scope="col">Stars</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if (!empty($comments)): ?>
                                    <?php foreach ($comments as $comment): ?>
                                        <tr>
                                            <td><?php echo htmlspecialchars($comment['Name']); ?></td>
                                            <td><?php echo htmlspecialchars($comment['Comments']); ?></td>
                                            <td><?php echo htmlspecialchars($comment['Stars']); ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                <?php else: ?>
                                    <tr>
                                        <td colspan="3">No comments found</td>
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

<!-- MAIN SCRIPT -->
<script src="./javascript/main.js"></script>
<script src="./javascript/validasicomment.js"></script>

<!-- INI SCRIPT BUAT SLICK CAROUSSEL NYA BIAR AKTIF -->
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
</body>
</html>
