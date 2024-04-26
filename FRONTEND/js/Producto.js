/*
 CONSULTAS
*/
const myHeaders = new Headers();
myHeaders.append("Accept", "application/json");
let url = "http://localhost"; //(new URL(window.location.origin)).hostname;

async function insertarProcucto(id, nombre, precio, album, categoria) {
  let formdata = new FormData();
  if (!id == "") {
    formdata.append("id", '"' + id + '"');
  }
  formdata.append("nombre", '"' + nombre + '"');
  formdata.append("precio", "" + precio + "");
  formdata.append("album", '"' + album + '"');
  formdata.append("categoria", '"' + categoria + '"');
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
    redirect: "follow",
  };

  return fetch(url + ":8085/api/index", requestOptions)
    .then((response) => response.json())
    .then((productos) => {
      generarProductos(productos);
      return JSON.parse(productos);
    })
    .catch();
}

async function deleteProducto(id) {
  let formdata = new FormData();
  formdata.append("id", '"' + id + '"');

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

async function generarProductos(listaProcuctos) {
  let productos = listaProcuctos["productos"];
  // Genera las tarjetas HTML para cada producto
  const productosContainer = document.getElementById("productosContainer");
  console.log(productos);
  productos.forEach((producto) => {
    console.log(producto);
    let card = document.createElement("div");
    card.classList.add("card");
    // Crear imagen
    var imagen = new Image();
    imagen.src = producto.album;
    imagen.classList.add("producto-imagen"); // Agregar clase a la imagen

    // Crear título
    let titulo = document.createElement("h2");
    titulo.textContent = producto.nombre;
    titulo.classList.add("titulo");

    // Crear precio
    let precio = document.createElement("p");
    precio.textContent = "Precio: " + producto.precio;
    precio.classList.add("precio");

    // Crear categoría
    let categoria = document.createElement("p");
    categoria.textContent = "Categoría: " + producto.categoria;
    categoria.classList.add("categoria");

    // Agregar elementos a la tarjeta
    card.appendChild(imagen);
    card.appendChild(titulo);
    card.appendChild(precio);
    card.appendChild(categoria);

    // Agregar tarjeta al contenedor de productos
    productosContainer.appendChild(card);
  });
}

window.onload = function () {
  listProcuctos();
};
