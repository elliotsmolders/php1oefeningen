<?php
require_once "./connection.php";
require_once "./templates/html_components.php";

$imgId = $_GET['img_id'];
$sql = "SELECT * FROM steden_db.images WHERE img_id =".$imgId;

$result = $conn->query($sql);
if (mysqli_num_rows($result) > 0) {
// opgehaalde data in variables
    while ($row = mysqli_fetch_assoc($result)) {
        $title = $row["img_title"];
        $file = $row["img_filename"];
        $width = $row["img_width"];
        $height = $row["img_height"];
    }
}
else{
    echo "no data found";}
PrintHead();
?>

<div class="jumbotron text-center">
    <h1>Detail <?php echo $title ?></h1>
</div>

<div class="container">
    <div class="row">
        <div class="col-4">
            <?php
            echo '<h3>'.$title.'</h3>';
            echo '<p>filename : '.$file.'</p>';
            echo '<p>'.$height.' x '.$width.' pixels</p>';
            echo '<img src="./images/'.$file. '">';
            echo '<p><a href="steden2.php"> Terug naar overzicht</a></p>';
            ?>
        </div>
    </div>
</div>
</body>
</html>