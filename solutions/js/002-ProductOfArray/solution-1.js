// O(n^2) time | O(n) space, n = number of elements in the input array
function productOfArray(nums) {
    return nums.map((_, idx1) =>
        nums.reduce((product, number, idx2) =>
            idx1 === idx2 ? product : product * number, 1));
}

const test = require('./tests');

test(productOfArray);
