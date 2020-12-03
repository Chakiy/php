<?php
//include all in one file
include_once "./lib/include_print.php";
?>


<div class='container'>
    <div class='row'>

        <?php
        //     define and execute query in data-function
           $sql_stat1 = "select * from images";
           $dataArr = getData($sql_stat1);
//            print_r($dataArr);

                  //voor elke colomn gegevens halen
                    foreach ($dataArr as $row ) {

                        $img = './img/'.$row['img_filename'];

                        include "templates/column.php"; // colom laden
                        echo "</div>";
                    }

        ?>
    </div>
</div>
</body>
</html>
