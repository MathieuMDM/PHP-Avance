<?php 
include 'connect.php';

$id = $_POST['idproduits'];
$reference = $_POST['reference'];
$nom = $_POST['nom'];
$idFournisseur = $_POST['idFournisseur'];
$quantite = $_POST['quantite'];
$commentaire = $_POST['commentaire'];

$requete = $connexion->prepare(
"UPDATE produits SET reference=:reference, nom=:nom, idFournisseur=:idFournisseur, quantite=:quantite, commentaire=:commentaire WHERE idproduits=:idproduits");

$requete->bindParam(':reference', $reference, PDO::PARAM_STR);
$requete->bindParam(':nom', $nom, PDO::PARAM_STR);
$requete->bindParam(':quantite', $quantite, PDO::PARAM_INT);
$requete->bindParam(':idFournisseur', $idFournisseur, PDO::PARAM_INT);
$requete->bindParam(':commentaire', $commentaire, PDO::PARAM_STR);
$requete->bindParam(':idproduits', $id, PDO::PARAM_INT);

$resultat = $requete->execute();

echo "Nombre de changements : ". $resultat;


echo "<br/><p><a href='index.php'>Retour à la page d'accueil</a></p>";
    
?>