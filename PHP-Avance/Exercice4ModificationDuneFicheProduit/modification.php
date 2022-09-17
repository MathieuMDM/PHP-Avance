<?php

// $requete = "INSERT INTO produit VALUES (NULL, '$code', '$designation', 'prixUnitaire', '$madeIn')";

// $resultat = $connexion->query($requete);

// $list = $resultat->fetch_assoc();

// $id = $list['id'];
// $code = $list['code'];
// $designation = $list['designation'];
// $prixUnitaire = $list['prixUnitaire'];
// $madeIn = $list['made_in'];


$list = explode(',', $_POST['selection']);
$id = $list[0];
$code = $list[1];
$designation = $list[2];
$prixUnitaire = $list[3];
$madeIn = $list[4];

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css"
        integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">
    <title>Modification du produit sélectionné</title>
</head>

<body>

    <form class="col w-50" action="modi.php" method="post">
        <fieldset class="form-group border p-3">

            <legend class="w-auto px-2 text-center">Sélectionnez votre fiche article</legend>
            <div>
                <label for="id" class="bg-info text-white col text-left"> Identifiant(id) :</label>
                <input name="id" id="id" class="bg-warning text-dark col" type="text"
                    value="<?php echo $id; ?>" readonly />

                <label for="code" class="bg-info text-white col text-left" style="margin-top: 10px;">Code :</label>
                <input name="code" id="code" class="bg-light text-dark col" type="text"
                    value="<?php echo $code; ?>" required />

                <label for="designation" class="bg-info text-white col text-left" style="margin-top: 10px;">Designation
                    :</label>
                <input id="designation" name="designation" class="bg-light text-dark col" type="text"
                    value="<?php echo $designation; ?>" required />

                <label for="prixUnitaire" class="bg-info text-white col text-left" style="margin-top: 10px;">Prix
                    Unitaire :</label>
                <input name="prixUnitaire" id="prixUnitaire" class="bg-light text-dark col" type="text"
                    value="<?php echo $prixUnitaire; ?>" required />

                <label for="made_in" class="bg-info text-white col text-left" style="margin-top: 10px;">Made in
                    :</label>
                <input name="made_in" id="made_in" class="bg-light text-dark col" type="text"
                    value="<?php echo $madeIn; ?>" required />
            </div>
            <!-- echo $id;
echo $code;
echo $designation;
echo $prixUnitaire;
echo $madeIn; -->

            <input type="submit" value="Valider">
        </fieldset>
    </form>


</body>

</html>