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
        $images = array("Berlijn" => "berlijn.jpg","London" =>"london.jpg","Parijs" => "parijs.jpg");
            foreach ($images as $x => $v){
                echo '<div class="col-sm-4">';
                echo "<h3>".$x."</h3>";
                echo '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>';
                echo '<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>';
                echo '<img src="./images/'.$v.'">';
                echo "</div>";
            }
        ?>
    </div>
</div>

</body>
</html>
