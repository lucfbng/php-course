<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="index.php" method="post">
        Username:
        <input type="text" name="username"><br>
        Password:
        <input type="password" name="password"><br>
        <input type="submit" name="login" value="Login"><br>
    </form>
</body>

</html>

<?php
if (isset($_POST["login"])) {

    if (!empty($_POST["username"]) && !empty($_POST["password"])) {

        $_SESSION["username"] = $_POST["username"];
        $_SESSION["password"] = $_POST["password"];
        header("Location: home.php"); // Redirection vers la page home.php si les champs sont remplis
    } else {
        echo "Please enter both username and password.";
    }
}
