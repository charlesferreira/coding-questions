<?php

// O(n) time | O(1) space, n = number of elements in array
function countTriplets(array $arr, int $r): int {
    $count = 0;
    $level1 = [];
    $level2 = [];

    foreach ($arr as $num) {
        $num_r = $num / $r;

        if (isset($level2[$num_r])) {
            $count += $level2[$num_r];
        }

        if (isset($level1[$num_r])) {
            $level2[$num] = ($level2[$num] ?? 0) + $level1[$num_r];
        }

        $level1[$num] = ($level1[$num] ?? 0) + 1;
    }

    return $count;
}

include 'tests.php';
