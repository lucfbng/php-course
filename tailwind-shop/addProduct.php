<?php
include 'config/db.php';
include 'uploads.php';
?>
<?php include 'header.php'; ?>
<form action="addProduct.php" method="post" class="flex flex-col justify-center items-center gap-4 p-4">
    <label class="flex items-center gap-2">
        <i class="fa-solid fa-cube"></i>
        <input class="input" type="text" name="name" placeholder="Nom du produit" required>
    </label>
    <label class="flex items-center gap-2">
        <i class="fa-solid fa-file-lines"></i>
        <input class="input" type="text" name="description" placeholder="Description du produit" required>
    </label>
    <label class="flex items-center gap-2">
        <i class="fa-solid fa-coins"></i>
        <input class="input" type="number" step="0.01" name="price" placeholder="Prix du produit" required>
    </label>
    <label class="flex items-center gap-2">
        <i class="fa-solid fa-box"></i>
        <input class="input" type="number" name="stock" placeholder="Stock du produit" required>
    </label>
    <label class="flex items-center gap-2">
        <i class="fa-solid fa-image"></i>
        <input class="file-input" type="file" enctype="multipart/form-data" name="fichier" id="fichier" placeholder="Photo(s) du produit" required>
    </label>
    <input type="submit" name="submit" class="btn btn-primary" value="Ajouter le produit">
</form>
<?php include 'footer.php'; ?>

<?php
$productName = htmlspecialchars($_POST['name']);
$productDescription = htmlspecialchars($_POST['description']);
$productPrice = htmlspecialchars($_POST['price']);
$productStock = htmlspecialchars($_POST['stock']);

$sql =  "INSERT INTO product (product_name, product_price, product_stock, product_description) VALUES (:product_name, :product_price, :product_stock, :product_description)";

$stmt = $db->prepare($sql);
$stmt->bindValue(':product_name', $productName);
$stmt->bindValue(':product_description', $productDescription);
$stmt->bindValue(':product_price', $productPrice);
$stmt->bindValue(':product_stock', $productStock);
$stmt->execute();
if ($stmt->execute()) {
    $productId = $db->lastInsertId();
    header('Location: uploads.php');
}
echo "<script>alert('Produit ajouté avec succès');</script>";
?>