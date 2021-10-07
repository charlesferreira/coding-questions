// O(n^2) time | O(1) space, n = number of elements in array
function twoNumberSum(array, targetSum) {
    for (let i = 0; i < array.length; i++) {
        const number1 = array[i];
        for (let j = 0; j < array.length; j++) {
            if (i === j) continue;

            const number2 = array[j];
            if (number1 + number2 === targetSum)
                return [number1, number2];
        }
    }
    return [];
}

const test = require('./tests');

test(twoNumberSum);
