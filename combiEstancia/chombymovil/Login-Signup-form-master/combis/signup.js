function showPassword() {
    var password = document.getElementById("password");
    var icon = document.querySelector(".fas");

    if (password.type === "password") {
        password.type = "text";
    } else {
        password.type = "password";
    }
}

function validateForm(event) {
    // Guardar el valor de cada campo
    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var pick = document.getElementById("pick").value;
    var password = document.getElementById("password").value;
    var emailRegex = /^[A-Za-z0-9._%+-]+@gmail\.com$/;

    // No permitir campos vacíos
    if (name === "" || email === "" || pick === "" || password === "") {
        alert("Por favor, rellena todos los campos");
        return false;
    }
    //Restriccion de campo email
    if (!emailRegex.test(email)) {
        alert("Por favor, ingrese un correo de Gmail válido");
        return false;
    }
    return true;
}

/*var formData = {
    name: name,
    email: email,
    pick: pick,
    password: password
};
var jsonData = JSON.stringify(formData);
// Enviar jsonData al LogIn pero encriptado
window.location.href = 'login.html?jsonData=' + encodeURIComponent(jsonData);*/

