<?php
require 'config/db.php';
include 'formAddProduct.php';

if (isset($_POST['submit'])) {
    $productName = htmlspecialchars($_POST['name']);
    $productDescription = htmlspecialchars($_POST['description']);
    $productPrice = htmlspecialchars($_POST['price']);
    $productStock = htmlspecialchars($_POST['stock']);
    $nomFichier = basename($_FILES['fichier']['name']);

    $repertoireCible = 'uploads/';
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

    echo "<script>alert('Produit ajouté avec succès');</script>";
}

$sql = "INSERT INTO product (product_name, product_price, product_stock, product_description, product_picture) VALUES (:product_name, :product_price, :product_stock, :product_description, :product_picture)";

$stmt = $db->prepare($sql);
$stmt->bindValue(':product_name', $productName);
$stmt->bindValue(':product_description', $productDescription);
$stmt->bindValue(':product_price', $productPrice);
$stmt->bindValue(':product_stock', $productStock);
$stmt->bindValue(':product_picture', $nomFichier);
$stmt->execute();
