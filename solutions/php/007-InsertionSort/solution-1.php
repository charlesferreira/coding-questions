<?php

// O(n^2) time | O(1) space, n = number of elements in array
function insertionSort(array $array): array {
    for ($i = 1; $i < count($array); $i++) {
        $currIdx = $i;
        while ($currIdx > 0 && $array[$currIdx] < $array[$currIdx - 1]) {
            swap($array, $currIdx, $currIdx - 1);
            $currIdx--;
        }
    }
    return $array;
}

function swap(array &$array, int $i, int $j) {
    $temp = $array[$i];
    $array[$i] = $array[$j];
    $array[$j] = $temp;
}

include 'tests.php';
