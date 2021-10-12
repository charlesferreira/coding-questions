// O(n) time | O(1) space, n = number of elements in array
function solution(A) {
    let lowestAvg = Infinity;
    let lowestIdx = 0;
    for (let i = 0; i < A.length - 1; i++) {
        const j = i + 1;
        const k = i + 2;
        let currentAvg = (A[i] + A[j]) / 2;

        if (k < A.length && A[k] < currentAvg)
            currentAvg = (A[i] + A[j] + A[k]) / 3;

        if (lowestAvg > currentAvg) {
            lowestAvg = currentAvg;
            lowestIdx = i;
        }
    }
    return lowestIdx;
}

const test = require('./tests');

test(solution);