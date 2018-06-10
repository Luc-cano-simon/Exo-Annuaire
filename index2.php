<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="style.css" />
	<title> Formulaire d'inscription </title>
</head>
<body>
<?php
	include("Annuaire.php");
?>
	<h3> Veuillez remplir le formulaire ci dessous </h3>

	<form method="POST" ACTION="">
<br>
Votre Nom*:
<br>
	<input type="text" name="nom" size="20" maxlength="20"> <br>
<br>
Votre Prenom*:
<br>

	<input type="text" name="prenom" size="20" maxlength="20"> <br>
<br>
Votre adresse eMail*:
<br>
	<input type="text" name="email" size="20" maxlength="20"> <br>
<br>
Lieu d'habitation (votre ville)*:
<br>
	<input type="text" name="ville" size="20" maxlength="20"> <br>
<br>
Votre numéro de telephone *:
<br>
	<input type="text" name="telephone" size="20" maxlength="20"> <br>
<br>

<br>
	<button name="submit" type="submit" value="Envoyer">Envoyer le formulaire</button>
</form>

</body>
</html>