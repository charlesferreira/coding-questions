const testCases = [
    [[[0, 1, 21, 33, 45, 45, 61, 71, 72, 73], 33], 3],
    [[[1, 2, 3, 5, 8, 13], 13], 5],
    [[[1, 2, 3, 5, 8, 13], 1], 0],
    [[[1, 2, 3, 5, 8, 13], 3], 2],
    [[[1, 2, 3, 5, 8, 13], 5], 3],
    [[[1, 2, 3, 5, 8, 13], 4], -1],
];

module.exports = (solution) => {
    for (const [index, testCase] of testCases.entries()) {
        console.log(`---------- Test Case ${index} ----------`);
        const [[array, target], expected] = testCase;
        const result = solution(array, target);
        if (expected === result) {
            console.log('OK');
        } else {
            console.error(`Failed: Expected ${expected} but got ${result} instead`);
        }
    }
}