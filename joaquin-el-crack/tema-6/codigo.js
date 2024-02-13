// Ejercicio 3
function mostrarEnlaces() {
  // Obtener el primer enlace y sus atributos
  let enlaceURL = document
    .getElementById('p3')
    .getElementsByTagName('a')[0].href
  let enlaceTarget = document
    .getElementById('p3')
    .getElementsByTagName('a')[0].target

  // bbtener la clase del botón Nodos
  let claseBoton = document.getElementById('boton').className

  // Obtener la alineación del primer párrafo
  let alineacionParrafo = document.getElementById('p1').style.textAlign

  // Obtener el atributo src de la imagen
  let srcImagen = document.getElementById('img1').src

  // Mostrar los resultados en el div con id "resultado"
  document.getElementById('resultado').innerHTML = `
    <p>URL del primer enlace: ${enlaceURL}</p>
    <p>Target del primer enlace: ${enlaceTarget}</p>
    <p>Clase del botón Nodos: ${claseBoton}</p>
    <p>Alineación del primer párrafo: ${alineacionParrafo}</p>
    <p>Atributo src de la imagen: ${srcImagen}</p>
    `
}

document.getElementById('boton').addEventListener('click', mostrarEnlaces)

// Ejercicio 4
function add() {
  const i = document.getElementById('info')
  const p = document.createElement('p')
  p.textContent =
    'Los ciclos formativos de Formación Profesional Básica forman parte de las enseñanzas de Formación Profesional del sistema educativo y responden al perfil profesional 1 definido por el INCUAL. Están cofinanciados por el Programa Operativo del Fondo Social Europeo 2014-2020 al 50%'
  i.appendChild(p)
}

document.getElementById('boton').addEventListener('click', add)