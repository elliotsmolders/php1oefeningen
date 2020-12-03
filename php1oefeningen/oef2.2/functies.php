<?php
function GetData($sql){
    global $conn;
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
            echo '<a href="stad.php?img_id='.$row["img_id"].'">Meer info '.$row["img_title"].'</a>';
            echo "</div>";
        }
    }
    else {
        echo "0 results";
    }
}