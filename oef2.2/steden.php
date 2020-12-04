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

        //marge data and template
        $marge = margeColumnWithData("column.html", $dataArr);
        print $marge;

        ?>
    </div>
</div>
</body>
</html>
