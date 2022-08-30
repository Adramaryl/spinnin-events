<?php

require_once "../system/db.php";

function getEventDetail($id) {

    global $db_default_connection;

    $query = "SELECT Title, Image, Video_link, Date, Info, Tickets_link FROM events WHERE ID = $id" ;
    $stmt = $db_default_connection->prepare($query);
    $stmt->execute();

    return $stmt;
}

//Permet de récupérer les infos d'un événement dans la base de données

function getArrayDetails($id) {

    $stmt = getEventDetail($id);

    $details = [];

    while($detail = $stmt->fetch(PDO::FETCH_ASSOC)) {

        $array_details = [
            "title" => $detail["Title"],
            "image" => $detail["Image"],
            "video_link" => $detail["Video_link"],
            "date" => date_create($detail["Date"]),
            "info" => $detail["Info"],
            "tickets_link" => $detail["Tickets_link"]
        ];

        array_push($details, $array_details);
    }

    return $details;
}

//Permet de mettre les infos récupérées dans la DB dans un tableau PHP en vue de l'affichage dans la page
?>