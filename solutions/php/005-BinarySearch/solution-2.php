<?php

// iterative approach
// O(log(n)) time | O(1) space, n = number of elements in array
function binarySearch(array $array, int $target): int {
    $left = 0;
    $right = count($array) - 1;
    while ($left <= $right) {
        $middle = floor(($left + $right) / 2);
        $number = $array[$middle];
        if ($target === $number) return $middle;
        elseif ($target > $number) $left = $middle + 1;
        elseif ($target < $number) $right = $middle - 1;
    }
    return -1;
}

include 'tests.php';
