<?php

// O(n^2) time | O(1) space, n = number of elements in the input array
function countSpecificElements(array $input): int {
    $numberOfElements = 0;
    for ($i = 0; $i < count($input); $i++) {
        for ($j = 0; $j < count($input); $j++) {
            if ($i === $j) {
                continue;
            }
            if ($input[$j] === $input[$i] + 1) {
                $numberOfElements++;
                continue 2;
            }
        }
    }

    return $numberOfElements;
}

include 'tests.php';