<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkbox</title>
</head>

<body>
    <form action="index.php" method="post">
        <input type="checkbox" name="foods[]" value="pizza">
        pizza<br>
        <input type="checkbox" name="foods[]" value="hamburger">
        hamburger<br>
        <input type="checkbox" name="foods[]" value="tacos">
        tacos<br>
        <input type="checkbox" name="foods[]" value="hotdog">
        hotdog<br>
        <input type="submit" name="submit">
    </form>

</body>

</html>

<?php
// Test avec les noms des input (pizza, hamburger, tacos, hotdog)
if (isset($_POST["submit"])) { // Remplacer les noms des input pour tester cette condition
    if (isset($_POST["pizza"])) {
        echo "You selected pizza.";
    }
    if (isset($_POST["hamburger"])) {
        echo "You selected hambuerger.";
    }
    if (isset($_POST["tacos"])) {
        echo "You selected tacos.";
    }
    if (isset($_POST["hotdog"])) {
        echo "You selected hotdog.";
    }

    if (empty($_POST["pizza"])) {
        echo "You not like pizza.";
    }
    if (empty($_POST["hamburger"])) {
        echo "You not like hambuerger.";
    }
    if (empty($_POST["tacos"])) {
        echo "You not like tacos.";
    }
    if (empty($_POST["hotdog"])) {
        echo "You not like hotdog.";
    }

    // Test avec les noms des input (foods[] donc un tableau avec les valeurs pizza, hamburger, tacos, hotdog)
    if (isset($_POST["submit"])) {
        $foods = $_POST["foods"];
        echo $foods[0]; // Accede au premier élément du tableau (pizza)
        foreach ($foods as $food) {
            echo $food . "<br>"; // Affiche tous les éléments du tableau
        }
    }
}
