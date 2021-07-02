<?php

    global $pdo;

    $host = "localhost";
    $db = "internet_provider";
    $user = "root";
    $password = "";

    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $password);
?>