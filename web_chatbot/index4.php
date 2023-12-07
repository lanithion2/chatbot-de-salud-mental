<?php
session_start();
include("conexion_bd.php");
include("controlador.php"); 

echo $_SESSION["nombre"]." ". $_SESSION['apellidos'];



?>