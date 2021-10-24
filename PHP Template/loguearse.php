<?php
//comprobacion de errores
error_reporting(E_ALL);
ini_set('display_errors', 1);

$data = $_POST;

//conexion a la base de datos
$enlace = mysqli_connect("localhost", "root", "", "shop");
if (!$enlace) {
    echo "Error: No se pudo conectar a MySQL" . PHP_EOL;
    echo "errno de depuracion: " . mysqli_connect_errno() . PHP_EOL;
    echo "error de depuracion: " . mysqli_connect_error() . PHP_EOL;
    exit;
}
//se traen todos los datos de la tabla usuarios con su dni
$sql = "SELECT * FROM usuarios WHERE dni = '" . $data['dni'] . "'";

//se guardan los datos en result
$result = mysqli_query($enlace, $sql);

//verifica si el usuario existe e imprime por pantalla el mensaje
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "Dni: " . $row["dni"] . " - Nombre: " . $row["nombre"] . " " . $row["apellido"] . "<br/>";
        $hash = $row["password"];
        //compara la contraseña encriptada (hash) contra la contraseña introducida
        if (password_verify($data["password"], $hash)) {
            echo '¡La contraseña es válida!';
        } else {  //imprime el mensaje y redirige al login
            echo 'La contraseña no es válida.'; 
            echo "<br/>";
            echo "Intente nuevamente.";
            header("refresh:3;url=login.php");
        }
    }
} else {    //imprime el mensaje y redirige al registro
    echo "Su usuario no se encuentra registrado.";
    header("refresh:3;url=registro.php");
}
