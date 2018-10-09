<!DOCTYPE html>
<html>
<head>
	<title>POO-pokemon</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	
	<?php

	ini_set('display_errors', 1);
	require_once "Pokemon.class.php";

	$marisson = new Pokemon("marisson", "herbe", 60, "base");

	$marisson->afficher();

	$feunnec = new Pokemon("feunnec", "feu", 60, "base");

	$feunnec->afficher();

	// echo $marisson->nom;
	// echo $marisson->type;
	

	?>

	
</body>
</html>
