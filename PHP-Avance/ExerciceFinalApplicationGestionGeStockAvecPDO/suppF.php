<?php


$id = $_GET['id'];

$sql = "DELETE FROM fournisseurs WHERE idFournisseur='$id'";
echo "Données qui ont été supprimées : ";
var_dump($sql);


$resultat = $connexion->exec($sql);

echo "<br/><p><a href='index.php'>Retour à la page d'accueil</a></p>";