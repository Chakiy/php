<?php
error_reporting( E_ALL );
ini_set( 'display_errors', 1 );

require_once "lib/autoload.php";

PrintHead();
PrintJumbo( $title = "Leuke plekken in Europa" ,
            $subtitle = "Tips voor citytrips voor vrolijke vakantiegangers!" );
PrintNavbar();

if(isset($_SESSION["message"]))
{
    echo"<div class='alert alert-success' role='alert'>
                    Welcome you are logged in!
                     </div>";
    unset($_SESSION["message"]);
}
?>


<div class="container">
    <div class="row">

<?php
    //get data
    $data = GetData( "select * from images" );

    //get template
    $template = file_get_contents("templates/column.html");

    //merge
    $output = MergeViewWithData( $template, $data );
    print $output;
?>

    </div>
</div>

</body>
</html>