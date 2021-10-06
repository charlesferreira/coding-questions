const testCases = [
    [[1, 2, 3], 2],
    [[1, 1, 3, 3, 5, 5, 7, 7], 0],
    [[1, 3, 2, 3, 5, 0], 3],
    [[...new Array(10000).fill(1)], 0],
    [[...new Array(10000).fill(1), 2], 10000],
];

module.exports = (solution) => {
    for (const [index, testCase] of testCases.entries()) {
        console.log(`---------- Test Case ${index} ----------`);
        const [input, expected] = testCase;
        const result = solution(input);
        if (expected === result) {
            console.log('OK');
        } else {
            console.error(`Failed: Expected ${expected} but got ${result} instead`);
        }
    }
}