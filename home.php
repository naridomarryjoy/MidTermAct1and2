<?php
// gadget_grove_catalog.php

echo "=== GadgetGrove Catalog ===\n\n";

/* --------------------------
   Task 1: Basic Product List (Indexed Arrays)
-------------------------- */
$productNames = ["Smartphone X1", "Wireless Earbuds Pro", "4K Action Camera", "Smartwatch S5", "Portable Bluetooth Speaker"];
$productPrices = [24999, 3999, 10999, 7999, 2999];

echo "Task 1: Basic Product List\n";
echo "Available Products: " . implode(", ", $productNames) . "\n";
echo "First product price: ₱" . $productPrices[0] . "\n";
echo "Last product price: ₱" . $productPrices[count($productPrices) - 1] . "\n\n";


/* --------------------------
   Task 2: Detailed Product View (Associative Array)
-------------------------- */
$detailedProduct = [
    "name" => "Smartphone X1",
    "price" => 24999,
    "brand" => "TechNova",
    "inStock" => true,
    "description" => "A flagship smartphone with stunning display and fast performance."
];

echo "Task 2: Detailed Product View\n";
echo "Name: " . $detailedProduct["name"] . "\n";
echo "Price: ₱" . $detailedProduct["price"] . "\n";
echo "Brand: " . $detailedProduct["brand"] . "\n";
echo "Availability: " . ($detailedProduct["inStock"] ? "In Stock" : "Out of Stock") . "\n";
echo "Description: " . $detailedProduct["description"] . "\n";

// Add new key 'warranty'
$detailedProduct["warranty"] = "1 Year Manufacturer Warranty";
echo "Warranty: " . $detailedProduct["warranty"] . "\n\n";


/* --------------------------
   Task 3: Full Catalog (Multidimensional Array)
-------------------------- */
$catalog = [
    [
        "id" => 1,
        "name" => "Smartphone X1",
        "price" => 24999,
        "inStock" => true
    ],
    [
        "id" => 2,
        "name" => "Wireless Earbuds Pro",
        "price" => 3999,
        "inStock" => false
    ],
    [
        "id" => 3,
        "name" => "4K Action Camera",
        "price" => 10999,
        "inStock" => true
    ],
    [
        "id" => 4,
        "name" => "Smartwatch S5",
        "price" => 7999,
        "inStock" => true
    ],
    [
        "id" => 5,
        "name" => "Portable Bluetooth Speaker",
        "price" => 2999,
        "inStock" => true
    ]
];

echo "Task 3: Full Catalog\n";
foreach ($catalog as $product) {
    echo "- " . $product["name"] . " (₱" . number_format($product["price"]) . ") ";
    echo $product["inStock"] ? "[Available]" : "[Out of Stock]";
    echo "\n";
}

?>
