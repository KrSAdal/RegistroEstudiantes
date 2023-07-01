<?php

$server = "localhost";
$user = "root";
$pass = "";
$db = "RegistroEstudiantes";
$conn = mysqli_connect($server, $user, $pass, $db);

if (!$conn) {
    die("La conexion fallo: " . mysqli_connect_error());
} else {
    $nombre1 = $_POST['1nombre'];
    $nombre2 = $_POST['2nombre'];
    $apellido1 = $_POST['1apellido'];
    $apellido2 = $_POST['2apellido'];
    $telEstudiante = $_POST['telEstudiante'];
    $telPadre = $_POST['telPadre'];
    $jornada = $_POST['jornada'];
    $grado = $_POST['grado'];
    $carrera = $_POST['carrera'];

    $sql = "INSERT INTO estudiantes(primernombre, segundonombre, primerapellido, segundoapellido, telefono, telefonopadres, jornada, grado, carrera) VALUES('$nombre1', '$nombre2', '$apellido1', '$apellido2', '$telEstudiante', '$telPadre', '$jornada', '$grado', '$carrera')";

    if (mysqli_query($conn, $sql)) {
        header("Location: ../Listado/listado.php");
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}




?>