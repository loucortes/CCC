function validarIp(ip) {
    return /^(?:[0-9]{1,3}\.){3}[0-9]{1,3}$/.test(ip)
  }
  
  let ip = '194.2346.1.1'
  console.log(validarIp(ip)) 