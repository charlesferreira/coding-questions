const test = require('./tests/CountSpecificElementsInArray');

// O(n^2) time | O(1) space, n = number of elements in the input array
function countSpecificElements(input) {
    let numberOfElements = 0;
    for (let i = 0; i < input.length; i++) {
        for (let j = 0; j < input.length; j++) {
            if (i === j) continue;

            if (input[j] === input[i] + 1) {
                numberOfElements++;
                break;
            }
        }
    }

    return numberOfElements;
}

test(countSpecificElements);
