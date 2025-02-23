<?php

$password = "cc123";
$hash = password_hash($password, PASSWORD_DEFAULT); // Création d'un hash avec la methode bcrypt

if (password_verify("aaaaaaa", $hash)) { // Vérification de la correspondance du hash avec le mot de passe
    echo "Le mot de passe est correct.";
} else {
    echo "Le mot de passe est incorrect.";
}
