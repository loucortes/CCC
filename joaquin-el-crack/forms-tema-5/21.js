function validateNumber(valor) {
  const regex = /^-?\d+$/

  return regex.test(valor)
}

const ejemplo1 = '123'
const ejemplo2 = '-456'
const ejemplo3 = '12.34'

console.log(validateNumber(ejemplo1)) // true
console.log(validateNumber(ejemplo2)) // true
console.log(validateNumber(ejemplo3)) // false
