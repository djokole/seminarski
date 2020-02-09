<?php
	$ime = $_POST['imeigr'];

	$conn = new mysqli('localhost', 'root', '', 'sem');
	if($conn->connect_error){
		die('Connection Failed : '.$conn->connect_error);
	}else{

		$upit = "DELETE FROM igrice WHERE igrica = '$ime'";

    $conn->query($upit);

    echo "Igrica uspesno obrisana";
	}
?>