<?php
if (!empty($_POST["usuario"])) {
    if (empty($_POST["nombres"]) || empty($_POST["apellidos"]) || empty($_POST["usuario"]) || empty($_POST["clave"])) {
        echo "usuario no registrado"; // Fixed the echo statement and added || for logical OR
    } else {
        $nombres = $_POST["nombres"];
        $apellidos = $_POST["apellidos"];
        $usuario = $_POST["usuario"];
        $clave = $_POST["clave"];
        
        // Assuming you have a database connection named $conexion
        $sql = $conexion->query("INSERT INTO usuario (nombres, apellidos, usuario, clave) VALUES ('$nombres', '$apellidos', '$usuario', '$clave')");
        
        if ($sql) {
            echo 'Usuario registrado';
        } else {
            echo 'Error al registrar';
        }
    }
}
?>
