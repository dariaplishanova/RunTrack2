<?php
$servername = "localhost";
$port = 3307;
$dbname = "jour09";
$username = "root";
$password = "";

try {
    $bdd = new PDO(
        'mysql:host=' . $servername . ';charset=utf8;port=' . $port . ';dbname=' . $dbname,
        $username,
        $password);


    echo "OK<br>";
} catch (PDOException $e) {
    die('Erreur : ' . $e->getMessage());
}
