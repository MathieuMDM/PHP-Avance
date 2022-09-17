<?php
require_once 'connect.php';


$sql = $connexion->query("SELECT * FROM fournisseurs"); //zrob z calego zbioru tablice

$all = $sql->fetchAll(); //ze wszystkiego ulóz wiersze, kolumny i wartosci

$col = $all[0];

$columns = array();

echo "<pre>"; //posegregowanie wedlug indexa w bazie
// print_r($all); wydrukowanie wszystkiego

foreach ($col as $key=>$value) {  //tworzy kolumny z kazdej wartosci w kluczu

    if (is_string($key)) {
        $columns[] = $key;
    }
}

echo "<table border='2px' style='width:800px; line-height:60px; text-align:center;'>"; //dodanie tabeli
echo "<thead><tr><th style='text-align:center;' colspan='8' font-weight:bolder>Fournisseur Lister</th></tr></thead>"; //dodanie tytulu tabeli

foreach ($columns as $value) { //dla kazdej columny stwoz wartosc
    echo "<th style='text-align:center;'>$value</th>";
}

echo "<th>Supprimer</th>";
echo "<th>Modifier</th>";

for ($row=0; $row <count($all); $row++) { //stwoz tyle wierszy ile bedzie wartosci
    echo "<tr>";

    for ($columnsS=0; $columnsS<count($columns); $columnsS++) { //dla kazdego wiersza dodaj wartosci

        echo "<td>".$all[$row][$columnsS]."</td>";
    }
    echo '<td><a href="suppF.php?id=',$all[$row]['idFournisseur'],'"><i class="far fa-trash-alt"></i></a></td>';
    echo '<td><a href="index.php?page=modiF&id=',$all[$row]['idFournisseur'],'"><i class="fas fa-pencil-ruler"></i></a></td>';
    echo "</tr>";
}

echo "</table>";
echo "</pre>";
echo "<p><a href='index.php'>Retour à la page d'accueil</a></p>"; //powrot do strony glownej
