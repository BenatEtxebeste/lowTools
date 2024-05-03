let ip = (new URL(window.location.origin)).hostname;
function SignIn(event) {
    event.preventDefault()

    const datos = {
        name: document.getElementById('inputNombre').value,
        email: document.getElementById('inputEmail').value,
        password: document.getElementById('inputContrasena').value,
        c_password: document.getElementById('inputConfContrasena').value
    }

    let config = {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(datos)
    }

    fetch("http://"+ip+":8085/api/register", config)
        .then(response => {
            if (!response.ok) {
                throw new Error("La solicitud no se pudo completar correctamente.");
            }
            return response.json();
        })
        .then(data => {
            window.location.assign("index.html")
        })
        .catch(error => console.log(error))
}

function LogIn(event) {
    event.preventDefault();

    const datos = {
        name: document.getElementById('inputNombre').value,
        password: document.getElementById('inputContrasena').value
    };

    let config = {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(datos)
    }
    fetch("http://"+ip+":8085/api/login", config)
        .then(response => {
            if (!response.ok) {
                throw new Error("La solicitud no se pudo completar correctamente.");
            }
            return response.json();
        })
        .then(data => {
            localStorage.setItem("token", data["data"]["token"])
            window.location.assign("home.html")
        })
        .catch(error => console.log(error))
}

function LogOut(event) {
    event.preventDefault();

    let config = {
        method: 'GET',
        headers: {
            'Content-Type': 'application/json',
            'Authorization': `Bearer ${localStorage.getItem("token")}`
        },
    }
    fetch("http://"+ip+":8085/api/logout", config)
    localStorage.removeItem("token")
    window.location.assign("index.html")
}