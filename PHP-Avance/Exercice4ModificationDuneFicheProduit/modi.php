<?php

require_once 'connect.php';

$id = $_POST['id'];
$code = $_POST['code'];
$designation = $_POST['designation'];
$prixUnitaire = $_POST['prixUnitaire'];
$madeIn = $_POST['made_in'];
$update = "UPDATE produit SET code='$code', designation = '$designation', prixUnitaire = '$prixUnitaire', made_in = '$madeIn' WHERE id='$id'";

$resultat = $connexion->exec($update);

if ($update) {
    echo "Nombre de changements : ".$update;
} else {
    echo "Vous avez entré des données incorrectes";
}
    echo "<p><a href='index.php'>Retour</a></p>";
