/*
 CONSULTAS
*/
const myHeaders = new Headers();
myHeaders.append("Accept", "application/json");
let url = "http://" +(new URL(window.location.origin)).hostname;//"http://localhost"; 

async function insertarProcucto(id, nombre, precio, album, categoria) {
  let formdata = new FormData();
  if (!id == "") {
    formdata.append("id", id);
  }
  formdata.append("nombre", nombre);
  formdata.append("precio", precio);
  formdata.append("album", album);
  formdata.append("categoria", categoria);
  const requestOptions = {
    method: "POST",
    headers: myHeaders,
    body: formdata,
    redirect: "follow",
  };
  fetch(url + ":8085/api/saveProducto", requestOptions)
    .then((response) => response.text())
    .then((result) => console.log(result))
    .catch((result) => console.log(result));
}

async function listProcuctos() {
  const requestOptions = {
    method: "GET",
  };
  return fetch(url + ":8085/api/index", requestOptions)
    .then((response) => response.json())
    .then((productos) => {
      generarProductos(productos);
      console.log(productos);
      return JSON.parse(productos);
    })
    .catch();
}

async function deleteProducto(id) {
  let formdata = new FormData();
  formdata.append("id", id);

  const requestOptions = {
    method: "POST",
    body: formdata,
    redirect: "follow",
  };

  fetch(url + ":8085/api/deleteProducto", requestOptions)
    .then((response) => response.json())
    .then((result) => {
      return result;
    })
    .catch();
}
async function getProcuctos(id) {
  const requestOptions = {
    method: "GET",
    headers: myHeaders,
    redirect: "follow",
  };

  fetch(url + ":8085/api/getProducto?id=" + id, requestOptions)
    .then((response) => response.json())
    .then((result) => {
      return result;
    })
    .catch();
}

/*
 CARDS
*/

async function generarProductos(listaProductos) {
  console.log("ss")
  let productos = listaProductos["productos"];
  const productosContainer = document.getElementById("productosContainer");

  productos.forEach((producto) => {
    let card = document.createElement("div");
    card.classList.add("card");

    var imagen = new Image();
    imagen.src = producto.album;
    imagen.classList.add("producto-imagen");

    let titulo = document.createElement("h2");
    titulo.textContent = producto.nombre;
    titulo.classList.add("titulo");

    // Sistema de valoración con estrellas
    let valoracion = document.createElement("div");
    valoracion.classList.add("valoracion");
    let valoracionTexto = document.createElement("span");
    valoracionTexto.textContent = "";
    valoracion.appendChild(valoracionTexto);
    for (let i = 0; i < 5; i++) {
      let estrella = document.createElement("span");
      estrella.textContent = "★";
      valoracion.appendChild(estrella);
    }

    let precio = document.createElement("p");
    precio.textContent = "Precio: " + producto.precio;
    precio.classList.add("precio");

    let categoria = document.createElement("p");
    categoria.textContent = "Categoría: " + producto.categoria;
    categoria.classList.add("categoria");

    let alcarrito = document.createElement("button");
    alcarrito.textContent = "Pedir";
    alcarrito.classList.add("pedir");
    alcarrito.setAttribute("onclick", "pedir(" + producto.id + ")");

    card.appendChild(imagen);
    card.appendChild(titulo);
    card.appendChild(valoracion);
    card.appendChild(precio);
    card.appendChild(categoria);
    card.appendChild(alcarrito);

    // Verificar si el título es demasiado grande
    if (titulo.offsetWidth > card.offsetWidth) {
      titulo.classList.add("animar-texto");
    }

    productosContainer.appendChild(card);
  });
}

listProcuctos();

for (let index = 0; index < 10; index++) {
  insertarProcucto("", "nombre del producto de referencia"+index, (Math.sin(index)*10)+10, "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR_rW9Y5TfUq1duUy3j4mvfVF5kJYUh3_0opA&s", "categoria")}
