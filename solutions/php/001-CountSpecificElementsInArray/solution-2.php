<?php

// O(n) time | O(n) space, n = number of elements in the input array
function countSpecificElements(array $input): int {
    $count = 0;
    $found = [];
    foreach ($input as $number) {
        if (isset($found[$number + 1])) {
            $count++;
        }

        if (!isset($found[$number]) && isset($found[$number - 1])) {
            $count += $found[$number - 1];
        }

        $found[$number] = ($found[$number] ?? 0) + 1;
    }

    return $count;
}

include 'tests.php';