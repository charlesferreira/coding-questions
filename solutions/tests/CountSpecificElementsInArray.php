<?php

$testCases = [
    [[1, 2, 3], 2],
    [[1, 1, 3, 3, 5, 5, 7, 7], 0],
    [[1, 3, 2, 3, 5, 0], 3],
    [[...array_fill(0, 10000, 1), 2], 10000],
];

foreach ($testCases as $k => $testCase) {
    echo "---------- Test Case $k ----------\n";
    [$input, $expected] = $testCase;
    $result = countSpecificElements($input);
    if ($expected === $result) {
        echo "OK\n";
    } else {
        echo sprintf("Failed: Expected %s but got %s instead\n", $expected, $result);
    }
}