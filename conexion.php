<?php
//CONEXION
$host = "localhost";
$user = "root";
$pass = "";
$db = "RegistroEstudiantes";

$conexion = new mysqli($host, $user, $pass, $db);


if(!$conexion){

    die("La conexión fallo: " . mysqli_connect_error());
}

?>