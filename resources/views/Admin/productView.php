<?php
$products = (new App\Models\ProductModel())->getAllProducts();
?>

<?php 
    print_r($products);
?>