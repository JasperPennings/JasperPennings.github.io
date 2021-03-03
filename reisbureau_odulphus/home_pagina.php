<!DOCTYPE html PUBLIC>

<?php
$link = mysqli_connect("127.0.0.1", "root", "", "informatica_database");
mysqli_close($link);
?>


<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<script src="php_compo.js"></script>

<head>
	<title>Home</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 1.32" />
	<link rel="stylesheet" href="php_compo.css"></link>
</head>

<body>
	
	<h1 id="titel">Reisbureau Odulphus</h1>
		
	<p id="vertel_login">Vul hier uw gegevens in om in te loggen en uw reizen te zien:</p>
		
	<div id="input">

		<form method="post">
			<p>Gebruikersnaam:</p>
					
			<input type="text" name="gebruikersnaam">

			<p>Wachwoord:</p> 

			<input type="text" name="wachtwoord">

			<input type="submit" value="Aanmelden">
				<br>
				<br>
			<p id="registreren">Als u nog geen account heeft, kunt u zich hier registreren:</p>
			
			<button id="registreren_knop"><a href="registratie_pagina.php">Registreren</a></button>

		</form>
	
	</div>

<?php

$link = mysqli_connect("127.0.0.1", "root", "", "informatica_database");

if($link === false) {
	die("ERROR: Mislukt verbinding te maken." . mysqli_connect_error());
}

$gebruikersnaam = $_GET['gebruikersnaam'];


echo $gebruikersnaam;

?>



</body>

</html>
