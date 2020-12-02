<html>
<body>

<div class='container'>
    <div class='row'>

<?php
include_once "connection.php";

echo $_GET["id"];

function getData($statement){
    global $conn;
    $result = $conn -> query($statement);

    // show result if there are many
    if ($result -> num_rows > 0){

        // output data of each row
        while($row = $result -> fetch_assoc()){

            $steden = array("$row[img_filename]" => "$row[img_title]");

            foreach ($steden as $key => $value ) {

                $img = './img/'.$key;

                echo "<div class='col-sm-4'>";
                echo "<h3>$value </h3>";
                echo " filename: $row[img_filename] <br>" ;
                echo "<br>";
                echo "$row[img_width] x $row[img_height] <br>" ;
                echo "<br>";
                echo "<img class='img-fluid' src='$img' width='75%'> <br>";
                echo "<br>";
                echo "<a href='steden2.php'>Terug naar overzicht</a>";

                echo "</div>";

            }

        }
    }
}
$sql = "select * from images where img_id=" . $_GET['img_id'] ;

getData($sql);

?>
        <br>
    </div>
</div>


</body>
</html>