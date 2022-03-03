<?php
session_start();
$_SESSION['index'] = "suivant";
header('Location:resultat.php');
$_SESSION['precedent'] = "display";

?>