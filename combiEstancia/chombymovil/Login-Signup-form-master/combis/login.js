//mostrar contraseña en campo
function showPassword() {
    var password = document.getElementById("password");
    var icon = document.querySelector(".fas")

    // ========== evaluar tipo de contraseña ===========
    if (password.type === "password") {
        password.type = "text";
    } else {
        password.type = "password";
    }
}

/*mandar los datos del formulario
document.getElementById("login-form").addEventListener("submit", function (event) {
    event.preventDefault();
    validateForm();
});
//función para validar información*/
function validateForm(event) {
    var pick = document.getElementById("pick").value;
    var password = document.getElementById("password").value;
    //que no haya campos vacios
    if (pick === "" || password === "") {
        alert("Por favor ingresa ambos: Usuario y contraseña.");
        return false;
    }
    /*recibir los datos encriptados del objeto jsonData provenientes del SignIn
    var urlParams = new URLSearchParams(window.location.search);
    var jsonData = urlParams.get("jsonData");
    //desencriptar los datos recibidos y guardarlos en data
    if (jsonData) {
        var data = JSON.parse(decodeURIComponent(jsonData));
        //comparar el username ingresado con el guardado, al igual que la contraseña.
        if (username === data.pick && password === data.password) {
            alert("Login exitoso!");
            // Aquí puedes redireccionar al usuario a la página de inicio de sesión exitosa
            window.location.href = 'combis/index.html';
            //mensajes de alerta
        } else {
            alert("Nombre de usuario o contraseña invalido");
        }
    } else {
        alert("datos más validos");
    }*/

    return true;
}