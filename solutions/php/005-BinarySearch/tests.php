<?php

$testCases = [
    [[[0, 1, 21, 33, 45, 45, 61, 71, 72, 73], 33], 3],
    [[[1, 2, 3, 5, 8, 13], 13], 5],
    [[[1, 2, 3, 5, 8, 13], 1], 0],
    [[[1, 2, 3, 5, 8, 13], 3], 2],
    [[[1, 2, 3, 5, 8, 13], 5], 3],
    [[[1, 2, 3, 5, 8, 13], 4], -1],
];

foreach ($testCases as $k => $testCase) {
    echo "---------- Test Case $k ----------\n";
    [[$array, $targetSum], $expected] = $testCase;
    $result = binarySearch($array, $targetSum);
    if ($expected === $result) {
        echo "OK\n";
    } else {
        echo sprintf("Failed: Expected [%s] but got [%s] instead\n", $expected, $result);
    }
}
