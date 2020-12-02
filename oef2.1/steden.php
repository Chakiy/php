<?php

error_reporting( E_ALL );
ini_set( 'display_errors', 1 );

include_once "connection.php"

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>


<div class="jumbotron text-center">
    <h1>Top 3 best visited City's</h1>
    <p>Resize this responsive page to see the effect!</p>
</div>


<div class='container'>
    <div class='row'>

        <?php

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
                        echo "$row[img_width] x $row[img_height]" ;
                        echo "<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>";
                        echo "<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>";
                        echo "<img class='img-fluid' src='$img' width='300px' height='250px'> ";


                        echo "</div>";

                    }

                }
            }
        }



        //define and execute query
        $sql = "select * from images";


        getData($sql);

        ?>
    </div>
</div>
</body>
</html>
