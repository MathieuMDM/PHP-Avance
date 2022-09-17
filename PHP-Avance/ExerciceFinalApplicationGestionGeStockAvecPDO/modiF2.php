<?php
include 'connect.php';

$id = $_POST['idFournisseur'];
$societe = $_POST['societe'];
$adresse = $_POST['adresse'];
$cp = $_POST['cp'];
$ville = $_POST['ville'];
$commentaire = $_POST['commentaire'];

$requete = $connexion->prepare(
    "UPDATE fournisseurs SET Societe=:societe, Adresse=:adresse, CP=:cp, Ville=:ville, Commentaire=:commentaire WHERE idFournisseur=:idFournisseur"
);

$requete->bindParam(':societe', $societe, PDO::PARAM_STR);
$requete->bindParam(':adresse', $adresse, PDO::PARAM_STR);
$requete->bindParam(':cp', $cp, PDO::PARAM_INT);
$requete->bindParam(':ville', $ville, PDO::PARAM_STR);
$requete->bindParam(':commentaire', $commentaire, PDO::PARAM_STR);
$requete->bindParam(':idFournisseur', $id, PDO::PARAM_INT);

$resultat = $requete->execute();


echo "Nombre de changements : ". $resultat;
echo "<br/><p><a href='index.php'>Retour à la page d'accueil</a></p>";

// if ($requete) {
//     echo "Nombre de changements : ".$requete;
//     }
//     else {
//     echo "Vous avez entré des données incorrectes";
//     }
//
