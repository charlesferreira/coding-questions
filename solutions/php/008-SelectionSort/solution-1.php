<?php

// O(n^2) time | O(1) space, n = number of elements in array
function selectionSort(array $array): array {
    for ($i = 0; $i < count($array) - 1; $i++) {
        $lowest = $i;
        for ($j = $i + 1; $j < count($array); $j++) {
            if ($array[$j] < $array[$lowest])  {
                $lowest = $j;
            }
        }
        swap($array, $i, $lowest);
    }
    return $array;
}

function swap(array &$array, int $i, int $j) {
    $temp = $array[$i];
    $array[$i] = $array[$j];
    $array[$j] = $temp;
}

include 'tests.php';
