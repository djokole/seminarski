<?php


include "config.php";


$upit = "SELECT * FROM igrice";

$rezultat = $link->query($upit);

$json_array = array();


while ($red = $rezultat->fetch_object()) {

	$json_array[] = $red;

}

echo json_encode($json_array);

$link->close();

?>