<?php

require_once 'connect.php';

$requete = "SELECT * FROM produit";

$resultat = $connexion->query($requete);

$list = $resultat->fetchAll(PDO::FETCH_NUM);

foreach ($list as $fetchNum) {
    echo "numéro + code + designation : ";
    echo $fetchNum[0] . " ";
    echo $fetchNum[1] . " ";
    echo $fetchNum[2] . "<br />";
}
