// O(n) time | O(n) space, n = number of elements in the input array
function productOfArray(nums) {
    const products = [];
    const leftProducts = new Array(nums.length).fill(1);
    const rightProducts = new Array(nums.length).fill(1);

    for (let i = 1; i < nums.length; i++) {
        leftProducts[i] = leftProducts[i - 1] * nums[i - 1];
    }

    for (let i = nums.length - 2; i > -1; i--) {
        rightProducts[i] = rightProducts[i + 1] * nums[i + 1];
    }

    for (let i = 0; i < nums.length; i++) {
        products[i] = leftProducts[i] * rightProducts[i];
    }

    return products;
}

const test = require('./tests');

test(productOfArray);