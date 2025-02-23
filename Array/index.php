<?php

$foods = array("apple", "orange", "bannana", "coconut");

$foods[0] = "pineapple"; // Remplacement de "apple" par "pineapple"

array_push($foods, "kiwi", "blueberry"); // Ajout de "kiwi" et "blueberry" à la fin du tableau
array_pop($foods); // Suppression du dernier élément du tableau
array_shift($foods); // Suppression du premier élément du tableau
count($foods); // Compte le nombre d'éléments dans le tableau

$reversed_foods = array_reverse($foods); // Inversion du tableau (Ne marche que si il est dans une nouvelle variable ou dans la varable existante ($foods))

foreach ($foods as $food) {
    echo "I love {$food}<br>";
}
