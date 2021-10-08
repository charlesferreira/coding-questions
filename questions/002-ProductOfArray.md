# Product of Array

Given an integer array `nums`, return an array `answer` such that `answer[i]` is
equal to the product of all the numbers in the input array, except the number on
this position. The product of any prefix or suffix of `nums` is guaranteed to
fit in a 32-bit integer.

## Solutions

| Solution   | Language                   | Time complexity | Space complexity |
|:----------:|:--------------------------:|:---------------:|:----------------:|
| Solution 1 | [PHP][PHP-1] \| [JS][JS-1] | O(n^2)          | O(n)             |

## Examples

### Example 1

#### Input

```javascript
nums = [1, 2, 3, 4]
```

#### Output

```javascript
[24, 12, 8, 6]
```

### Example 2

#### Input

```javascript
nums = [-1, 1, 0, -3, 3]
```

#### Output

```javascript
[0, 0, 9, 0, 0]
```

[PHP-1]: ../solutions/php/002-ProductOfArray/solution-1.php

[JS-1]: ../solutions/js/002-ProductOfArray/solution-1.js