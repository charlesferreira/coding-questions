<?php

$testCases = [
    [[8, 5, 2, 9, 5, 6, 3], [2, 3, 5, 5, 6, 8, 9]],
    [[], []],
    [[1], [1]],
    [[1, 2, 3, 4], [1, 2, 3, 4]],
    [[1, 4, 2, 3], [1, 2, 3, 4]],
    [[4, 3, 2, 1], [1, 2, 3, 4]],
    [[1, 0, -1, 1], [-1, 0, 1, 1]],
];

foreach ($testCases as $k => $testCase) {
    echo "---------- Test Case $k ----------\n";
    [$input, $expected] = $testCase;
    $result = insertionSort($input);
    if ($expected === $result) {
        echo "OK\n";
    } else {
        echo sprintf("Failed: Expected [%s] but got [%s] instead\n",
            implode(', ', $expected),
            implode(', ', $result));
    }
}
