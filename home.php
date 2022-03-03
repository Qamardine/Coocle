<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="bootstrap.css" rel="stylesheet">
	<title>IT-LIGHT</title>
</head>
<body style="background-image: url('entreprise.jpg');background-size: cover;">
	<header>
		<br>
		<div class="container">
			<div class="row">
				<div class="col-xl-2 col-lg-2 col-md-2 col-sm-6 col-6">
					<button type="button" class="btn btn-light rounded-circle" style="background-image: url('i.png'); background-size: cover; height: 40px; width: 40px;">
        			</button>
					<button type="button" class="btn btn-light rounded-circle" style="background-image: url('t.png'); background-size: cover; height: 40px; width: 40px;">
        			</button>
				</div>
				<div class="col-xl-9 col-lg-9 col-md-9 col-sm-3 col-3">
				
				</div>
				<div class="col-xl-1 col-lg-1 col-md-1 col-sm-3 col-3">
					<button type="button" class="btn btn-light rounded-circle" style="background-image: url('entreprise.png'); background-size: cover; height: 40px; width: 40px;">
        			</button><br>
        			<a class="text-white" href="">Connexion</a>
				</div>
			</div>
		</div>

	</header>
	<body>
		<br><br><br><br><br>
		<div class="container">
			<h1 class="appear text-center text-white">Bienvenue sur <img src="logo.png" width="400px"></h1><br><br><br>
			<form method="POST" action="traitement.php">
				<div class="row">
					<div class="col-lg-2">
				
					</div>
					<div class="col-lg-8">
						<input type="text" class="form-control" method="POST" action="../controller/traitementInfosConnexion.php" name="recherche">
					
					</div>
					<div class="col-lg-2">
						<button type="submit" class="btn btn-primary">Rechercher</button>
					</div>
				</div><br>
			</form>

			<div class="row">
				<div class="col-lg-4">
				
				</div>
				<div class="col-lg-4">
					
				</div>
				<div class="col-lg-4">
				
				</div>
			</div><br><br><br><br><br>
			<div class="row">
				<div class="col-lg-4">
				
				</div>
				<div class="col-lg-4">
					<a class="btn btn-outline-light clignote"><h5 class="text-dark">VOUS SOUHAITEZ GENERER PLUS DE TRAFIC ?</h5></a>
				</div>
				<div class="col-lg-4">
				
				</div>
			</div>

			

		</div>
	</body>

</body>
</html>