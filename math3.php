<?php

$products = [
    ['orange', 0],
    ['apple', 0],
    ['mango', 0],
    ['banana', 0]
];

// echo rand(1, 20);
// echo mt_rand(10, 30);

$count = count($products);

// for ($i = 0; $i < $count; $i++){
//     $products[$i][1] = mt_rand(60, 89);
// }

// foreach ($products as $index =>  $product) {
//     $products[$index][1] = mt_rand(40, 98);
// }

$newProducts = array_map(function ($product) {
    $product[1] = mt_rand(5, 80);
    return $product;
}, $products);

// echo $products;
// print_r($products);
print_r($newProducts);

