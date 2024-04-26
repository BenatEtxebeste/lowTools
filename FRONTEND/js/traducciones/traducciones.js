var idiomaActual = 'es'; // Por defecto, se establece en español
var traducciones;
var jsonFile = 'traducciones.json'; // Ruta del archivo JSON

window.onload = function() {
    setTimeout(() => {
       cargarTraducciones();  
    }, 100);
};

// Cargar las traducciones desde el archivo JSON
function cargarTraducciones() {
    fetch(jsonFile)
        .then(response => response.json())
        .then(data => {
            traducciones = data;
            aplicarTraducciones();
        })
        .catch(error => console.error('Error al cargar traducciones: ', error));
}

// Aplicar las traducciones a los elementos con atributo data-translate
function aplicarTraducciones() {
    var elementos = document.querySelectorAll('[data-translate]');
    elementos.forEach(function(elemento) {
        var clave = elemento.getAttribute('data-translate');
        if (elemento.tagName.toLowerCase() === 'input' && elemento.getAttribute('placeholder')) {
            elemento.setAttribute('placeholder', traducciones[clave][idiomaActual]);
        } else {
            elemento.innerText = traducciones[clave][idiomaActual];
        }
    });
}

// Cambiar el idioma
function cambiarIdioma(nuevoIdioma) {
    idiomaActual = nuevoIdioma;
    aplicarTraducciones();
}

