<?php

$capitales = array(
    "USA" => "Washinton",
    "Japon" => "KYOTO",
    "Coree du Sud" => "SEOUL",
    "Inde" => "NEW DELHI",
);

$capitales["USA"]; // Affiche "Washington"
$capitales["USA"] = "Los Angeles"; // Modifie la valeur de la capitale de "USA"
$capitales["Canada"] = "Ottawa"; // Ajoute une nouvelle capitale à la liste
array_pop($capitales); // Supprime la dernière capitale de la liste
array_shift($capitales); // Supprime la première capitale de la liste
$keys = array_keys($capitales); // Récupère les clés de la liste
$values = array_values($capitales); // Récupère les valeurs de la liste
$capitals = array_flip($capitales); // Inverse les clés et les valeurs de la liste
$capitales = array_reverse($capitales); // Inverse l'ordre des éléments de la liste
count($capitales); // Affiche le nombre d'éléments de la liste (ici 4)

foreach ($values as $value) {
    echo "{$value} <br>";
}

foreach ($keys as $key) {
    echo "{$key} <br>";
}

foreach ($capitales as $key => $value) {
    echo "{$keys} = {$value}<br>"; // Affiche "USA = Washington<br> Japon = KYOTO<br> Coree du Sud = SEOUL<br> Inde = NEW DELHI<br>"
}
