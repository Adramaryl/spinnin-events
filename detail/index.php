<?php

require "model.php";

$id = $_GET['id'];

$details_list = getArrayDetails($id);

require "view.php";


?>