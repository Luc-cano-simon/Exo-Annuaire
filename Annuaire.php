<?php
// on se connecte à mysql :
try  
{
 $bdd = new PDO('mysql:host=localhost;dbname=Annuaire;charset=utf8', 'luc', 'lucho1803');
}
// en cas d'erreur on affiche un message :
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}


 
$req = $bdd->prepare('INSERT INTO contacts (nom, prenom, ville, email, telephone) VALUES(?, ?, ?, ?, ?, )');
$req->execute(array($_POST['nom'], $_POST['prenom'], $_POST['cp'], $_POST['ville'], $_POST['email'], $_POST['telephone']));


?>