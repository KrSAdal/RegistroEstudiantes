<?php
session_start();
include_once('../conexion.php');

if (isset($_POST['usuario']) && isset($_POST['pass'])) {

$server = "localhost";
$user = "root";
$pass = "";
$db = "RegistroEstudiantes";
$conn = mysqli_connect($server, $user, $pass, $db);

if (!$conn) {
    die("La conexion fallo: " . mysqli_connect_error());
} else {
    $id = $_POST['id'];
    $nombre1 = $_POST['1nombre'];
    $nombre2 = $_POST['2nombre'];
    $apellido1 = $_POST['1apellido'];
    $apellido2 = $_POST['2apellido'];
    $telEstudiante = $_POST['telEstudiante'];
    $telPadre = $_POST['telPadre'];
    $jornada = $_POST['jornada'];
    $grado = $_POST['grado'];
    $carrera = $_POST['carrera'];

    $sql = "UPDATE estudiantes SET primernombre = '". $nombre1 ."',segundonombre = '". $nombre2 ."',primerapellido = '". $apellido1 ."',segundoapellido = '". $apellido2 ."',telefono = '". $telEstudiante ."',telefonopadres = '". $telPadre ."',jornada = '". $jornada ."',grado = '". $grado ."',carrera = '". $carrera ."' WHERE id = ". $id ."";

    if (mysqli_query($conn, $sql)) {
        header("Location: ../Listado/listado.php");
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}



} else {
    header('location: registro.php');
    exit();
}
?>


