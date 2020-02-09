<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>ITEH</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

	<script type="text/javascript" src="saznaj.js"></script>
	<script type="text/javascript" src="ukloni.js"></script>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav">
				<li class="nav-item active">
					<a class="nav-link" href="index.php">GAMEMANIA<span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="saznaj.php">Saznaj</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="saznajAPI.php">API</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="VS.php">VS</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="VS1.php">VS1</a>
				</li>
			</ul>
			<ul class="navbar-nav" id="desno">
        <li class="nav-item">
          <a class="nav-link" href="reset.php">Reset password</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout.php">Log Out</a>
        </li>
      </ul>
		</div>
	</nav>
	<?php
	include "config.php";

	$upit = "SELECT * FROM igrice";

	$rezultat = $link->query($upit);
	$selected_val = 1;
	?>
	<h1>Saznajte o igrici</h1>
	<p>Izaberite iz padajućeg menija igricu koja vas zanima</p>	
	<form method="GET">
		<select name="igrica" id="odabrana_igrica">
			<?php
			while ($red = $rezultat->fetch_object()) {
				?>
				<option value="<?php echo $red->id; ?>"> <?php echo $red->igrica; ?> </option>
				<?php
			}
			?>
		</select>
	</form>
	<div id="prikaz"></div>
	<?php
	$link->close();
	?>
	<?php
?>

	<div id="ukloni">
		<form action="ukloni.php" method="POST">
					<label>Ime igrice</label><input type="imeigr" name="imeigr">
         <button type='submit' id='ukl'>Ukloni</button>
    </form>
	</div>
	<div id="dodavanje">
		<form action="dodaj.php">
			<input type="submit" value="Dodaj Igricu" />
		</form>

	</div>


</body>
</html>