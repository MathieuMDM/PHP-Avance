<?php

require_once 'connect.php';

$code = $_GET['code'];
$designation = $_GET['designation'];

$requete = "INSERT INTO produit VALUES (NULL, '$code', '$designation', '', '')";

// INSERT INTO table_name (column1, column2, column3,...) w celu ustawniania kolumn aby sie nie pomieszaly i byly w dobrej kolejnosci
// VALUES (value1, value2, value3,...)

$resultat = $connexion->exec($requete);

echo $resultat;