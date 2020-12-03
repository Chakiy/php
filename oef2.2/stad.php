<?php

include_once "getData.php";
include_once "lib/sqlInjections.php";
include_once "lib/errorHandling.php";
include_once "lib/htmlComponents.php";
printHead("templates/head.html");
printHead("templates/jumbo.html");

?>

<div class='container'>
    <div class='row'>

<?php

     $sql = "select * from images where img_id=" . $_GET['img_id'] ;
     $get_data_arr = getData($sql);



            foreach ($get_data_arr as $row ) {

                $img = './img/'.$row['img_filename'];

                echo "<div class='col-sm-12'>";
                echo '<h3>' . $row['img_title'] .'</h3>';
                echo 'filename: ' .$row['img_filename'] .'<br>';
                echo "$row[img_width] x $row[img_height] <br>" ;
                echo "<img class='img-fluid' src='$img' width='75%'> <br>";
                echo "<a href='steden2.php'>Terug naar overzicht</a>";

                echo "</div>";

            }

?>

    </div>
</div>


</body>
</html>