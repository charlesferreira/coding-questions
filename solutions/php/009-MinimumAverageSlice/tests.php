<?php

$testCases = [
    [[4, 2, 2, 5, 1, 5, 8], 1],
    [[-3, 9, 6], 0],
    [[-4, -9, 1], 0],
    [[4, 4, 4, 1, 9, 9, -9, 4, 7, 9], 6],
    [[6, -5, -7], 1],
    [[-2, 6, -4, -8, 7, -7], 2],
    [[-10, 0, -10, 4, -3, -4, 8, 8], 0],
    [[-1, -10, 1, -9, -9, 5], 3],
    [[6, 3, 7, -9, -8, -10, 8, 1, 4], 3],
    [[-9, 2, -2], 0],
];

foreach ($testCases as $k => $testCase) {
    echo "---------- Test Case $k ----------\n";
    [$input, $expected] = $testCase;
    $result = solution($input);
    if ($expected === $result) {
        echo "OK\n";
    } else {
        echo sprintf("Failed: Expected %s but got %s instead\n", $expected, $result);
    }
}
