<?php
require 'config/db.php';
include 'header.php';
?>
<main class="p-4 grid grid-cols-[400px_400px_400px] grid-rows-[400px_400px_400px] gap-4 justify-center h-screen bg-slate-100">
    <?php
    $product = $db->query("SELECT * FROM product");
    $product = $product->fetchAll();
    $gridcol = 1;
    $gridrow = 1;
    foreach ($product as $products) {
        echo
        "<div class=\"card bg-base-100 w-96 shadow-sm grid-cols-{$gridcol} grid-rows-{$gridrow}\">
                <figure>
                    <img
                    class='w-full h-full object-contain'
                    src='uploads/{$products['product_picture']}'
                    alt='{$products['product_name']}'/>
                </figure>
                <div class=\"card-body\">
                    <h2 class='card-title'>{$products['product_name']}</h2>
                    <p>{$products['product_description']}</p>
                    <div class='card-actions justify-end'>
                        <span class='text-2xl font-bold'>{$products['product_price']}<sup>€</sup></span>
                        <button class='btn btn-primary'>Ajouter au panier</button>
                    </div>
                </div>
            </div>";
        $gridcol++;
        if ($gridcol > 3) {
            $gridcol = 1;
            $gridrow++;
        }
    }
    ?>
    </div>
</main>
<?php include 'footer.php'; ?>