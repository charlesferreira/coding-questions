<?php

// O(n^3) time | O(1) space, n = number of elements in array
function countTriplets(array $arr, int $r): int {
    $count = 0;
    for ($i = 0; $i < count($arr) - 2; $i++) {
        for ($j = $i + 1; $j < count($arr) - 1; $j++) {
            for ($k = $i + 2; $k < count($arr); $k++) {
                if ($arr[$i] * $r === $arr[$j] && $arr[$j] * $r === $arr[$k]) {
                    $count++;
                }
            }
        }
    }
    return $count;
}

include 'tests.php';
