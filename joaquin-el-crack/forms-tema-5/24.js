function validatePlate(matricula) {
  const regex = /^[0-9]{4}[A-Z]{3}$/

  return regex.test(matricula)
}

const ejemploMatricula = '1234ABC'

console.log(validatePlate(ejemploMatricula)) // true
