function validateIP(ip) {
  const regex = /^(?:[0-9]{1,3}\.){3}[0-9]{1,3}$/

  return regex.test(ip)
}

const ejemploIP = '192.168.1.1'

console.log(validateIP(ejemploIP)) // true
