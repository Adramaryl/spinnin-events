<?php

define('ROW_PER_PAGE', 10);
//Limite l'affichage des événements à 10 par page

require "model.php";

$page = 1;

if (!empty($_GET['page'])) {

    $page = (int)$_GET['page'];
}

$events_list = getMappedEvents($page);

require "view.php";


?>