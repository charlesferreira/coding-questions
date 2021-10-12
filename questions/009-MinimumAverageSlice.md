# Minimum Average Slice

A non-empty array `A` consisting of `N` integers is given. A pair of
integers `(P, Q)`, such that `0 ≤ P < Q < N`, is called a slice of array `A`  (
notice that the slice contains at least two elements). The average of a
slice `(P, Q)` is the sum of `A[P] + A[P + 1] + ... + A[Q]` divided by the
length of the slice. To be precise, the average
equals `(A[P] + A[P + 1] + ... + A[Q]) / (Q − P + 1)`.

Write a function that, given a non-empty array `A` consisting of `N` integers,
returns the starting position of the slice with the minimal average. If there is
more than one slice with a minimal average, you should return the smallest
starting position of such a slice.

## Solutions

| Solution   | Language                   | Time complexity | Space complexity |
|:----------:|:--------------------------:|:---------------:|:----------------:|
| Solution 1 | [PHP][PHP-1] \| [JS][JS-1] | O(n)            | O(1)             |

## Examples

### Example 1

#### Input

```javascript
A = [4, 2, 2, 5, 1, 5, 8]
```

#### Output

```javascript
1
```

[PHP-1]: ../solutions/php/009-MinimumAverageSlice/solution-1.php

[JS-1]: ../solutions/js/009-MinimumAverageSlice/solution-1.js