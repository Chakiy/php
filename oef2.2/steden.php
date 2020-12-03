<?php

error_reporting( E_ALL );
ini_set( 'display_errors', 1 );

include_once "getData.php";
include_once "templates/head.html";
include_once "templates/jumbotron.html";

?>


<div class='container'>
    <div class='row'>

        <?php
           $sql_stat1 = "select * from images";
           $dataArr = getData($sql_stat1);
            print_r($dataArr);
//

                    foreach ($dataArr as $row ) {

                        $img = './img/'.$row['img_filename'];


                        echo "<div class='col-sm-4'>";
                        echo '<h3>' .$row["img_title"] . '</h3>';
                        echo '<p>' .$row['img_width']. 'x' .$row['img_height']. '</p>' ;
                        echo "<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>";
                        echo "<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>";
                        echo "<img class='img-fluid' src='$img'> ";


                        echo "</div>";

                    }

        ?>
    </div>
</div>
</body>
</html>
