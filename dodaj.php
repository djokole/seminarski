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
        <a class="nav-link" href="registracija.php">Registracija</a>
      </li>
    </ul>
  </div>
</nav>

<div class="container">
<h1>Dodaj Igricu</h1>
    <form action="dodajIgricu.php" method="post">
      <div class="form-group row">
        <label for="igrica" class="col-sm-2 col-form-label">Igrica</label>
        <div class="col-sm-10">
          <input type="igrica" class="form-control" id="igrica" name="igrica">
        </div>
      </div>
      <div class="form-group row">
        <label for="tvorac" class="col-sm-2 col-form-label">Tvorac</label>
        <div class="col-sm-10">
          <input type="tvorac" class="form-control" id="tvorac" name="tvorac">
        </div>
      </div>
      <div class="form-group row">
        <label for="platforma" class="col-sm-2 col-form-label">Platforma</label>
        <div class="col-sm-10">
          <input type="platforma" class="form-control" id="platforma" name="platforma">
        </div>
      </div>
      <div class="form-group row">
        <label for="brigraca" class="col-sm-2 col-form-label">Broj Igraca</label>
        <div class="col-sm-10">
          <input type="brigraca" class="form-control" id="brigraca" name="brigraca">
        </div>
      </div>
      <div class="form-group row">
        <label for="ocena" class="col-sm-2 col-form-label">Ocena</label>
        <div class="col-sm-10">
          <input type="ocena" class="form-control" id="ocena" name="ocena">
        </div>
      </div>
      <input type="submit" name="submit">
    </form>
  </div>
  </div>
</body>
</html>