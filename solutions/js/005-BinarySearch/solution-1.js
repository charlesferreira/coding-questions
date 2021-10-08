// recursive approach
// O(log(n)) time | O(log(n)) space, n = number of elements in array
function binarySearch(array, target) {
    return recursiveBinarySearch(array, target, 0, array.length - 1);
}

function recursiveBinarySearch(array, target, left, right) {
    if (left > right) return -1;
    const middle = Math.floor((left + right) / 2);
    const number = array[middle];
    if (target === number) {
        return middle;
    } else if (target > number) {
        return recursiveBinarySearch(array, target, middle + 1, right);
    } else {
        return recursiveBinarySearch(array, target, left, middle - 1);
    }
}

const test = require('./tests');

test(binarySearch);
