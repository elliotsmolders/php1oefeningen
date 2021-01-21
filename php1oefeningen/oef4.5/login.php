<?php
error_reporting( E_ALL );
ini_set( 'display_errors', 1 );

$public_access =  true;
require_once "lib/autoload.php";

PrintHead();
PrintJumbo( $title = "Login", $subtitle = "" );
loggedOut();
function loggedOut(){
    return isset($_GET['logout']) and $_GET['logout'] == true ?
            print '<div class="alert alert-success" role="alert">U bent succesvol uitgelogd</div>'
            : null;}
?>

<div class="container">
    <div class="row">

        <?php
        //get data
        $data = [ 0 => [ "usr_email" => "", "usr_password" => "" ]];

        //get template
        $output = file_get_contents("templates/login.html");

        //add extra elements
        $extra_elements['csrf_token'] = GenerateCSRF( "login.php"  );

        //merge
        $output = MergeViewWithData( $output, $data );
        $output = MergeViewWithExtraElements( $output, $extra_elements );

        print $output;
        ?>

    </div>
</div>

</body>
</html>