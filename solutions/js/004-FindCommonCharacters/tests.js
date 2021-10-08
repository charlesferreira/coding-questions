const testCases = [
    [['bella', 'label', 'roller'], ['e', 'l', 'l']],
    [['cool', 'lock', 'cook'], ['c', 'o']],
    [['charles', 'ferreira'], ['a', 'r', 'e']],
    [['php', 'http', 'smtp'], ['p']]
];

const isEqual = (arr1, arr2) => {
    const sortedArr2 = [...arr2].sort();
    return arr1.length === arr2.length && [...arr1].sort().every((v, i) => v === sortedArr2[i]);
}

module.exports = (solution) => {
    for (const [index, testCase] of testCases.entries()) {
        console.log(`---------- Test Case ${index} ----------`);
        const [input, expected] = testCase;
        const result = solution(input);
        if (isEqual(expected, result)) {
            console.log('OK');
        } else {
            console.error(`Failed: Expected ${expected} but got ${result} instead`);
        }
    }
}