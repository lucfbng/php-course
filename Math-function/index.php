<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All math functions</title>
</head>

<body>
    <form action="index.php" method="post">
        <label>X :</label>
        <input type="text" name="x"><br>
        <label>Y :</label>
        <input type="text" name="y"><br>
        <label>Z :</label>
        <input type="text" name="z"><br>
        <br><br>
        <input type="submit" value="Resultat">
    </form>

</body>

</html>

<?php

$x = $_POST['x'];
$y = $_POST['y'];
$z = $_POST['z'];
$total = null;

$total = abs($x); // Convertie la valeur de X en positif
$total = round($x); // Arrondi la valeur de X à l'entier le plus proche
$total = floor($x); // Arrondi la valeur de X à l'entier inférieur
$total = ceil($x); // Arrondi la valeur de X à l'entier supérieur
$total = sqrt($x); // Calcul de la racine carrée de X
$total = pow($x, $y); // Calcul de X puissance Y
$total = max($x, $y, $z); // Retourne la valeur maximale entre X, Y et Z
$total = min($x, $y, $z); // Retourne la valeur minimale entre X, Y et Z
$total = pi(); // Affiche la valeur de pi
$total = rand(1, 6); // Génère un nombre aléatoire entre 1 et 6

echo $total;

?>