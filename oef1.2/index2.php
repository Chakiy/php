<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        @media screen and (max-width: 1001px) {
            .img {
                width: 220px;
                height: 180px;
            }
        }
    </style>
</head>
<body>

<div class="jumbotron text-center">
    <h1>Top 3 best visited City's</h1>
    <p>Resize this responsive page to see the effect!</p>
</div>


<div class='container'>
    <div class='row'>

        <?php
        $steden = array(london => "London", berlin => "Berlin", paris => "Paris");

        foreach ($steden as $key => $value ) {

            $img = './img/'.$key.'.jpeg';


            echo "<div class='col-sm-4'>";
            echo "<h3>$value </h3>";
            echo "<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>";
            echo "<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>";
            echo "<img class='img' src='$img' width='300px' height='250px'> ";


            echo "</div>";

        }
        ?>
    </div>
</div>
</body>
</html>
