<?php

$db_host = "localhost";
$db_name = "spinnin_events";
$db_username = "root";
$db_password = "";


function getDBConnection($host, $name, $username, $password) {

    $connection = null;

    try {
        $connection = new PDO("mysql:host=$host;dbname=$name", $username, $password);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $connection->exec("set names utf8");
    } catch (PDOException $exception) {
        echo "Connection error: " . $exception->getMessage();
    }

    return $connection;
}


$db_default_connection = getDBConnection($db_host, $db_name, $db_username, $db_password);

//Permet la connexion à la base de données

?>