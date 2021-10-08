# Find Common Characters

Given a non-empty array `A` of strings made only from lowercase letters, return
a list of all characters that occur in all strings within the list. You should
include characters as many times as they occur in every string. You may return
the answer in any order.

## Solutions

| Solution   | Language                   | Time complexity | Space complexity |
|:----------:|:--------------------------:|:---------------:|:----------------:|
| Solution 1 | [JS][JS-1]                 | O(n*m)          | O(n)             |

## Examples

### Example 1

#### Input

```
A = ["bella", "label", "roller"]
```

#### Output

```
["e", "l", "l"]
```

Explanation: Letter `"e"` met in each word exactly one time, so you need to
include it only once. Letter `"l"` occurs at least twice in every word, so you
need to add it twice to output array.

### Example 2

#### Input

```
A = ["cool", "lock", "cook"]
```

#### Output

```
["c", "o"]
```

Explanation: Letter `"c"` met in each word exactly one time, so you need to
include it only once. Letter `"o"` occurs at twice in two words, "cool" and "
cook", but only once in a word "lock", so you need to add it once to output
array.

[JS-1]: ../solutions/js/004-FindCommonCharacters/solution-1.js