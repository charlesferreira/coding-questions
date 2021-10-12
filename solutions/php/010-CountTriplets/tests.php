<?php

$testCases = [
    [[[1, 2, 2, 4], 2], 2],
    [[[1, 2, 1, 2, 4], 2], 3],
    [[[1, 4, 16, 64], 4], 2],
    [[[1, 3, 9, 9, 27, 81], 3], 6],
    [[[1, 5, 5, 25, 125], 5], 4],
    [[[...array_fill(0, 10000, 1), 2, 4], 2], 10000],
];

foreach ($testCases as $k => $testCase) {
    echo "---------- Test Case $k ----------\n";
    [[$array, $ratio], $expected] = $testCase;
    $result = countTriplets($array, $ratio);
    if ($expected === $result) {
        echo "OK\n";
    } else {
        echo sprintf("Failed: Expected %s but got %s instead\n", $expected, $result);
    }
}
