<?php
$servername = "localhost";
$username = "root";
$password = "newpass";

// Create connection
$conn = new mysqli($servername, $username, $password);
function GetData($sql){
    global $conn;

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $result = $conn->query($sql);
    if (mysqli_num_rows($result) > 0) {
        // output data
        while($row = mysqli_fetch_assoc($result)) {
            echo '<div class="col-sm-4">';
            echo "<h3>".$row["img_title"]."</h3>";
            echo '<p>'.$row["img_height"]."x".$row["img_width"].'</p>';
            echo '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>';
            echo '<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>';
            echo '<img src="./images/'.$row["img_filename"].'">';
            echo "</div>";
        }

    }
    else {
        echo "0 results";
    }
}
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
            width: 100%;
        }
    </style>
</head>
<body>

<div class="jumbotron text-center">
    <h1>My First Bootstrap Page</h1>
    <p>Resize this responsive page to see the effect!</p>
</div>


<div class="container">
    <div class="row">
        <?php
        GetData("SELECT * FROM steden_db.images;");
        ?>
    </div>
</div>

</body>
</html>
