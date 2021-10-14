<?php

$testCases = [
    [[1, 2, 3, 4], [24, 12, 8, 6]],
    [[-1, 1, 0, -3, 3], [0, 0, 9, 0, 0]],
    [[1, 1, 1], [1, 1, 1]],
    [[-1, -1, -1], [1, 1, 1]],
    [[-1, -1, -1, -1], [-1, -1, -1, -1]],
    [[0, 0, 1, 1, 1], [0, 0, 0, 0, 0]],
];

foreach ($testCases as $k => $testCase) {
    echo "---------- Test Case $k ----------\n";
    [$input, $expected] = $testCase;
    $result = productOfArray($input);
    if ($expected === $result) {
        echo "OK\n";
    } else {
        echo sprintf("Failed: Expected [%s] but got [%s] instead\n",
            implode(', ', $expected),
            implode(', ', $result));
    }
}
