<?php
$bdd = new SQLite3("bd.sq3");
$requete = "SELECT * FROM Entreprises";
$result = $bdd->query($requete);
$nbcol=$result->numColumns();

while($ligne=$result->fetchArray(SQLITE3_BOTH))
{
echo $ligne['Nom'];
}
?>