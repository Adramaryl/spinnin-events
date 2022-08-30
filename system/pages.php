<?php

function getSelfUrl() {
    return htmlspecialchars(dirname($_SERVER['PHP_SELF']));
}

//Nécessaire à la pagination

?>