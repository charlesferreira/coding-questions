const testCases = [
    [[8, 5, 2, 9, 5, 6, 3], [2, 3, 5, 5, 6, 8, 9]],
    [[], []],
    [[1], [1]],
    [[1, 2, 3, 4], [1, 2, 3, 4]],
    [[1, 4, 2, 3], [1, 2, 3, 4]],
    [[4, 3, 2, 1], [1, 2, 3, 4]],
    [[1, 0, -1, 1], [-1, 0, 1, 1]],
];

const isEqual = (arr1, arr2) => {
    return arr1.length === arr2.length && arr1.every((v, i) => v === arr2[i]);
}

module.exports = (solution) => {
    for (const [index, testCase] of testCases.entries()) {
        console.log(`---------- Test Case ${index} ----------`);
        const [input, expected] = testCase;
        const result = solution(input);
        if (isEqual(expected, result)) {
            console.log('OK');
        } else {
            console.error(`Failed: Expected [${expected}] but got [${result}] instead`);
        }
    }
}