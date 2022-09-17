<?php



$id = $_GET['id'];

$requete = "SELECT * FROM produits WHERE idproduits='$id'";
$resultat = $connexion->query($requete);

$list = $resultat->fetchAll(PDO::FETCH_ASSOC);
foreach ($list as $fetchAssoc) {
    $all = $fetchAssoc['idproduits'] . ","
        . $fetchAssoc['reference'] . "," . $fetchAssoc['nom'] . "," . $fetchAssoc['idFournisseur'] . "," . $fetchAssoc['quantite'] . "," . $fetchAssoc['commentaire'];
}
$id = $fetchAssoc['idproduits'];
$reference = $fetchAssoc['reference'];
$nom = $fetchAssoc['nom'];
$idFournisseur = $fetchAssoc['idFournisseur'];
$quantite = $fetchAssoc['quantite'];
$commentaire = $fetchAssoc['commentaire'];

?>



<form class="col w-50" action="modiP2.php" method="post">
    <fieldset class="form-group border p-3">

        <legend class="w-auto px-2 text-center">Modifier les données du fournisseur</legend>
        <div style="display:flex; flex-direction:column">
            <label for="id" class="bg-secondary text-white col text-left"> id Produit :</label>
            <input name="idproduits" id="idproduits" class="bg-warning text-dark col" type="text"
                value="<?php echo $id; ?>" readonly />

            <label for="code" class="bg-secondary text-white col text-left" style="margin-top: 10px;"> Reference
            </label>
            <input name="reference" id="reference" class="bg-light text-dark col" type="text"
                value="<?php echo $reference; ?>" required />

            <label for="code" class="bg-secondary text-white col text-left" style="margin-top: 10px;"> Nom
            </label>
            <input name="nom" id="nom" class="bg-light text-dark col" type="text" value="<?php echo $nom; ?>"
                required />

            <label for="code" class="bg-secondary text-white col text-left" style="margin-top: 10px;"> idFournisseur
            </label>
            <input name="idFournisseur" id="idFournisseur" class="bg-light text-dark col" type="text"
                value="<?php echo $idFournisseur; ?>" required />

            <label for="code" class="bg-secondary text-white col text-left" style="margin-top: 10px;"> Quantite
            </label>
            <input name="quantite" id="quantite" class="bg-light text-dark col" type="text"
                value="<?php echo $quantite; ?>" required />

            <label for="code" class="bg-secondary text-white col text-left" style="margin-top: 10px;"> Commentaire
            </label>
            <input name="commentaire" id="commentaire" class="bg-light text-dark col" type="text"
                value="<?php echo $commentaire; ?>" required />


        </div>
        <div style="display:flex; justify-content: space-around;">
            <input type="submit" value="Valider">
        </div>
    </fieldset>
</form>