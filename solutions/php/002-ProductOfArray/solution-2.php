<?php

// O(n) time | O(n) space, n = number of elements in the input array
function productOfArray(array $nums): array {
    $products = [];
    $leftProducts = [];
    $rightProducts = [];

    $currentLeftProduct = 1;
    for ($i = 0; $i < count($nums); $i++) {
        $leftProducts[$i] = $currentLeftProduct;
        $currentLeftProduct *= $nums[$i];
    }

    $currentRightProduct = 1;
    for ($i = count($nums) - 1; $i > -1; $i--) {
        $rightProducts[$i] = $currentRightProduct;
        $currentRightProduct *= $nums[$i];
    }

    for ($i = 0; $i < count($nums); $i++) {
        $products[$i] = $leftProducts[$i] * $rightProducts[$i];
    }

    return $products;
}

include 'tests.php';
