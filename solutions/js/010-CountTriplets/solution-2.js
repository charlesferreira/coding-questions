// O(n) time | O(c) space
// n = number of elements in array
// c = number of unique values in array
function countTriplets(arr, r) {
    let count = 0;
    const level1 = {};
    const level2 = {};

    for (const num of arr) {
        const num_r = num / r;

        if (num_r in level2) {
            count += level2[num_r];
        }

        if (num_r in level1) {
            level2[num] = (level2[num] ?? 0) + level1[num_r];
        }

        level1[num] = (level1[num] ?? 0) + 1;
    }

    return count;
}

const test = require('./tests');

test(countTriplets);
