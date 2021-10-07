# Two Number Sum

Write a function that takes in a non-empty array of distinct integers and an
integer representing a target sum. If any two numbers in the input array sum up
to the target sum, the function should return them in an array, in any order. If
no two numbers sum up to the target sum, the function should return an empty
array.

Note that the target sum has to be obtained by summing two different integers in
the array; you can't add a single integer to itself in order to obtain the
target sum.

You can assume that there will be at most one pair of numbers summing up to the
target sum.

## Solutions

| Solution   | Language                   | Time complexity | Space complexity |
|:----------:|:--------------------------:|:---------------:|:----------------:|
| Solution 1 | [PHP][PHP-1]               | O(n^2)          | O(1)             |
| Solution 2 | [PHP][PHP-2]               | O(n)            | O(n)             |
| Solution 3 | [PHP][PHP-3]               | O(nlog(n))      | O(1)             |

## Examples

### Example 1

#### Input

```
array = [3, 5, -4, 8, 11, 1, -1, 6]
targetSum = 10
```

#### Output

```
[-1, 11] // the numbers could be in reverse order
```

[PHP-1]: ../solutions/php/003-TwoNumberSum/solution-1.php

[PHP-2]: ../solutions/php/003-TwoNumberSum/solution-2.php

[PHP-3]: ../solutions/php/003-TwoNumberSum/solution-3.php