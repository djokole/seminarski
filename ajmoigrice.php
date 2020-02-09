<?php

if (!isset($_GET['id'])) {
    echo "Parametar ID nije prosleđen!";
} else {

    $pomocna = $_GET["id"];
 
    include "config.php";


    $upit = "SELECT * FROM igrice WHERE id = '$pomocna'";

    $rezultat = $link->query($upit);


    echo "<table border='1'>
            <tr>
            <th>Igrica</th>
            <th>Tvorac</th>
            <th>Platforma</th>
            <th>Broj igrača</th>
            <th>Ocena</th>
            </tr>";

    while ($red = $rezultat->fetch_object()) {
        echo "<tr>";

        echo "<td>" . $red->igrica . "</td>";
        echo "<td>" . $red->tvorac ."</td>";
        echo "<td>" . $red->platforma ."</td>";
        echo "<td>" . $red->brigraca ."</td>";
        echo "<td>" . $red->ocena ."</td>";
        echo "</tr>";
    }
    echo "</table>";


    $link->close();
}