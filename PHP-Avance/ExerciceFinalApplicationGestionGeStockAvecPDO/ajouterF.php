<form class="col w-50" action="ajouterF2.php" method="post">
    <fieldset class="form-group border p-3">

        <legend class="w-auto px-2 text-center">Ajouter de nouveaux fournisseurs</legend>
        <div>
            <label for="code" class="bg-secondary text-primary col text-left" style="margin-top: 10px;"> Societe:
            </label>
            <input name="societe" id="societe" class="bg-light text-dark col" type="text" value="" required />

            <label for="code" class="bg-secondary text-primary col text-left" style="margin-top: 10px;"> Adresse:
            </label>
            <input name="adresse" id="adresse" class="bg-light text-dark col" type="text" value="" required />

            <label for="code" class="bg-secondary text-primary col text-left" style="margin-top: 10px;"> CP:
            </label>
            <input name="cp" id="cp" class="bg-light text-dark col" type="text" value="" required />

            <label for="code" class="bg-secondary text-primary col text-left" style="margin-top: 10px;"> Ville:
            </label>
            <input name="ville" id="ville" class="bg-light text-dark col" type="text" value="" required />

            <label for="code" class="bg-secondary text-primary col text-left" style="margin-top: 10px;"> Commentaire:
            </label>
            <input name="commentaire" id="commentaire" class="bg-light text-dark col" type="text" value="" required />

        </div>
        <br>
        <input style='margin-left:45%' type="submit" value="Ajouter">
        <br>
    </fieldset>
    <br>
    <p><a style='margin-left:40%' href='index.php'>Retour à la page d'accueil</a></p>
</form>