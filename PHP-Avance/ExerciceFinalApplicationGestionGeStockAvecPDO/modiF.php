<?php



$id = $_GET['id'];

$requete = "SELECT * FROM fournisseurs WHERE idFournisseur='$id'";
$resultat = $connexion->query($requete);

$list = $resultat->fetchAll(PDO::FETCH_ASSOC);
foreach ($list as $fetchAssoc) {
    $all = $fetchAssoc['idFournisseur'] . ","
        . $fetchAssoc['Societe'] . "," . $fetchAssoc['Adresse'] . "," . $fetchAssoc['CP'] . "," . $fetchAssoc['Ville'] . "," . $fetchAssoc['Commentaire'];
}
$id = $fetchAssoc['idFournisseur'];
$societe = $fetchAssoc['Societe'];
$adresse = $fetchAssoc['Adresse'];
$cp = $fetchAssoc['CP'];
$ville = $fetchAssoc['Ville'];
$commentaire = $fetchAssoc['Commentaire'];

?>

<form class="col w-50" action="modiF2.php" method="post">
    <fieldset class="form-group border p-3">

        <legend class="w-auto px-2 text-center">Modifier les données du fournisseur</legend>
        <div style="display:flex; flex-direction:column">
            <label for="id" class="bg-secondary text-white col text-left"> idFournisseur :</label>
            <input name="idFournisseur" id="idFournisseur" class="bg-warning text-dark col" type="text"
                value="<?php echo $id; ?>" readonly />

            <label for="code" class="bg-secondary text-white col text-left" style="margin-top: 10px;"> Societe
            </label>
            <input name="societe" id="societe" class="bg-light text-dark col" type="text"
                value="<?php echo $societe; ?>" required />

            <label for="code" class="bg-secondary text-white col text-left" style="margin-top: 10px;"> Adresse
            </label>
            <input name="adresse" id="adresse" class="bg-light text-dark col" type="text"
                value="<?php echo $adresse; ?>" required />

            <label for="code" class="bg-secondary text-white col text-left" style="margin-top: 10px;"> CP
            </label>
            <input name="cp" id="cp" class="bg-light text-dark col" type="text"
                value="<?php echo $cp; ?>" required />

            <label for="code" class="bg-secondary text-white col text-left" style="margin-top: 10px;"> Ville
            </label>
            <input name="ville" id="ville" class="bg-light text-dark col" type="text"
                value="<?php echo $ville; ?>" required />

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