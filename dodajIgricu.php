<?php
	$igrica = $_POST['igrica'];
	$tvorac = $_POST['tvorac'];
	$platforma = $_POST['platforma'];
	$brIgraca = $_POST['brigraca'];
	$ocena = $_POST['ocena'];

	$conn = new mysqli('localhost', 'root', '', 'sem');
	if($conn->connect_error){
		die('Connection Failed : '.$conn->connect_error);
	}else{
		$stmt = $conn->prepare("insert into igrice(igrica, tvorac, platforma, brigraca, ocena)
			values(?, ?, ?, ?, ?)");
		$stmt->bind_param("sssis",$igrica, $tvorac, $platforma, $brIgraca, $ocena);
		$stmt->execute();
		echo "Uspesno ubacena igrica";
		$stmt->close();
		$conn->close();
	}

?>