<?php
$username = "Aaaa The Bbbb";
$numTelephone = "06-12-45-78-65";

$username = strtolower($username); // Convertit le texte en minuscules
$username = strtoupper($username); // Convertit le texte en majuscules
$username = trim($username); // Supprime les espaces en début et fin de chaîne
$username = str_pad($username, 20, "0"); // Ajoute des zéros à la fin de la chaîne jusqu'à atteindre une longueur de 20 caractères
$phone = str_replace("-", "", $numTelephone); // Supprime les caractères "-" du numéro de téléphone
$username = strrev($username); // Inverse la chaîne de caractères
$username = str_shuffle($username); // Mélange les caractères de la chaîne de caractères
$egale = strcmp($username, "Aaaa Bbbb"); // Compare les chaînes de caractères et retourne 0 si elles sont identiques
$count = strlen($username); // Compte le nombre de caractères dans la chaîne de caractères
$index = strpos($username, "a"); // Recherche la première occurrence de la lettre "a" dans la chaîne de caractères et retourne l'index de cette occurrence (1)
$firstname = substr($username, 0, 4); // Extrait les 3 premiers caractères de la chaîne de caractères
$lastname = substr($username, 5); // Extrait les 4 caractères suivants de la chaîne de caractères (de la position 4)
$fullname = explode(" ", $username); // Sépare la chaîne de caractères en tableau avec les espaces comme séparateur

$username = array("Aaaa", "The", "Bbbb");
$username = implode(" ", $username); // Concatène les éléments du tableau avec un espace comme séparateur

foreach ($fullname as $name) { // Avec explode(), on peut extraire chaque nom séparément
    echo $name . "<br>";
}
