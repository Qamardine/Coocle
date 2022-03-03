<?php

session_start();
$_SESSION['index'] = "";
$fichier = fopen('recherche.txt', 'w');
fwrite($fichier, $_POST['recherche']);
shell_exec('C:\Users\MOUSSA\AppData\Local\Programs\Python\Python36\python test.py');
$conn = new SQLite3('bd.sq3');
$req = "SELECT * FROM Entreprises";
if ($result = $conn->query($req))
{
	$i=1;
	while($ligne=$result->fetchArray(SQLITE3_BOTH))
	{
		$_SESSION['Nom-'.$i] = $ligne['Nom'];
		$_SESSION['Categorie-'.$i] = $ligne['Categorie'];
		$_SESSION['Adresse-'.$i] = $ligne['Adresse'];
		$_SESSION['Numero-'.$i] = $ligne['Numero'];
		$i++;
	}
}

header('Location:resultat.php');




 

?>