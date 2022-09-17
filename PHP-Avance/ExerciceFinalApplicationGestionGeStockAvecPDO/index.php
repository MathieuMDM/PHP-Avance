<?php

include 'connect.php';
include 'header.html';
include 'menu.html';
if (isset($_GET['page'])) {
    switch ($_GET['page']) {
        case "home":
            include 'home.html';
            break;
        case "listerP":
            include 'listerP.php';
            break;
        case "ajouterP":
            include 'ajouterP.php';
            break;
        case "listerF":
            include 'listerF.php';
            break;
        case "ajouterF":
            include 'ajouterF.php';
            break;
        case "modiF":
            include 'modiF.php';
            break; 
        case "modiP":
            include 'modiP.php';
            break;             
    }
} else {
    include 'home.html';
}
include 'footer.html';