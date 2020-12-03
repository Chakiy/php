<?php

echo "<div class='col-sm-4'>";
echo '<h3>' .$row['img_title'] .'</h3>';
echo "<p>" .$row['img_width'] .'x' .$row['img_height'] ."</p>" ;
echo "<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>";
echo "<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>";
echo "<img class='img-fluid' src='$img' width='300px' height='250px'> <br>";
echo '<a href=stad.php?img_id=' . $row['img_id'] . '>Meer info</a>';
echo "</div>";

?>


