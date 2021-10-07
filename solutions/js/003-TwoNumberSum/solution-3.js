// O(n) time | O(n) space, n = number of elements in array
function twoNumberSum(array, targetSum) {
    array.sort((a, b) => a - b);
    let leftIndex = 0;
    let rightIndex = array.length - 1;
    while (leftIndex < rightIndex) {
        const leftNumber = array[leftIndex];
        const rightNumber = array[rightIndex];
        const currentSum = leftNumber + rightNumber;
        if (currentSum === targetSum) return [leftNumber, rightNumber];
        if (currentSum > targetSum) rightIndex--;
        if (currentSum < targetSum) leftIndex++;
    }
    return [];
}

const test = require('./tests');

test(twoNumberSum);
