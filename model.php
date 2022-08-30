<?php

require_once "system/db.php";

function getEvents($page) {

    global $db_default_connection;

    $offset = ($page - 1) * ROW_PER_PAGE;
    $query = "SELECT ID, Title, Image, Date FROM events LIMIT {$offset}, " . ROW_PER_PAGE;
    $stmt = $db_default_connection->prepare($query);
    $stmt->execute();

    return $stmt;
}
//Permet de récupérer les données des événements dans la DB


function getMappedEvents($page) {

    $stmt = getEvents($page);
    $count = $stmt->rowCount();

    $events = [];

    if ($count > 0) {

        while($event = $stmt->fetch(PDO::FETCH_ASSOC)) {

            $mapped_events = [
                "id" => $event["ID"],
                "title" => $event["Title"],
                "image" => $event["Image"],
                "date" => date_create($event["Date"]),
            ];

            array_push($events, $mapped_events);
        }
    }

    return $events;
}
//Permet de mettre les données récupérées dans un array PHP en vue de l'affichage dans la page

?>