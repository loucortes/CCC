function checkSpaces(value){
    return /\S/.test(value);
}

let word1 = 'Hello, World!';
let word2 = "     ";

console.log(checkSpaces(word1));
console.log(checkSpaces(word2));