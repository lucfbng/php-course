<?php

$db_server = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "buisnessdb";
$conn = "";


// Create connection
try { // Essaye de se connecter à la base de données, si ca ne marche pas, avec l'erreur "mysqli_sql_exception" ca affiche "Connection failed"
    $conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);
} catch (mysqli_sql_exception) {
    echo "Connection failed <br>";
}

// Check connection
if ($conn) {
    echo "Connected successfully <br>";
}
