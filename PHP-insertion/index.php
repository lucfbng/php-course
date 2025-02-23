<?php
include("database.php");

$username = "patrick";
$password = "aaa123";
$hash = password_hash($password, PASSWORD_DEFAULT); // Création d'un hash avec la méthode bcrypt

$sql = "INSERT INTO users (username, password) VALUES ('$username', '$hash')"; // Requête SQL pour insérer un nouvel utilisateur dans la base de données


try { // Essaye d'inserer des données dans la BDD, si ca ne marche pas, avec l'erreur "mysqli_sql_exception" ca affiche "Could not register user"
    mysqli_query($conn, $sql);
    echo "New record created successfully";
} catch (mysqli_sql_exception) {
    echo "Could not register user";
}

mysqli_close($conn); // Ferme la connexion à la base de données
