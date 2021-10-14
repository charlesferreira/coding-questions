<?php

// O(n) time | O(n) space, n = number of elements in the input array
function productOfArray(array $nums): array {
    $products = [];

    $currentLeftProduct = 1;
    for ($i = 0; $i < count($nums); $i++) {
        $products[$i] = $currentLeftProduct;
        $currentLeftProduct *= $nums[$i];
    }

    $currentRightProduct = 1;
    for ($i = count($nums) - 1; $i > -1; $i--) {
        $products[$i] *= $currentRightProduct;
        $currentRightProduct *= $nums[$i];
    }

    return $products;
}

include 'tests.php';
