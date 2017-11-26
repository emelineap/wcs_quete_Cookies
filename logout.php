<?php

session_start();

// On détruit toutes les variables de session
$_SESSION = array();

// On détruit les cookies enregistrés
setcookie("cart_id", $_COOKIE['cart_id'], time() -3600);

// On détruit le cookie de session
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

// On détruit la session.
session_destroy();

// On renvoie vers la page de login
header('Location: login.php');