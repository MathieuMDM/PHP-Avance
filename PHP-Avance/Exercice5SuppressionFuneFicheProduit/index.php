<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css"
        integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">
    <title>Exercice 5 Suppression d'une fiche produit</title>
</head>

<body>
    <form class="col w-50" action="supp.php" method="get">
        <fieldset class="form-group border p-3">
            <?php

require_once 'connect.php';

$sql = "SELECT * FROM produit";

$resultat = $connexion->query($sql);

$list = $resultat->fetchAll(PDO::FETCH_OBJ);

foreach ($list as $fetchObj) {
    echo "numéro + code + designation : ";
    echo $fetchObj->id . " ";
    echo $fetchObj->code . " ";
    echo $fetchObj->designation . " ";
    echo "<a href='supp.php?id=$fetchObj->id'>Supprimer</a><br />";
}
?>

        </fieldset>
    </form>


</body>

</html>