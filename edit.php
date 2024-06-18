<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Taylor Swift's Biography</title>
    <link rel="stylesheet" href="./css/edit.css">
</head>
<body>
    <?php
    include 'config.php'; 
    $name = $_GET['name'];

    $query = mysqli_query($conn, "SELECT * FROM editprofile WHERE name='$name'");
    $row = mysqli_fetch_array($query);
    
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $realname = $_POST['realname'];
        $place = $_POST['place'];
        $mother = $_POST['mother'];
        $father = $_POST['father'];
        $profesi = $_POST['profesi'];
        $siblings = $_POST['siblings'];
        $height = $_POST['height'];
        $instagram = $_POST['instagram'];
        $twitter = $_POST['twitter'];
        $youtube = $_POST['youtube'];
        
        $sql = mysqli_query($conn, "UPDATE editprofile SET name='$name',
                realname='$realname', place='$place', 
                mother='$mother', father='$father', profesi='$profesi', 
                siblings='$siblings', height='$height', instagram='$instagram', 
                twitter='$twitter', youtube='$youtube' WHERE name='$name'");

        if ($sql) {
            // Jika update berhasil, maka redirect ke profiladm.php
            header('Location: profiladm.php');
            exit();
        } else {
            echo "Terjadi kesalahan: " . mysqli_error($conn);
        }
    }
    ?>

    <div class="container">
        <h2>Edit Taylor Swift's Biography</h2>
        <form action="edit.php?name=<?php echo $name; ?>" method="post">
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="name">Name</label><br>
                        <input type="text" id="name" name="name" class="input-field" value="<?php echo htmlspecialchars($row['name']); ?>" ><br>
                    </div>
                    <div class="form-group">
                        <label for="realname">Real Name</label><br>
                        <input type="text" id="realname" name="realname" class="input-field" value="<?php echo htmlspecialchars($row['realname']); ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="mother">Mother's Name</label><br>
                        <input type="text" id="mother" name="mother" class="input-field" value="<?php echo htmlspecialchars($row['mother']); ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="father">Father's Name</label><br>
                        <input type="text" id="father" name="father" class="input-field" value="<?php echo htmlspecialchars($row['father']); ?>" required>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="place">Place of Birth</label><br>
                        <input type="text" id="place" name="place" class="input-field" value="<?php echo htmlspecialchars($row['place']); ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="profesi">Profession</label><br>
                        <input type="text" id="profesi" name="profesi" class="input-field" value="<?php echo htmlspecialchars($row['profesi']); ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="siblings">Siblings</label><br>
                        <input type="text" id="siblings" name="siblings" class="input-field" value="<?php echo htmlspecialchars($row['siblings']); ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="height">Height (cm)</label><br>
                        <input type="text" id="height" name="height" class="input-field" value="<?php echo htmlspecialchars($row['height']); ?>" required>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="instagram">Instagram</label><br>
                <input type="text" id="instagram" name="instagram" class="input-field" value="<?php echo htmlspecialchars($row['instagram']); ?>" required>
            </div>
            <div class="form-group">
                <label for="twitter">Twitter</label><br>
                <input type="text" id="twitter" name="twitter" class="input-field" value="<?php echo htmlspecialchars($row['twitter']); ?>" required>
            </div>
            <div class="form-group">
                <label for="youtube">Youtube</label><br>
                <input type="text" id="youtube" name="youtube" class="input-field" value="<?php echo htmlspecialchars($row['youtube']); ?>" required>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Save Changes</button>
        </form>
    </div>
</body>
</html>
