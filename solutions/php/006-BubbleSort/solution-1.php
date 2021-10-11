<?php

// O(n^2) time | O(1) space, n = number of elements in array
function bubbleSort(array $array): array {
    $isSorted = false;
    $counter = 0;
    while (!$isSorted) {
        $isSorted = true;
        for ($i = 0; $i < count($array) - 1 - $counter; $i++) {
            if ($array[$i] > $array[$i + 1]) {
                swap($array, $i, $i + 1);
                $isSorted = false;
            }
        }
        $counter++;
    }
    return $array;
}

function swap(array &$array, int $i, int $j) {
    $temp = $array[$i];
    $array[$i] = $array[$j];
    $array[$j] = $temp;
}

include 'tests.php';
