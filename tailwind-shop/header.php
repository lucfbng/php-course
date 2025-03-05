<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop | Ajouter un produit</title>
    <link rel="stylesheet" href="src/output.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
</head>

<body>
    <header>
        <nav class="flex items-center p-4 justify-between bg-slate-900 text-white">
            <div>
                <h1 class="text-2xl font-bold"><a href="shop.php">SHOP</a></h1>
            </div>
            <div class="flex items-center gap-12">
                <div class="flex justify-center">
                    <a href="addProduct.php" class="btn btn-primary">Ajouter un produit</a>
                </div>
                <div class="dropdown dropdown-center">
                    <button class="btn btn-success p-2 rounded-md flex items-center gap-2"><i class="fa-solid fa-cart-shopping"></i>Panier</button>
                    <ul tabindex="0" class="dropdown-content menu bg-base-100 rounded-box z-1 w-52 p-2 shadow-sm">
                        <li><a>Item 1</a></li>
                        <li><a>Item 2</a></li>
                    </ul>
                </div>
                <a href="userDisconnect.php" class="btn btn-error text-white p-2 rounded-md">Déconnexion</a>
            </div>
        </nav>
    </header>