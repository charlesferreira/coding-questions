<?php

// O(n^2) time | O(n) space, n = number of elements in the input array
function productOfArray(array $nums): array {
    $products = [];
    foreach ($nums as $idx1 => $num1) {
        $product = 1;
        foreach ($nums as $idx2 => $num2) {
            if ($idx1 !== $idx2) {
                $product *= $num2;
            }
        }
        $products[] = $product;
    }
    return $products;
}

include 'tests.php';
