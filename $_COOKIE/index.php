<?php

setcookie("fav_food", "pizza", time() + 86400, "/"); // "fav-food" le nom de l'information stockée | "pizza" la valeur | La durée de vie du cookie est de 24 heures (86400 secondes) | Le chemin d'accès du cookie est /
setcookie("fav_drink", "coffee", time() + (86400 * 5), "/"); // "fav-drink" le nom de l'information stockée | "coffee" la valeur | La durée de vie du cookie est de 5 jours (86400 * 5) | Le chemin d'accès du cookie est /

foreach ($_COOKIE as $key => $value) {
    echo "{$key} = {$value}<br>"; // Affichage des informations stockées dans les cookies (ex: fav_food = pizza, fav_drink = coffee)
}

if (isset($_COOKIE["fav_food"])) {
    echo "Your favorite food is: " . $_COOKIE["fav_food"]; // Affichage de la valeur du cookie fav_food si elle existe
} else {
    echo "No favorite food found"; // Affichage d'un message si la valeur du cookie fav_food n'est pas trouvée
}
