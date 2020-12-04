<?php

include_once "lib/getData.php";
include_once "lib/sqlInjections.php";
include_once "lib/errorHandling.php";
include_once "lib/htmlComponents.php";

$sqlTitle = "select * from images where img_id='" . $_GET['img_id'] . "'";
$dataTitle = getData($sqlTitle);
printTitleStad("head.html", $dataTitle);
printJumboStad("jumbo.html" , $dataTitle );



?>

<div class='container'>
    <div class='row'>

<?php

     $sql = "select * from images where img_id='" . $_GET['img_id'] . "'";
     $get_data = getData($sql);


     //merge
    $marge = margeColumnWithData("column_stad.html", $get_data);
    print $marge

?>

    </div>
</div>


</body>
</html>