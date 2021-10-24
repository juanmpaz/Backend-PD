<?php

//comprobacion de errores
error_reporting(E_ALL);
ini_set('display_errors', 1);

$data = $_POST;

//validacion de igualdad de contraseñas
if ($data['password'] != $data['password2']) {
    echo "Las contraseñas no coinciden";
    echo "<br/>";
    echo "Intente nuevamente.";
    header("refresh:3;url=registro.php");
    exit;
} else {
    //encriptacion de contraseña
    $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
}

//elimina de la base la password2 despues de verificar
unset($data['password2']);
$data['habilitado'] = true;

//conexion a la base de datos
$enlace = mysqli_connect("localhost", "root", "", "shop");
if (!$enlace) {
    echo "Error: No se pudo conectar a MySQL" . PHP_EOL;
    echo "errno de depuracion: " . mysqli_connect_errno() . PHP_EOL;
    echo "error de depuracion: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

//inserta los datos en la tabla
$sql = "INSERT INTO usuarios (dni, nombre, apellido, email, password, habilitado) 
VALUES ('" . $data['dni'] . "', '" . $data['nombre'] . "', '" . $data['apellido'] . "', '" . $data['email'] . "', '" . $data['password'] . "', '" . $data['habilitado'] . "')";

//valida que los datos ingresaron al registro
if (mysqli_query($enlace, $sql)) {
    echo "Usuario registrado correctamente";
    header("refresh:3;url=login.php");
} else {
    echo "Error :" . $sql . "<br>" . mysqli_error($enlace);
}
