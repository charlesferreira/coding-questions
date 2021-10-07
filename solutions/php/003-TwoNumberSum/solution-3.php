<?php

// O(nlog(n)) time | O(1) space, n = number of elements in array
function twoNumberSum(array $array, int $targetSum): array {
    usort($array, fn($a, $b) => $a <=> $b);
    $leftIndex = 0;
    $rightIndex = count($array) - 1;
    while ($leftIndex < $rightIndex) {
        $leftNum = $array[$leftIndex];
        $rightNum = $array[$rightIndex];
        $currentSum = $leftNum + $rightNum;
        if ($currentSum === $targetSum) return [$leftNum, $rightNum];
        elseif ($currentSum < $targetSum) $leftIndex++;
        elseif ($currentSum > $targetSum) $rightIndex--;
    }
    return [];
}

include 'tests.php';
