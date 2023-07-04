<?php
//CONEXION
$host = "localhost";
$user = "id20936441_adal";
$pass = "Adal6115$";
$db = "id20936441_localhost";

$conexion = new mysqli($host, $user, $pass, $db);


if(!$conexion){

    die("La conexión fallo: " . mysqli_connect_error());
}

?>