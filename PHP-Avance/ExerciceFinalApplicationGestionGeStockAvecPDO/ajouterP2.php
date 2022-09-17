<?php
include 'connect.php';

$reference = $_POST['reference'];
$nom = $_POST['nom'];
$fournisseur = $_POST['fournisseur'];
$quantite = $_POST['quantite'];
$commentaire = $_POST['commentaire'];

$requete = $connexion->prepare(
    "INSERT INTO produits (idproduits, reference, nom, idFournisseur, quantite , commentaire) VALUES (NULL, :reference, :nom, :idFournisseur, :quantite, :commentaire)"
);

$requete->bindParam(':reference', $reference, PDO::PARAM_STR);
$requete->bindParam(':nom', $nom, PDO::PARAM_STR);
$requete->bindParam(':quantite', $quantite, PDO::PARAM_INT);
$requete->bindParam(':idFournisseur', $fournisseur, PDO::PARAM_INT);
$requete->bindParam(':commentaire', $commentaire, PDO::PARAM_STR);

$resultat = $requete->execute();

echo $resultat;
echo " - nombre de produits ajoutés";
echo "<br/><p><a href='index.php'>Retour à la page d'accueil</a></p>";
