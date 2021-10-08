# Binary Search

Write a function that takes in a sorted array of integers as well as a target
integer. The function should use the Binary Search algorithm to determine if the
target integer is contained in the array and should return its index if it is,
otherwise `-1`.

## Solutions

| Solution   | Language                   | Time complexity | Space complexity |
|:----------:|:--------------------------:|:---------------:|:----------------:|
| Solution 1 | [JS][JS-1]                 | O(log(n))       | O(log(n))        |

## Examples

### Example 1

#### Input

```javascript
array = [0, 1, 21, 33, 45, 45, 61, 71, 72, 73]
target = 33
```

#### Output

```javascript
3
```

### Example 2

#### Input

```javascript
array = [0, 1, 3, 5, 9, 11]
target = 4
```

#### Output

```javascript
-1
```

[JS-1]: ../solutions/js/005-BinarySearch/solution-1.js