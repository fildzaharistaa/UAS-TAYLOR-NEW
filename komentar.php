<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon"
              href="https://clipground.com/images/taylor-swift-logo-png-8.png"type="image/x-icon">

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
    

    <main class="main">

        <!-- BAGIAN Sidebar -->
        <aside class="sidebar">
            <nav class="nav">

                <!-- INI BAGIAN LOGO -->
                <div class="logofr">
                    <!--<img class="lightstick" src="lightstick.png">-->
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
       if(isset($_POST['Submit'])){
        $Name = $_POST['Name'];
        $Comments = $_POST['Comments'];
        $Stars = $_POST['Stars'];

        sql = mysqli_query($conn, "insert into komentar values('$Name', '$Comments', '$Stars');");
       }
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
                            <h3>
                                Comment Here!</h3>
                                <form id="commentForm">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input class="text" name="Name" place-holder="Masukan nama kamu" required>
                                </div>
                                <div class="form-group">
                                    <label>Comment</label>
                                    <input class="text" id="komentar"name="Comments" place-holder="Masukan komentar kamu" required>
                                </div>
                                <div class="form-group">
                                    <label>Give The Rating !</label>
                                    <select id="inputState" class="form-control" name="Stars" required>
                                        <option selected disabled>Choose Here</option>
                                        <option value="Bintang 5">5 Stars</option>
                                        <option value="Bintang 4">4 Stars</option>
                                        <option value="Bintang 3">3 Stars</option>
                                        <option value="Bintang 2">2 Stars</option>
                                        <option value="Bintang 1">1 Stars</option>
                                    </select>
                                </div>
                                <button type="Submit" class="btn btn-primary" >Submit</button>
                                <button type="reset" class="btn btn-primary">Reset</button>
                            </form>
                        </div>
                        <div class="col-md-9">
                            <h3>
                                Comments from all of you! ♡♡♡</h3>
                            <table class="table">
                                <thead class="bg-light">
                                    <tr>
                                        <th scope="col">Name</th>
                                        <th scope="col">Comments</th>
                                        <th scope="col">Stars</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Anggun Febrianti</td>
                                        <td>mba taylor keren banget lagu-lagunya</td>
                                        <td>4 Stars</td>
                                    </tr>
                                    <tr>
                                        <td>Felita Tiara</td>
                                        <td>mba kapan kapan main ke cibubur</td>
                                        <td>5 Stars</td>
                                    </tr>
                                    <tr>
                                        <td>Fiorenza Galuh</td>
                                        <td>kapan kapan main ke upn ya mba</td>
                                        <td>5 Stars</td>
                                    </tr>
                                    <tr>
                                        <td>GEMBOGAN Syakira</td>
                                        <td>ditingkatin lagi mba lagunya saya suka</td>
                                        <td>5 Stars</td>
                                    </tr>
                                    <tr>
                                        <td>Fildzah Arista S</td>
                                        <td>wah keren banget deh mba yOOk</td>
                                        <td>5 Stars</td>
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


</html>