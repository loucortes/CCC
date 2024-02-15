let botonNodos = document.querySelector("#boton");
let url = document.querySelector("a").href;
let target = document.querySelector("a").target;
let alineacion = document.querySelector("#p1").style.textAlign;
let src = document.querySelector("img").src;
let resultado = document.querySelector("#resultado");
let info = document.querySelector("div #info");
let img = document.querySelector("img");

function mostrarEnlaces(){
    resultado.innerHTML = `
    <p>Url: ${url}</p>
    <p>Target: ${target}</p>
    <p>Botón nodos: ${botonNodos.className}</p>
    <p>Alineación: ${alineacion}</p>
    <p>Src: ${src}</p>
    `;
}


mostrarEnlaces();



botonNodos.addEventListener("click", ()=>{
    let parrafo = document.createElement("p");
    parrafo.textContent = "Los ciclos formativos de Formación Profesional Básica forman parte de las enseñanzas de Formación Profesional del sistema educativo y responden al perfil profesional 1 definido por el INCUAL. Están cofinanciados por el Programa Operativo del Fondo Social Europeo 2014-2020 al 50%";
    info.appendChild(parrafo);
});

img.addEventListener("mouseover", ()=>{
    let parrafo = document.createElement("p");
    parrafo.textContent = "🍺";
    document.body.appendChild(parrafo);
});
