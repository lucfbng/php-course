<?php
//      Pour $_GET :
//      Les données sont ajoutées à l'URL
//      N'est PAS sécurisé
//      A une limite de caractères
//      Permet les signets avec les valeurs
//      Les requêtes peuvent être mises en cache
//      Mieux adapté pour une page de recherche

//      Pour $_POST :
//      Les données sont incluses dans le corps de la requête HTTP
//      PLUS sécurisé
//      Pas de limite de données
//      Ne permet pas les signets
//      Les requêtes ne sont pas mises en cache
//      Mieux adapté pour soumettre des identifiants
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>$_POST exemple</title>
</head>

<body>
    <form action="index.php" method="post"> <!-- Pour tester $_GET remplacer method="post" par "get" -->
        <label>Quantitée :</label><br>
        <input type="text" name="quantity"><br>
        <input type="submit" value="Total">
    </form>
</body>

</html>

<?php
$item = "pizza";
$prix = 12.99;
$quantity = $_POST["quantity"]; // ET $_POST par $_GET
$total = $quantity * $prix;

echo "Vous avez commandé {$quantity} x {$item}(s) au prix de {$prix} € chacun.";
echo "<br>Le prix total de votre commande est de {$total}€";
