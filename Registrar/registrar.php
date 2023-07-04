<?php
session_start();
if (!isset($_SESSION['id']) || !isset($_SESSION['usuario'])) {
    header('location: ../index.php');
    exit();
}

$server = "localhost";
$user = "id20936441_adal";
$pass = "Adal6115$";
$db = "id20936441_localhost";
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
        include_once('../Historial/create.php');
        header("Location: ../Listado/listado.php");
        exit();
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>