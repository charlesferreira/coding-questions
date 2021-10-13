const testCases = [
    [[[1, 2, 2, 4], 2], 2],
    [[[1, 2, 1, 2, 4], 2], 3],
    [[[1, 4, 16, 64], 4], 2],
    [[[1, 3, 9, 9, 27, 81], 3], 6],
    [[[1, 5, 5, 25, 125], 5], 4],
    [[[
        ...new Array(10000).fill(1),
        ...new Array(10000).fill(2),
        ...new Array(10000).fill(1),
        ...new Array(10000).fill(2),
        ...new Array(10000).fill(4),
    ], 2], 3000000000000],
];

module.exports = (solution) => {
    for (const [index, testCase] of testCases.entries()) {
        console.log(`---------- Test Case ${index} ----------`);
        const [[array, ratio], expected] = testCase;
        const result = solution(array, ratio);
        if (expected === result) {
            console.log('OK');
        } else {
            console.error(`Failed: Expected [${expected}] but got [${result}] instead`);
        }
    }
}