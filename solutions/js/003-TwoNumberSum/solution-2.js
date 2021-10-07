// O(n) time | O(n) space, n = number of elements in array
function twoNumberSum(array, targetSum) {
    const found = {};
    for (const currentNumber of array) {
        const currentDiff = targetSum - currentNumber;
        if (currentDiff in found)
            return [currentDiff, currentNumber];
        found[currentNumber] = true;
    }
    return [];
}

const test = require('./tests');

test(twoNumberSum);
