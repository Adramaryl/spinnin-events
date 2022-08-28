<?php

require_once "../system/db.php";

function createEvent($event) {

    global $db_default_connection;

    $query = "INSERT INTO events(Title, Image, Video_link, Date, Info, Tickets_link)
            VALUES(:title, :image, :videolink, :date, :info, :ticketslink)";

    $stmt = $db_default_connection->prepare($query);
    $stmt->execute($event);
    return $stmt;
}

?>