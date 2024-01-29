function numPositivo(value) {
  return /^\d+$/.test(value);
}

function numNegativo(value) {
    return /^-\d+$/.test(value);
}

let pos = "123";
let neg = "-123";

console.log(numNegativo(pos));
console.log(numPositivo(pos));

console.log(numNegativo(neg));
console.log(numPositivo(neg));

