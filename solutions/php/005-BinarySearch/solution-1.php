<?php

// recursive approach
// O(log(n)) time | O(log(n)) space, n = number of elements in array
function binarySearch(array $array, int $target): int {
    return recursiveBinarySearch($array, $target, 0, count($array) - 1);
}

function recursiveBinarySearch(array $array, int $target, int $left, int $right): int {
    if ($left > $right) return -1;
    $middle = floor(($left + $right) / 2);
    $number = $array[$middle];
    if ($target === $number) {
        return $middle;
    } elseif ($target > $number) {
        return recursiveBinarySearch($array, $target, $middle + 1, $right);
    } else {
        return recursiveBinarySearch($array, $target, $left, $middle - 1);
    }
}

include 'tests.php';
