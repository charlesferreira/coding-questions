# Product of Array

Given an integer array `nums`, return an array `answer` such that `answer[i]` is
equal to the product of all the numbers in the input array, except the number on
this position. The product of any prefix or suffix of `nums` is guaranteed to
fit in a 32-bit integer.

## Solutions

| Solution   | Language                   | Time complexity | Space complexity |
|:----------:|:--------------------------:|:---------------:|:----------------:|
| Solution 1 | [PHP][PHP-1]               | O(n^2)          | O(n)             |

## Examples

### Example 1

Input: `nums = [1, 2, 3, 4]`

Output: `[24, 12, 8, 6]`

*Explanation: [2\*3\*4, 1\*3\*4, 1\*2\*4, 1\*2\*3]*

### Example 2

Input: `nums = [-1, 1, 0, -3, 3]`

Output: `[0, 0, 9, 0, 0]`

*Explanation: [
1\*0\*(-3)\*3,
(-1)\*0\*(-3)\*3,
(-1)\*1\*(-3)\*3,
(-1)\*1\*0\*3,
(-1)\*1\*0\*(-3)
]*

(This case is interesting because we have a zero here)

[PHP-1]: ../solutions/php/002-ProductOfArray/solution-1.php