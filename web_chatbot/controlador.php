<?php
session_start();
if(!empty($_POST["btningresar"])){
    if (empty($_POST["usuario"]) and empty($_POST["password"])){
        echo '<div clas="alert alert">Los campos estan vacios</div>';
    } else {
       $usuario=$_POST["usuario"];
       $contraseña=$_POST["password"];
       $sql=$conexion->query(" select *from usuario where usuario='$usuario' and clave='$contraseña' ");
       if ($datos=$sql->fetch_object()) {
            $_SESSION["id"]=$datos->id;
            $_SESSION["nombres"]=$datos->nombres;
            $_SESSION["apellidos"]=$datos->apellidos;
            header("Location:index2.php");
       } else {
            echo '<div class="alert alert-danger">Acceso Denegado</div>';
       }
       
    }
    
}

?>