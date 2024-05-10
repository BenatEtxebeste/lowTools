let ip = (new URL(window.location.origin)).hostname;
function SignIn(event) {
    event.preventDefault()

    const datos = {
        name: document.getElementById('username').value,
        email: document.getElementById('email').value,
        password: document.getElementById('password').value,
        c_password: document.getElementById('c_password').value
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
            console.log(response)
            console.log("entra");
            return response.json();
        })
        .then(data => {
            console.log(data);
            window.location.assign("index.html")
        })
        .catch(error => console.log(error))
}

function LogIn(event) {
    event.preventDefault();

    const datos = {
        name: document.getElementById('username').value,
        password: document.getElementById('password').value
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
            window.location.assign("index.html")
        })
        .catch(error => {
            Swal.fire({
                icon: "error",
                text: 'Datos de inicio de sesión no válidos. Introduzca datos correctos.',
                customClass: {
                    confirmButton: 'errorButton'
                }
              });
        })
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