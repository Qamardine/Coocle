<?php
session_start();
$_SESSION['index'] = "precedent";
header('Location:resultat.php');
$_SESSION['precedent'] = "display";

?>