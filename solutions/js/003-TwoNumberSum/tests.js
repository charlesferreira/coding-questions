const testCases = [
    [[[3, 5, -4, 8, 11, 1, -1, 6], 10], [11, -1]],
    [[[0, 1], 1], [0, 1]],
    [[[0, 1], 2], []],
    [[[], 0], []],
];

const isEqual = (arr1, arr2) => {
    const sortedArr2 = [...arr2].sort();
    return arr1.length === arr2.length && [...arr1].sort().every((v, i) => v === sortedArr2[i]);
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