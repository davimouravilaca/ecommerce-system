<?php

function createProducts($product) {
    if(!is_array($product)) {
        "Error. A parameter is myssing";
    }
    $i = 0; 
    $type = array("Name", "Description", "Image", "Price");
    foreach ($product as $item) {
    echo "$type[$i]: $item </br>";
    $i++;
    } 
}
?>
