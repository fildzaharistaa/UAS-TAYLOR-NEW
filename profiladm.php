<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="https://clipground.com/images/taylor-swift-logo-png-8.png" type="image/x-icon">
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="stylesheet" href="./css/profil.css">
    <link rel="stylesheet" href="./css/profiladm.css">
    <title>Profile Taylor Swift</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.8/slick.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.8/slick-theme.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
    
</head>
<body>
    <?php
    include "config.php";
    $sql = mysqli_query($conn, "SELECT * FROM editprofile;");
    ?>
    <main class="main">
        <aside class="sidebar">
        <nav class="nav">
            <div class="logofr">
                <img class="logo" src="https://i.pinimg.com/564x/69/6a/9e/696a9e1a088e722fbafee71cd6e923aa.jpg">
            </div>
            <ul>
                <li><a href="./indexadm.html">Home</a></li>
                <li class="active"><a href="">Profile</a></li>
                <li><a href="./albumadm.html">Albums</a></li>
                <li><a href="./komunitasadm.html">Link Community</a></li>
                <li><a href="./aboutadm.html">About Us</a></li>
                <li><a href="./komentaradm.php">Comment</a></li>
                <li><a href="./logout.html">Log Out</a></li>
            </ul>
        </nav>
        </aside>
        <section class="beranda">
        <a class="menux">☰</a>            
        <div class="kotak-kartu">
                <div class="container2 grayosh" id="infoimage">
                    <div class="nama">
                        <p>TAYLOR </p>
                        <p> SWIFT'S </p>
                        <p> BIOGRAPHY</p>
                    </div>
                    <div class="foto">
                        <img src="./image/profilts1.jpg" alt="Taylor Swift's Profile Picture">
                    </div>
                    <div class="biodata" id="infocontent">
                        
                    <form action="edit.php" method="post">
                        <button type="submit">Edit</button>
                    </form>
                        <?php
                            while($row = mysqli_fetch_array($sql)){
                        ?>
                        <table>
                            <tr>
                                <td>Name</td>
                                <td>:</td>
                                <td><?php echo $row['name']; ?></td>
                            </tr>
                            <tr>
                                <td>Real Name</td>
                                <td>:</td>
                                <td><?php echo $row['realname']; ?></td>
                            </tr>
                            <tr>
                                <td>Place</td>
                                <td>:</td>
                                <td><?php echo $row['place']; ?></td>
                            </tr>
                            <tr>
                                <td>Mother</td>
                                <td>:</td>
                                <td><?php echo $row['mother']; ?></td>
                            </tr>
                            <tr>
                                <td>Father</td>
                                <td>:</td>
                                <td><?php echo $row['father']; ?></td>
                            </tr>
                            <tr>
                                <td>Professe</td>
                                <td>:</td>
                                <td><?php echo $row['profesi']; ?></td>
                            </tr>
                            <tr>
                                <td>Siblings</td>
                                <td>:</td>
                                <td><?php echo $row['siblings']; ?></td>
                            </tr>
                            <tr>
                                <td>Height</td>
                                <td>:</td>
                                <td><?php echo $row['height']; ?></td>
                            </tr>
                            <tr>
                                <td>Instagram</td>
                                <td>:</td>
                                <td><?php echo $row['instagram']; ?></td>
                            </tr>
                            <tr>
                                <td>Twitter</td>
                                <td>:</td>
                                <td><?php echo $row['twitter']; ?></td>
                            </tr>
                            <tr>
                                <td>Youtube</td>
                                <td>:</td>
                                <td><?php echo $row['youtube']; ?></td>
                            </tr>
                        </table>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="container2 grayosh" id="infoimage2">
            <div class="foto">
                <img src="./image/profilts2.jpg" alt="Tunggu Sebentar Yaaa~">
            </div>
            <div class="biodata" id="infocontent2">
                <p> Early life  </p>
                <p> Taylor swift was born Taylor Alison swift on December 13, 1989 in west reading, Pennsylvania, United States. She was a daughter of Andrea Gardner, a housewife and Scott kingsley swift, a stockbroker. Swift had a younger brother named Austin.
                    Swift singing was an established talent at an early age and was believed to decline by his grandmother, Marjorie finlay, who was an opera singer. In singing, swift idolized shania twain.
                    By the time swift was three years old, he was able to sing in front of a group of tourists on an excursion with his parents. When she was in fourth grade, she managed to win a national poetry contest with a three-page poem entitled monster in my closet. At the age of ten, he was taught to play three chords on the guitar by a computer repairman. This encouraged his interest in learning the instruments. Thanks to his three expertise: singing, wordplay, and playing guitar, swift managed to write his first song, lucky you.
                    Swift has also been known to sing frequently at local events, such as fairs and contests since he was ten years old. In fact, when he was eleven years old, he managed to sing the star spangled banner at the philadephia 76ers basketball game. </p>
            </div>
            </div>
            <div class="container2 grayosh" id="infoimage3">
                <div class="foto">
                    <img src="./image/profilts3.jpg" alt="Tunggu Sebentar Yaaa~">
                </div>
                <div class="biodata" id="infocontent3">
                    <p>Career Trip</p>
                    <p>
                    Swift swift relates to the world of singing to his frequent visit to nahsville, Tennessee, where country music is developing. There he would join in songwriting and try to get a record contract.
                    Looking at the rigor of swift's struggle, his expulsion decided to move to near hendersonville, tennese. In 2005, the swift family also moved to Nashville. Swift and his family had a sweet fight. Taylor swift succeeded in striking down a number of local labels with her songs.
                    In 2006, swift succeeded in dedebut and release single team McGraw and self-contained albums. McGraw's single team successfully ranked 40 on the hot 100 billboard and number 6 on the hot country songs billboard. On the other hand, self-mailed albums do manage to get a multi-platinum award by the American record industry association and are later nominated for the best new artist award at the 50th grammy awards.
                    </p>
                    <p>One of swift's most recent albums is red (2012). This album contains 16 songs that he wrote along with Dan Wilson, Max Martin, shellback, Liz rose, and jacknife lee. In that album, swift also subbed the singer Ed sheeran in everything's changed and Gary lightbody in the last time. The album also featured the single we are never ever getting back together that made it to the tune of 1 million the first week of sales. Nevertheless, because of a slight problem, swift then rereleased the red album on November 12, 2021. The new red album has 30 songs, a message, and a short film.</p>
                </div>
            </div>
        </div>
    </section>
    </main>
    <script src="./javascript/main.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
</body>
</html>

