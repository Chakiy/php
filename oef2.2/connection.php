<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "steden";

//create connection
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn -> connect_error) {
   die("Error description: " . $conn -> connect_error); //PHP_EOL == \n

}
echo "Connected to MySQL!" . PHP_EOL;
echo "Server info: " . mysqli_get_host_info($conn);



