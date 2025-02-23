<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sanitize from</title>
</head>

<body>
    <form action="index.php" method="post">
        Name:
        <input type="text" name="username"><br>
        Age:
        <input type="text" name="age"><br>
        E-mail:
        <input type="text" name="email"><br>
        <input type="submit" name="login" value="login">
    </form>

</body>

</html>


<?php
if (isset($_POST['login'])) {
    $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS); // évite les injections SQL ou JS
    $age = filter_input(INPUT_POST, "age", FILTER_SANITIZE_NUMBER_INT); // Prend en compte uniquement les nombres
    $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL); // Vérifie le format de l'email et enlève les caractères spéciaux
    //-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
    $age = filter_input(INPUT_POST, "age", FILTER_VALIDATE_INT); // Vérifie si l'age est un nombre entier et retourne une chaine vide si non
    if (empty($age)) { // Si l'age est vide, affiche un message d'erreur
        echo "Please enter a valid age<br>";
    } else { // Si l'age est valide
        echo "You are {$age} year old<br>";
    }
    //-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
    $age = filter_input(INPUT_POST, "age", FILTER_VALIDATE_EMAIL); // Vérifie si l'email est valide et retourne une chaine vide si non
    if (empty($email)) { // Si l'email est vide, affiche un message d'erreur
        echo "Please enter a valid age<br>";
    } else { // Si l'email est valide
        echo "You are {$age} year old<br>";
    }
    //-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
    echo "HELLO {$username} YOU ARE {$age} YEARS OLD!, YOUR EMAIL IS {$email}<br>";
}
