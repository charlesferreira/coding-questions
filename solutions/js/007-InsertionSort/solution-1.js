// O(n^2) time | O(1) space, n = number of elements in array
function insertionSort(array) {
    for (let i = 1; i < array.length; i++) {
        let currIdx = i;
        while (currIdx > 0 && array[currIdx] < array[currIdx - 1]) {
            swap(array, currIdx, currIdx - 1);
            currIdx--;
        }
    }
    return array;
}

function swap(array, i, j) {
    const temp = array[i];
    array[i] = array[j];
    array[j] = temp;
}

const test = require('./tests');

test(insertionSort);
