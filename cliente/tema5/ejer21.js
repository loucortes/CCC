function isTelephoneNum(tel){
    return /^-?\d+$/.test(tel);
}

let tel1 = "5629";
let tel2 = "5229";

console.log(isTelephoneNum(tel1));
console.log(isTelephoneNum(tel2));