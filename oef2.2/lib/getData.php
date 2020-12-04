<?php
require_once "connection.php";

function GetData( $sql_statement )
{
    global $conn;

    //define and execute query
    $result = $conn->query( $sql_statement );

    //show result (if there is any)
    if ( $result-> num_rows > 0 )
    {
        while ($row = $result-> fetch_assoc()) {
            // als er records zijn, steek ze dan in data array
            $data[] = $row;
        }
        return $data;
    }
    else
    {
        return [];
    }

}
