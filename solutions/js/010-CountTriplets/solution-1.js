
// O(n^3) time | O(1) space, n = number of elements in array
function countTriplets(arr, r) {
    let count = 0;
    for (let i = 0; i < arr.length - 2; i++) {
        for (let j = i + 1; j < arr.length - 1; j++) {
            for (let k = i + 2; k < arr.length; k++) {
                if (arr[i] * r === arr[j] && arr[j] * r === arr[k]) {
                    count++;
                }
            }
        }
    }
    return count;
}

const test = require('./tests');

test(countTriplets);
