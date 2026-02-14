<?php
function login($username, $password) {
    $users = [
        "admin" => "admin123",
        "user1" => "password1"
    ];

    if (isset($users[$username]) && $users[$username] === $password) {
        session_start();
        $_SESSION['username'] = $username;
        return true;
    } else {
        return false;
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    if (login($username, $password)) {
        echo "Connexion réussie ! Bienvenue, $username.";
    } else {
        echo "Nom d'utilisateur ou mot de passe incorrect.";
    }
}
?>

