<?php

function redirect($url, $permanent = false) {
    if (headers_sent() === false) {
        header("location: $url", true, ($permanent === true ? 301 : 302));
    }
    exit();
}

function init_session() {
    session_start();
}

function prevent_not_connected($init_session = false) {
    if ($init_session) {
        init_session();
    }

    $connected = isset($_SESSION['login']);

    if (!$connected) {
        $redirect_url = urlencode($_SERVER['PHP_SELF']);
        redirect('../login?redict=' . $redirect_url);
    }
}


//Fonctions liées à la connexion, session, redirection si pas connecté
?>