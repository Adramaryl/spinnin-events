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