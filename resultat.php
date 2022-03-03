<?php 

session_start();
if($_SESSION['index'] == "precedent")
{
	$_SESSION['nbrewrite'] = $_SESSION['nbrewrite']-1;
	echo $_SESSION['nbrewrite'];
}
elseif($_SESSION['index'] == "suivant")
{

	$_SESSION['nbrewrite'] = $_SESSION['nbrewrite']+1;
}
else
{
	$_SESSION['nbrewrite'] = 1;
	$_SESSION['precedent'] = "page-link hidden";
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="bootstrap.css" rel="stylesheet">
	<title>IT-LIGHT</title>
</head>
<body>
	<header>
		<br>
		<div class="container">
			<div class="row">
				<div class="col-lg-2">
					<button type="button" class="btn btn-light rounded-circle" style="background-image: url('i.png'); background-size: cover; height: 40px; width: 40px;">
        			</button>
					<button type="button" class="btn btn-light rounded-circle" style="background-image: url('t.png'); background-size: cover; height: 40px; width: 40px;">
        			</button>
				</div>
				<div class="col-lg-9">
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
				</div>
				<div class="col-lg-1">
					<button type="button" class="btn btn-light rounded-circle" style="background-image: url('entreprise.png'); background-size: cover; height: 40px; width: 40px;">
        			</button><br>
        			<a class="text-white" href="">Connexion</a>
				</div>
			</div>
		</div>

	</header>
	<main><br><br>
		<div class="container">
			<p class="text-dark">Resultats</p>
			<div class="row">
				<div class="col-lg-3">
					<div class="card border-light mb-3 fichier" style="max-width: 18rem;">
  						<div class="card-header text-primary"><?php echo $_SESSION['Nom-'.$_SESSION['nbrewrite']]; ?></div>
  							<div class="card-body">
    							<p class="card-title text-info">Domaine : <?php echo $_SESSION['Categorie-'.$_SESSION['nbrewrite']]; ?></p>
    							<p class="card-text text-dark">Addresse : <?php echo $_SESSION['Adresse-'.$_SESSION['nbrewrite']]; ?></p>
    							<p class="card-text text-info"><?php echo $_SESSION['Numero-'.$_SESSION['nbrewrite']]; $_SESSION['nbrewrite']++; ?></p>
    							<a class="card-text text-info text-center" href="">Site web</a>
  							</div>
					</div>
				</div>
				<div class="col-lg-3">
					<div class="card border-light mb-3 fichier" style="max-width: 18rem;">
  						<div class="card-header text-primary"><?php echo $_SESSION['Nom-'.$_SESSION['nbrewrite']]; ?></div>
  							<div class="card-body">
    							<p class="card-title text-info">Domaine : <?php echo $_SESSION['Categorie-'.$_SESSION['nbrewrite']]; ?></p>
    							<p class="card-text text-dark">Addresse : <?php echo $_SESSION['Adresse-'.$_SESSION['nbrewrite']]; ?></p>
    							<p class="card-text text-info"><?php echo $_SESSION['Numero-'.$_SESSION['nbrewrite']]; $_SESSION['nbrewrite']++; ?></p>
    							<a class="card-text text-info text-center" href="">Site web</a>
  							</div>
					</div>
				</div>
				<div class="col-lg-3">
					<div class="card border-light mb-3 fichier" style="max-width: 18rem;">
  						<div class="card-header text-primary"><?php echo $_SESSION['Nom-'.$_SESSION['nbrewrite']]; ?></div>
  							<div class="card-body">
    							<p class="card-title text-info">Domaine : <?php echo $_SESSION['Categorie-'.$_SESSION['nbrewrite']]; ?></p>
    							<p class="card-text text-dark">Addresse : <?php echo $_SESSION['Adresse-'.$_SESSION['nbrewrite']]; ?></p>
    							<p class="card-text text-info"><?php echo $_SESSION['Numero-'.$_SESSION['nbrewrite']]; $_SESSION['nbrewrite']++; ?></p>
    							<a class="card-text text-info text-center" href="">Site web</a>
  							</div>
					</div>
				</div>
				<div class="col-lg-3">
					<div class="card border-light mb-3 fichier" style="max-width: 18rem;">
  						<div class="card-header text-primary"><?php echo $_SESSION['Nom-'.$_SESSION['nbrewrite']]; ?></div>  							<div class="card-body">
    							<p class="card-title text-info">Domaine : <?php echo $_SESSION['Categorie-'.$_SESSION['nbrewrite']]; ?></p>
    							<p class="card-text text-dark">Addresse : <?php echo $_SESSION['Adresse-'.$_SESSION['nbrewrite']]; ?></p>
    							<p class="card-text text-info"><?php echo $_SESSION['Numero-'.$_SESSION['nbrewrite']]; $_SESSION['nbrewrite']++; ?></p>
    							<a class="card-text text-info text-center" href="">Site web</a>
  							</div>
					</div>
				</div>
			</div><br>
			<div class="row">
				<div class="col-lg-3">
					<div class="card border-light mb-3 fichier" style="max-width: 18rem;">
  						<div class="card-header text-primary"><?php echo $_SESSION['Nom-'.$_SESSION['nbrewrite']]; ?></div>  							<div class="card-body">
    							<p class="card-title text-info">Domaine : <?php echo $_SESSION['Categorie-'.$_SESSION['nbrewrite']]; ?></p>
    							<p class="card-text text-dark">Addresse : <?php echo $_SESSION['Adresse-'.$_SESSION['nbrewrite']]; ?></p>
    							<p class="card-text text-info"><?php echo $_SESSION['Numero-'.$_SESSION['nbrewrite']]; $_SESSION['nbrewrite']++; ?></p>
    							<a class="card-text text-info text-center" href="">Site web</a>
  							</div>
					</div>
				</div>
				<div class="col-lg-3">
					<div class="card border-light mb-3 fichier" style="max-width: 18rem;">
  						<div class="card-header text-primary"><?php echo $_SESSION['Nom-'.$_SESSION['nbrewrite']]; ?></div>  							<div class="card-body">
    							<p class="card-title text-info">Domaine : <?php echo $_SESSION['Categorie-'.$_SESSION['nbrewrite']]; ?></p>
    							<p class="card-text text-dark">Addresse : <?php echo $_SESSION['Adresse-'.$_SESSION['nbrewrite']]; ?></p>
    							<p class="card-text text-info"><?php echo $_SESSION['Numero-'.$_SESSION['nbrewrite']]; $_SESSION['nbrewrite']++; ?></p>
    							<a class="card-text text-info text-center" href="">Site web</a>
  							</div>
					</div>
				</div>
				<div class="col-lg-3">
					<div class="card border-light mb-3 fichier" style="max-width: 18rem;">
  						<div class="card-header text-primary"><?php echo $_SESSION['Nom-'.$_SESSION['nbrewrite']]; ?></div>  							<div class="card-body">
    							<p class="card-title text-info">Domaine : <?php echo $_SESSION['Categorie-'.$_SESSION['nbrewrite']]; ?></p>
    							<p class="card-text text-dark">Addresse : <?php echo $_SESSION['Adresse-'.$_SESSION['nbrewrite']]; ?></p>
    							<p class="card-text text-info"><?php echo $_SESSION['Numero-'.$_SESSION['nbrewrite']]; $_SESSION['nbrewrite']++; ?></p>
    							<a class="card-text text-info text-center" href="">Site web</a>
  							</div>
					</div>
				</div>
				<div class="col-lg-3">
					<div class="card border-light mb-3 fichier" style="max-width: 18rem;">
  						<div class="card-header text-primary"><?php echo $_SESSION['Nom-'.$_SESSION['nbrewrite']]; ?></div>  							<div class="card-body">
    							<p class="card-title text-info">Domaine : <?php echo $_SESSION['Categorie-'.$_SESSION['nbrewrite']]; ?></p>
    							<p class="card-text text-dark">Addresse : <?php echo $_SESSION['Adresse-'.$_SESSION['nbrewrite']]; ?></p>
    							<p class="card-text text-info"><?php echo $_SESSION['Numero-'.$_SESSION['nbrewrite']]; $_SESSION['nbrewrite']++; ?></p>
    							<a class="card-text text-info text-center" href="">Site web</a>
  							</div>
					</div>
				</div>
			</div><br><br>
			<div class="row">
				<div class="col-lg-3">
					<div class="card border-light mb-3 fichier" style="max-width: 18rem;">
  						<div class="card-header text-primary"><?php echo $_SESSION['Nom-'.$_SESSION['nbrewrite']]; ?></div>  							<div class="card-body">
    							<p class="card-title text-info">Domaine : <?php echo $_SESSION['Categorie-'.$_SESSION['nbrewrite']]; ?></p>
    							<p class="card-text text-dark">Addresse : <?php echo $_SESSION['Adresse-'.$_SESSION['nbrewrite']]; ?></p>
    							<p class="card-text text-info"><?php echo $_SESSION['Numero-'.$_SESSION['nbrewrite']]; $_SESSION['nbrewrite']++; ?></p>
    							<a class="card-text text-info text-center" href="">Site web</a>
  							</div>
					</div>
				</div>
				<div class="col-lg-3">
					<div class="card border-light mb-3 fichier" style="max-width: 18rem;">
  						<div class="card-header text-primary"><?php echo $_SESSION['Nom-'.$_SESSION['nbrewrite']]; ?></div>  							<div class="card-body">
    							<p class="card-title text-info">Domaine : <?php echo $_SESSION['Categorie-'.$_SESSION['nbrewrite']]; ?></p>
    							<p class="card-text text-dark">Addresse : <?php echo $_SESSION['Adresse-'.$_SESSION['nbrewrite']]; ?></p>
    							<p class="card-text text-info"><?php echo $_SESSION['Numero-'.$_SESSION['nbrewrite']]; $_SESSION['nbrewrite']++; ?></p>
    							<a class="card-text text-info text-center" href="">Site web</a>
  							</div>
					</div>
				</div>
				<div class="col-lg-3">
					<div class="card border-light mb-3 fichier" style="max-width: 18rem;">
  						<div class="card-header text-primary"><?php echo $_SESSION['Nom-'.$_SESSION['nbrewrite']]; ?></div>  							<div class="card-body">
    							<p class="card-title text-info">Domaine : <?php echo $_SESSION['Categorie-'.$_SESSION['nbrewrite']]; ?></p>
    							<p class="card-text text-dark">Addresse : <?php echo $_SESSION['Adresse-'.$_SESSION['nbrewrite']]; ?></p>
    							<p class="card-text text-info"><?php echo $_SESSION['Numero-'.$_SESSION['nbrewrite']]; $_SESSION['nbrewrite']++; ?></p>
    							<a class="card-text text-info text-center" href="">Site web</a>
  							</div>
					</div>
				</div>
				<div class="col-lg-3">
					<div class="card border-light mb-3 fichier" style="max-width: 18rem;">
  						<div class="card-header text-primary"><?php echo $_SESSION['Nom-'.$_SESSION['nbrewrite']]; ?></div>  							<div class="card-body">
    							<p class="card-title text-info">Domaine : <?php echo $_SESSION['Categorie-'.$_SESSION['nbrewrite']]; ?></p>
    							<p class="card-text text-dark">Addresse : <?php echo $_SESSION['Adresse-'.$_SESSION['nbrewrite']]; ?></p>
    							<p class="card-text text-info"><?php echo $_SESSION['Numero-'.$_SESSION['nbrewrite']]; $_SESSION['nbrewrite']++; ?></p>
    							<a class="card-text text-info text-center" href="">Site web</a>
  							</div>
					</div>
				</div>
			</div><br><br>
		</div>

	</main>
	<footer>
		
	</footer>
</body>
</html>