<?php

// O(n^2) time | O(1) space, n = number of elements in the input array
function countSpecificElements(array $arr): int {
    $numberOfElements = 0;
    for ($i = 0; $i < count($arr); $i++) {
        for ($j = 0; $j < count($arr); $j++) {
            if ($i === $j) {
                continue;
            }
            if ($arr[$j] === $arr[$i] + 1) {
                $numberOfElements++;
                continue 2;
            }
        }
    }

    return $numberOfElements;
}

include 'tests.php';