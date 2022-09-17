<?php
        define('SERVER', "xxx");
        define('USER', "xxx");
        define('PASSWORD', "xxx");
        define('BASE', "xxx");

$connexion = new PDO("mysql:host=" . SERVER . ";dbname=" . BASE, USER, PASSWORD);