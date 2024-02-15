function mostrarEnlaces(){
    let url = document.querySelector("a").href;
    let target = document.querySelector("a").target;
    let botonNodos = document.querySelector("#boton").className;
    let alineacion = document.querySelector("#p1").style.textAlign;
    let src = document.querySelector("img").src;

    let resultado = document.querySelector("#resultado");

    resultado.innerHTML = `
    <p>Url: ${url}</p>
    <p>Target: ${target}</p>
    <p>Botón nodos: ${botonNodos}</p>
    <p>Alineación: ${alineacion}</p>
    <p>Src: ${src}</p>
    `;
}


mostrarEnlaces();