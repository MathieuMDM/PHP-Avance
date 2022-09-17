<?php
        define('SERVER', "xxx");
        define('USER', "xxx");
        define('PASSWORD', "xxx");
        define('BASE', "xxx");

        // $connexion = new PDO("mysql:host=" . SERVER . ";dbname=" . BASE, USER, PASSWORD);

        try {
            $connexion = new PDO("mysql:host=" . SERVER . ";dbname=" . BASE, USER, PASSWORD);
            echo "la connexion fonctionne";
        } catch (Exception $e) {
            echo "Erreur:" . $e->getMessage();
        }