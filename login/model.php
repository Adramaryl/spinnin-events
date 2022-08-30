<?php

require_once '../system/db.php';

function getUserByName($username) {
    global $db_default_connection;
    $query = 'SELECT Username, Password FROM users WHERE Username = :Username';
    $stmt = $db_default_connection->prepare($query);
    $stmt->execute([
        'Username' => $username
    ]);
    return $stmt;
}

//Fonction permettant de récupérer l'username dans la base de données

function checkUser($username, $password) {
    $stmt = getUserByName($username);
    $count = $stmt->rowCount();
    if ($count === 1) {
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        if (password_verify($password, $user['Password'])) {
            return [
                'username' => $user['Username'],
            ];
        } else {
            return null;
        }
    } else {
        return null;
    }
}

//Fonction permettant de comparer l'username et le password de l'utilisateur avec ceux contenus dans la DB

?>