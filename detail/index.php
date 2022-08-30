<?php

require "model.php";

$id = $_GET['id'];

//Permet de récupérer l'ID de l'event dans l'URL pour afficher la page de détail correspondante

$details_list = getArrayDetails($id);

require "view.php";


?>