const mysql = require('mysql2');

const conexion = mysql.createConnection({
    host: 'localhost',
    user: 'root',
    database: 'combi',
    password: " ",
    port: 3307
})

conexion.connect((err) => {
    if(err){
        throw err;
    } else{
        console.log("CONEXION EXITOSA");
    }
})


