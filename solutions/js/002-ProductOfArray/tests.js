const testCases = [
    [[1, 2, 3, 4], [24, 12, 8, 6]],
    [[-1, 1, 0, -3, 3], [0, 0, 9, 0, 0]],
    [[1, 1, 1], [1, 1, 1]],
    [[-1, -1, -1], [1, 1, 1]],
    [[-1, -1, -1, -1], [-1, -1, -1, -1]],
    [[0, 0, 1, 1, 1], [0, 0, 0, 0, 0]],
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