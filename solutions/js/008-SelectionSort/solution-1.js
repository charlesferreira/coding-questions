// O(n^2) time | O(1) space, n = number of elements in array
function selectionSort(array) {
    for (let i = 0; i < array.length - 1; i++) {
        let lowest = i;
        for (let j = i + 1; j < array.length; j++) {
            if (array[j] < array[lowest]) lowest = j;
        }
        swap(array, i, lowest);
    }
    return array;
}

function swap(array, i, j) {
    const temp = array[i];
    array[i] = array[j];
    array[j] = temp;
}

const test = require('./tests');

test(selectionSort);
