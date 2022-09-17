<?php
require_once 'connect.php';

$id = $_GET['id'];

$sql = "DELETE FROM produit WHERE id='$id'";
var_dump($sql);


$resultat = $connexion->exec($sql);

?>