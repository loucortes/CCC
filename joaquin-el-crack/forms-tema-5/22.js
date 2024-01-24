function validatePositive(valor) {
  const regex = /^\d+$/

  return regex.test(valor)
}

function validateNegative(valor) {
  const regex = /^-\d+$/

  return regex.test(valor)
}

const ejemploPositivo = '123'
const ejemploNegativo = '-456'

console.log(validatePositive(ejemploPositivo)) // true
console.log(validatePositive(ejemploNegativo)) // false
console.log(validateNegative(ejemploNegativo)) // true
console.log(validateNegative(ejemploPositivo)) // false
