<?php
require_once "./connection.php";
require_once "./templates/html_components.php";

$imgId = $_GET['img_id'];
$sql = "SELECT * FROM steden_db.images WHERE img_id =".$imgId;

$result = $conn->query($sql);

PrintHead();
PrintJumbo("Bewerk afbeelding","");
echo '<form id="mainform" name="mainform" method="POST" action="save.php">';
while($row = mysqli_fetch_assoc($result)) {
    PrintFormStatic("img_id", "ID", $row["img_id"]);
    PrintFormInput("img_filename","Filename",$row["img_filename"]);
    PrintFormInput("img_title","Title",$row["img_title"]);
    PrintFormInput("img_width","Width",$row["img_width"]);
    PrintFormInput("img_height","Height",$row["img_height"]);
    echo '<input type="submit" value="Save">';
}
echo "</form>";
?>

</body>
</html>