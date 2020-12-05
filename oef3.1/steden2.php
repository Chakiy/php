<?php
//include all in one file
include_once "./lib/include_print.php";
?>

<div class='container'>
    <div class='row'>

        <?php

        //  get data
        $sql = "select * from images";
        $data = getData($sql);

        //marge data and template
        $marge = margeColumnWithData("column.html", $data);
        print $marge;

        ?>
    </div>
</div>
</body>
</html>
