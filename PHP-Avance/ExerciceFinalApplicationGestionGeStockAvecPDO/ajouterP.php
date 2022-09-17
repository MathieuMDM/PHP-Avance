<form class="col w-50" action="ajouterP2.php" method="post">
    <fieldset class="form-group border p-3">

        <legend class="w-auto px-2 text-center">Ajouter de nouveaux produits</legend>
        <div>
            <label for="code" class="bg-secondary text-primary col text-left" style="margin-top: 10px;"> Référence:
            </label>
            <input name="reference" id="reference" class="bg-light text-dark col" type="text" value="" required />

            <label for="code" class="bg-secondary text-primary col text-left" style="margin-top: 10px;"> Nom:
            </label>
            <input name="nom" id="nom" class="bg-light text-dark col" type="text" value="" required />

            <label for="code" class="bg-secondary text-primary col text-left" style="margin-top: 10px;"> Fournisseur:
            </label>
            <!-- <input name="fournisseur" id="fournisseur" class="bg-light text-dark col" type="text" value="" required /> -->
            <select name="fournisseur" id="fournisseur">
                <option value=""> -- Sélectionnez l'identifiant du fournisseur -- </option>
                <?php


$sql = $connexion->query("SELECT idFournisseur, Societe FROM fournisseurs");
$all = $sql->fetchAll();

for($row=0; $row <count($all); $row++){

        echo "<option value='" . $all[$row][0] . "'>".$all[$row][1]."</option>";    

}

echo "</select>";

// echo $all[0][0];
?>

                <label for="code" class="bg-secondary text-primary col text-left" style="margin-top: 10px;"> Quantité:
                </label>
                <input name="quantite" id="quantite" class="bg-light text-dark col" type="text" value="" required />

                <label for="code" class="bg-secondary text-primary col text-left" style="margin-top: 10px;">
                    Commentaire:
                </label>
                <input name="commentaire" id="commentaire" class="bg-light text-dark col" type="text" value=""
                    required />

        </div>
        <br>
        <input style='margin-left:45%' type="submit" value="Ajouter">
        <br>
    </fieldset>
    <br>
    <p><a style='margin-left:40%' href='index.php'>Retour à la page d'accueil</a></p>
</form>