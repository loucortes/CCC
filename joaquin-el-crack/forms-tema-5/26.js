function validateInstagram(username) {
  const regex = /^@[a-zA-Z0-9_-]+$/

  return regex.test(username)
}

const ejemploUsuario = '@mi_usuario_123'

console.log(validateInstagram(ejemploUsuario)) // true
