<?php

require "php/functions.php";
require "php/conn.php";

$sql = "SELECT * FROM products";

$products = mysqli_query($conn, $sql);

foreach ($products as $product) {
    createProducts($product);
    echo "<br>";
}
?>

<a href="form.html">Cadastrar produtos</a>  