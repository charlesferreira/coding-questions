<?php

// O(n) time | O(n) space, n = number of elements in array
function twoNumberSum(array $array, int $targetSum): array {
    $found = [];
    foreach ($array as $currentNumber) {
        $currentDiff = $targetSum - $currentNumber;
        if (isset($found[$currentDiff]))
            return [$currentDiff, $currentNumber];
        $found[$currentNumber] = true;
    }
    return [];
}

include 'tests.php';
