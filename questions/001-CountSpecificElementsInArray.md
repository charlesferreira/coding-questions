# Count specific elements in array

Given an integer array `arr`, count how many elements `x` there are, such
that `x + 1` is also in `arr`. If there are duplicates in `arr`, count them
separately.

## Solutions

| Solution   | Language                   | Time complexity | Space complexity |
|:----------:|:--------------------------:|:---------------:|:----------------:|
| Solution 1 | [PHP][PHP-1] \| [JS][JS-1] | O(n^2)          | O(1)             |
| Solution 2 | [PHP][PHP-2] \| [JS][JS-2] | O(n)            | O(n)             |

## Examples

### Example 1

#### Input

```javascript
arr = [1, 2, 3]
```

#### Output

```javascript
2
```

### Example 2

#### Input

```javascript
arr = [1, 1, 3, 3, 5, 5, 7, 7]
```

#### Output

```javascript
0
```

### Example 3

#### Input

```javascript
arr = [1, 3, 2, 3, 5, 0]
```

#### Output

```javascript
3
```

[PHP-1]: ../solutions/php/001-CountSpecificElementsInArray/solution-1.php

[PHP-2]: ../solutions/php/001-CountSpecificElementsInArray/solution-2.php

[JS-1]: ../solutions/js/001-CountSpecificElementsInArray/solution-1.js

[JS-2]: ../solutions/js/001-CountSpecificElementsInArray/solution-2.js