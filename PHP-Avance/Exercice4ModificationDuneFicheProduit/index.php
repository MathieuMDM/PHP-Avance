<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css"
        integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">

    <title>Exercice 4 Modification d'une fiche produit</title>
</head>

<body>

    <form class="col w-50" name="FormAjout" action="modification.php" method="post">
        <fieldset class="form-group border p-3">
            <legend class="w-auto px-2 text-center">Sélectionnez votre fiche article</legend>
            <label for="selection" class="bg-info text-white col text-left">Identifiant :</label>
            <select class="form-select form-select-lg mb-3 col text-left" id="selection" name="selection">
                <?php
include 'connect.php';
$requete = "SELECT * FROM produit";
$resultat = $connexion->query($requete);
$list = $resultat->fetchAll(PDO::FETCH_ASSOC);
foreach ($list as $fetchAssoc) {
    $all = $fetchAssoc['id'] . ","
        . $fetchAssoc['code'] . "," . $fetchAssoc['designation'] . "," . $fetchAssoc['prixUnitaire'] . "," . $fetchAssoc['made_in'];
    echo "<option value='" . $all . "'>"
        . $fetchAssoc['id'] . " " . $fetchAssoc['code'] . " " .
        $fetchAssoc['designation'] . "</option>";
}
?>
            </select>

            <input type="submit" value="Valider">
        </fieldset>
    </form>


</body>

</html>