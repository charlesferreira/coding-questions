<?php

// O(n^2) time | O(1) space, n = number of elements in array
function twoNumberSum(array $array, int $targetSum): array {
    for ($i = 0; $i < count($array); $i++) {
        $number1 = $array[$i];
        for ($j = 0; $j < count($array); $j++) {
            if ($i === $j) continue;

            $number2 = $array[$j];
            if ($number1 + $number2 === $targetSum)
                return [$number1, $number2];
        }
    }
    return [];
}

include 'tests.php';
