// iterative approach
// O(log(n)) time | O(1) space, n = number of elements in array
function binarySearch(array, target) {
    let left = 0;
    let right = array.length - 1;
    while (left <= right) {
        const middle = Math.floor((left + right) / 2);
        const number = array[middle];
        if (target === number) return middle;
        else if (target > number) left = middle + 1;
        else if (target < number) right = middle - 1;
    }
    return -1;
}

const test = require('./tests');

test(binarySearch);
