// O(n * m) time | O(n) space
// n = total length of all words, m = length of shortest word
function findCommonCharacters(A) {
    const words = A.map(a => a.split(''));
    words.sort((a, b) => a.length - b.length);

    let repeatingLetters = [];
    const firstWord = words.shift();
    for (const letter of firstWord) {
        let letterOccursInAllStrings = true;
        for (const currentWord of words) {
            const letterIndex = currentWord.indexOf(letter);
            if (letterIndex === -1) {
                letterOccursInAllStrings = false;
                break;
            }
            currentWord[letterIndex] = '*';
        }
        if (letterOccursInAllStrings)
            repeatingLetters.push(letter);
    }

    return repeatingLetters;
}

const test = require('./tests');

test(findCommonCharacters);
