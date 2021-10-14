// O(n) time | O(n) space, n = number of elements in the input array
function productOfArray(nums) {
    const products = [];

    let currentLeftProduct = 1;
    for (let i = 0; i < nums.length; i++) {
        products[i] = currentLeftProduct;
        currentLeftProduct *= nums[i];
    }

    let currentRightProduct = 1;
    for (let i = nums.length - 1; i > -1; i--) {
        products[i] *= currentRightProduct;
        currentRightProduct *= nums[i];
    }

    return products;
}

const test = require('./tests');

test(productOfArray);
