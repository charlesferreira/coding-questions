const test = require('./tests/CountSpecificElementsInArray');

// O(n) time | O(n) space, n = number of elements in the input array
function countSpecificElements(input) {
    let count = 0;
    const found = [];
    for (const number of input) {
        if (found[number + 1])
            count++;

        if (!found[number] && found[number - 1])
            count += found[number - 1];

        found[number] = (found[number] || 0) + 1;
    }

    return count;
}

test(countSpecificElements);
