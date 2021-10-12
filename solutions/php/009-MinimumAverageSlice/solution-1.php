<?php

// O(n) time | O(1) space, n = number of elements in array
function solution(array $A): int {
    $lowestAvg = INF;
    $lowestIdx = 0;
    for ($i = 0; $i < count($A) - 1; $i++) {
        $j = $i + 1;
        $k = $i + 2;
        $currentAvg = ($A[$i] + $A[$j]) / 2;

        if ($k < count($A) && $A[$k] < $currentAvg)
            $currentAvg = ($A[$i] + $A[$j] + $A[$k]) / 3;

        if ($lowestAvg > $currentAvg) {
            $lowestAvg = $currentAvg;
            $lowestIdx = $i;
        }
    }

    return $lowestIdx;
}

include 'tests.php';
