<?php
//include all in one file
include_once "./lib/include_print.php";
?>

<div class='container'>
    <div class='row'>

        <?php

        //     define and execute query in data-function
        $sql = "select * from images";
        $get_data_array = getData($sql);

                    //voor elke colomn gegevens halen
                    foreach ($get_data_array as $row ) {

                        $img = './img/'.$row['img_filename'];

                        include "templates/column.php"; // colom laden
                        echo '<a href=stad.php?img_id=' . $row['img_id'] . '>Meer info</a>';
                        echo "</div>";
                    }


        ?>
    </div>
</div>
</body>
</html>
