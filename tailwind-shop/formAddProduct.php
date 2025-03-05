<?php
include 'config/db.php';

?>
<?php include 'header.php'; ?>
<form action="addProduct.php" method="post" enctype="multipart/form-data" class="flex flex-col justify-center items-center gap-4 p-4">
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
    <label for="fichier" class="flex items-center gap-2">
        <i class="fa-solid fa-image"></i>
    </label>
    <input class="file-input" type="file" name="fichier" id="fichier" placeholder="Photo(s) du produit">
    <input type="submit" name="submit" class="btn btn-primary" value="Ajouter le produit">
</form>
<?php include 'footer.php'; ?>