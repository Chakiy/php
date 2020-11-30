<head>

    <title>
        Studenten Tabel
    </title>
    <link rel="stylesheet" href="style.css" />
</head>


<?php
//crearing student array
$student =	array(
    "voornaam" =>  "Jan",
    "naam" =>  "Janssens",
    "straat" =>  "Oude baan",
    "huisnr" =>  "22",
    "postcode" =>  2800,
    "gemeente" =>  "Mechelen",
    "geboortedatum" =>  "14/05/1991",
    "telefoon" =>  "015 24 24 26",
    "e-mail" =>  "jan.janssens@gmail.com"
);



function StudentToTable($studentenlist){

    $h1 = "Student";
    echo "<table>";
    echo " <th>
        <h1>$h1</h1>
      </th>";

    foreach($studentenlist as $x => $val) {
        $x = ucfirst($x);
        echo "<tr><td><p>$x</p></td><td><p>$val</p></td></tr>";
    }
    echo "</table>";

}

StudentToTable($student);

?>
