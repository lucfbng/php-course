<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Radio button</title>
</head>

<body>
    <form action="index.php" method="post">
        <input type="radio" name="creditCard" value="visa">
        Visa<br>
        <input type="radio" name="creditCard" value="mastercard">
        MasterCard<br>
        <input type="radio" name="creditCard" value="paypal">
        Paypal<br>
        <input type="submit" name="confirm" value="confirm">
    </form>
</body>

</html>

<?php
if (!isset($_POST["comfirm"])) {
    if (isset($_POST["creditCard"])) {
        $creditCard = $_POST["creditCard"];
        echo "You selected: " . $creditCard;
    } else {
        echo "Please select a credit card.";
    }
}
