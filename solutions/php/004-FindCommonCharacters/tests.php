<?php

$testCases = [
    [['bella', 'label', 'roller'], ['e', 'l', 'l']],
    [['cool', 'lock', 'cook'], ['c', 'o']],
    [['charles', 'ferreira'], ['a', 'r', 'e']],
    [['php', 'http', 'smtp'], ['p']]
];

foreach ($testCases as $k => $testCase) {
    echo "---------- Test Case $k ----------\n";
    [$input, $expected] = $testCase;
    $result = findCommonCharacters($input);
    if ($expected === $result) {
        echo "OK\n";
    } else {
        echo sprintf("Failed: Expected [%s] but got [%s] instead\n",
            implode(', ', $expected),
            implode(', ', $result));
    }
}
