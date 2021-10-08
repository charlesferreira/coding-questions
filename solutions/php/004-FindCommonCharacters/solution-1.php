<?php

// O(n * m) time | O(n) space
// n = total length of all words, m = length of the first word
function findCommonCharacters(array $A): array {
    $repeatingLetters = [];
    $lettersInFirstWord = str_split(array_shift($A));
    foreach ($lettersInFirstWord as $letter) {
        foreach ($A as &$currentWord) {
            $letterIndex = strpos($currentWord, $letter);
            if ($letterIndex === false) {
                continue 2;
            }
            $currentWord[$letterIndex] = '*';
        }
        $repeatingLetters[] = $letter;
    }

    return $repeatingLetters;
}

include 'tests.php';
