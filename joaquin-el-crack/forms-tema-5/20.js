function validateSpaces(valor) {
  const regex = /\S/

  return regex.test(valor)
}

const ejemplo1 = '   ' 
const ejemplo2 = '   texto   ' 

console.log(validateSpaces(ejemplo1)) 
console.log(validateSpaces(ejemplo2)) 
