<?php



$sql = $connexion->query("SELECT * FROM produits"); 

$all = $sql->fetchAll();

$col = $all[0]; 

$columns = array();

echo "<pre>"; 


foreach ($col AS $key=>$value) {  

    if (is_string($key)) {
        $columns[] = $key;
    }
}

echo "<table border='2px' style='width:800px; line-height:60px; text-align:center;'>"; 
echo "<thead><tr><th style='text-align:center;' colspan='8' font-weight:bolder>Produits Lister</th></tr></thead>"; 

foreach ($columns AS $value){ 
    echo "<th style='text-align:center;'>$value</th>";
}

echo "<th>Supprimer</th>";
echo "<th>Modifier</th>";

for($row=0; $row <count($all); $row++){ 
    echo "<tr>";

        for($columnsS=0; $columnsS<count($columns); $columnsS++){ 

            echo "<td>".$all[$row][$columnsS]."</td>";
            
        }
    echo '<td><a href="suppP.php?id=',$all[$row]['idproduits'],'"><i class="far fa-trash-alt"></i></a></td>';
    echo '<td><a href="index.php?page=modiP&id=',$all[$row]['idproduits'],'"><i class="fas fa-pencil-ruler"></i></a></td>';
    echo "</tr>";    
}

echo "</table>";
echo "</pre>";
echo "<p><a href='index.php'>Retour à la page d'accueil</a></p>"; 
?>