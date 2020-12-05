<?php

//print json_encode($_POST);

include_once "./lib/connection.php";

$sql = "insert into images set ";
$sql .= "img_title = '" .$_POST['img_title']."' , ";
$sql .= "img_filename = '" .$_POST['img_filename']."' , ";
$sql .= "img_width = '" .$_POST['img_width']."' , ";
$sql .= "img_height = '" .$_POST['img_height']."'";

$result = $conn->query( $sql );


header("Location: steden2.php ");

$conn -> close();



