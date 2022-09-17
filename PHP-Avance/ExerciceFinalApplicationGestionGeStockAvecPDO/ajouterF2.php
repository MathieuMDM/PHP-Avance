<?php
include 'connect.php';
$societe = $_POST['societe'];
$adresse = $_POST['adresse'];
$cp = $_POST['cp'];
$ville = $_POST['ville'];
$commentaire = $_POST['commentaire'];

$requete = $connexion->prepare(
    "INSERT INTO fournisseurs (idFournisseur, Societe, Adresse, CP, Ville, Commentaire) VALUES (NULL, :societe, :adresse, :cp, :ville, :commentaire)"
);

$requete->bindParam(':societe', $societe, PDO::PARAM_STR);
$requete->bindParam(':adresse', $adresse, PDO::PARAM_STR);
$requete->bindParam(':cp', $cp, PDO::PARAM_INT);
$requete->bindParam(':ville', $ville, PDO::PARAM_STR);
$requete->bindParam(':commentaire', $commentaire, PDO::PARAM_STR);

$resultat = $requete->execute();

echo $resultat;
echo " - nombre de fournisseurs ajoutés";
echo "<br/><p><a href='index.php'>Retour à la page d'accueil</a></p>";