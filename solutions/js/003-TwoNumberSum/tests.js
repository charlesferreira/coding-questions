const testCases = [
    [[[3, 5, -4, 8, 11, 1, -1, 6], 10], [11, -1]],
    [[[0, 1], 1], [0, 1]],
    [[[0, 1], 2], []],
    [[[], 0], []],
];

const isEqual = (arr1, arr2) => {
    return arr1.length === arr2.length && arr1.every((v, i) => v === arr2[i]);
}

module.exports = (solution) => {
    for (const [index, testCase] of testCases.entries()) {
        console.log(`---------- Test Case ${index} ----------`);
        const [[array, targetSum], expected] = testCase;
        const result = solution(array, targetSum);
        if (isEqual(expected, result)) {
            console.log('OK');
        } else {
            console.error(`Failed: Expected ${expected} but got ${result} instead`);
        }
    }
}