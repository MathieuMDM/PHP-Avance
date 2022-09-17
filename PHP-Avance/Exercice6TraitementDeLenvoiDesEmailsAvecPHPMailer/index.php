<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css"
        integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">
    <title>Exercice 6 Traitement de l'envoi des emails avec PHPMailer</title>
</head>

<body>
    <div class="container">
        <form class="col w-150" name="FormAjout" action="traitement.php" method="post" enctype="multipart/form-data">>
            <fieldset class="form-group border p-3 col-4 m-auto">
                <legend class="w-auto px-2 text-center">Formulaire de contact</legend>
                <div class="from-group">
                    <label for="nom">Votre nom:</label>
                    <input type="text" class="from-control" id="nom" name="nom" required>
                </div>
                <div class="from-group">
                    <label for="prenom">Votre prenom: </label>
                    <input type="text" class="from-control" id="prenom" name="prenom" required>
                </div>
                <div class="from-group">
                    <label for="email">Votre email: </label>
                    <input type="text" class="from-control" id="email" name="email" required>
                </div>
                <div class="from-group">
                    <label for="commentaires">Commentaire: </label>
                    <textarea cols="5" rows="3" id="commentaires" class="form-control"
                        name="commentaires">Entrez votre message ici: </textarea>
                </div>
                <div class="form-group">
                    <label for="fichier">Piece jointe:</label>
                    <input type="file" class="form-control-file" id="fichier" name="fichier">
                </div>

                <input type="submit" value="Envoyer" />
            </fieldset>
            </from>
    </div>

</body>

</html>