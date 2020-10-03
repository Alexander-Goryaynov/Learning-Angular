<?php
// скрипт работает на 80м порту того же домена, что и Angular
// заголовок означает, что API является публичным
header('Access-Control-Allow-Origin: *');
$products = [
    [
        'id' => 0,
        'name' => 'Flour',
        'price' => 5.31
    ],
    [
        'id' => 1,
        'name' => 'Eggs',
        'price' => 2.68
    ],
    [
        'id' => 2,
        'name' => 'Sugar',
        'price' => 4.2
    ],
    [
        'id' => 3,
        'name' => 'Pasta',
        'price' => 3.8
    ],
    [
        'id' => 4,
        'name' => 'Cucumber',
        'price' => 0.99
    ],
    [
        'id' => 5,
        'name' => 'Tomato',
        'price' => 1.2
    ],
    [
        'id' => 6,
        'name' => 'Chili',
        'price' => 2.4
    ]
];
if (isset($_GET['id'])) {
    if ($_GET['id'] < 0 || $_GET['id'] > count($products)) {
        return;
    }
    $products = $products[$_GET['id']];
}
$json_str = json_encode($products);
echo $json_str;
