<?php
require_once "connection.php";
require_once "functies.php";
require_once "./templates/html_components.php";

PrintHead();
PrintJumbo("Title1","subtitel1");

?>
<div class="container">
    <div class="row">
        <?php
        GetData("SELECT * FROM steden_db.images;");
        ?>
    </div>
</div>

</body>
</html>
