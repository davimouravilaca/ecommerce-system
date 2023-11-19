<?php

$product1 = array(
    "Camisa", "Mangas longas estampada", "foto", "14,98"
);

$product2 = array(
    "nome2", "descrição2", "foto2", "16,20"
);

$products = array($product1, $product2);

require "php/functions.php";

foreach ($products as $product) {
    createProducts($product);
    echo "<br>";
}
