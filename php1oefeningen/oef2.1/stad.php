<?php
$servername = "localhost";
$username = "root";
$password = "newpass";

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$imgId = $_GET['img_id'];
$sql = "SELECT * FROM steden_db.images WHERE img_id =".$imgId;
$result = $conn->query($sql);
if (mysqli_num_rows($result) > 0) {
// output data
    while ($row = mysqli_fetch_assoc($result)) {
        $title = $row["img_title"];
        $file = $row["img_filename"];
        $width = $row["img_width"];
        $height = $row["img_height"];
    }
}
else{
    echo "no data found";}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style> img {
            width: 75%;
        }
    </style>
</head>
<body>
<div class="jumbotron text-center">
    <h1>Detail <?php echo $title ?></h1>
</div>

<div class="container">
    <div class="row">
        <div class="col-9">
            <?php
            echo '<h3>'.$title.'</h3>';
            echo '<p>filename : '.$file.'</p>';
            echo '<p>'.$height.' x '.$width.' pixels</p>';
            echo '<img src="./images/'.$file. '">';
            echo '<p><a href="steden2.php"> Terug naar overzicht</a></p>';
            ?>
</body>
</html>