<?php
require 'config/db.php';
require 'addProduct.php';

$repertoireCible = 'uploads/';
$nomFichier = $_FILES['fichier']['name'];
$cheminCible = "{$repertoireCible}{$nomFichier}";
$typeFichier = strtolower(pathinfo($cheminCible, PATHINFO_EXTENSION));
$extentionsAutorisees = ['jpg', 'jpeg', 'png', 'gif', 'pdf', 'txt'];
if (in_array($typeFichier, $extentionsAutorisees)) {
    if (move_uploaded_file($_FILES['fichier']['tmp_name'], $cheminCible)) {
        echo "<script>
    alert('Fichier ajouté avec succès');</script>";
    } else {
        echo "<script>
    alert('Erreur lors de l'
            ajout du fichier ');</script>";
    }
} else {
    echo "<script>
    alert('Format de fichier non autorisé');</script>";
}
$sql =  "UPDATE product SET product_picture = (:product_picture) WHERE product_id = (:product_id)";

$stmt = $db->prepare($sql);
$stmt->bindValue(':product_picture', $nomFichier);
$stmt->bindValue(':product_id', $productId);
$stmt->execute();
