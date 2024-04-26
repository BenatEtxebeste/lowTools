const myHeaders = new Headers();
myHeaders.append("Accept", "application/json");
let url = (new URL(window.location.origin)).hostname;

function insertarProcucto(id,nombre, precio, album, categoria) {
    let formdata = new FormData();
    formdata.append("id", '"' + id + '"');
    formdata.append("nombre", '"' + nombre + '"');
    formdata.append("precio", '"' + precio + '"');
    formdata.append("album", '"' + album + '"');
    formdata.append("categoria", '"' + categoria + '"');
    const requestOptions = {
        method: "POST",
        headers: myHeaders,
        body: formdata,
        redirect: "follow",
    };
    fetch(url+":8085/api/insertProducto", requestOptions)
        .then((response) => response.text())
        .then((result) => console.log(result))
        .catch();
}

function listProcuctos() {
    const requestOptions = {
      method: "GET",
      redirect: "follow",
    };
  
    return fetch(url+":8085/api/index", requestOptions)
      .then((response) => response.json()) 
      .then((productos) => { return productos; })
      .catch();
}

function deleteProducto(id){
    let formdata = new FormData();
    formdata.append("id", '"' + id + '"');

    const requestOptions = {
        method: "POST",
     body: formdata,
        redirect: "follow"
    };

    fetch(url+":8085/api/deleteProducto", requestOptions)
        .then((response) => response.json())
        .then((result) => {return result})
        .catch();
}
function getProcuctos(id) {
    const requestOptions = {
        method: "GET",
        headers: myHeaders,
        redirect: "follow"
    };

    fetch(url+":8085/api/getProducto?id="+id, requestOptions)
        .then((response) => response.json())
        .then((result) => {return result})
        .catch();
}