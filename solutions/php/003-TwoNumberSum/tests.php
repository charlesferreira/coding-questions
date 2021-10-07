<?php

$testCases = [
    [[[3, 5, -4, 8, 11, 1, -1, 6], 10], [11, -1]],
    [[[0, 1], 1], [0, 1]],
    [[[0, 1], 2], []],
    [[[], 0], []],
];

foreach ($testCases as $k => $testCase) {
    echo "---------- Test Case $k ----------\n";
    [[$array, $targetSum], $expected] = $testCase;
    $result = twoNumberSum($array, $targetSum);
    sort($result);
    sort($expected);
    if (serialize($expected) === serialize($result)) {
        echo "OK\n";
    } else {
        echo sprintf("Failed: Expected [%s] but got [%s] instead\n",
            implode(', ', $expected),
            implode(', ', $result));
    }
}
