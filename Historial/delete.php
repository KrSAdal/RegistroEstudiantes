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
    die("La conexión falló: " . mysqli_connect_error());
} else {
    $id = $_GET['id'];


    $sql_select = "SELECT * FROM estudiantes WHERE id = $id";
    $result = mysqli_query($conn, $sql_select);
    $estudiante = mysqli_fetch_assoc($result);


    $sql_delete = "DELETE FROM estudiantes WHERE id = $id";

    if (mysqli_query($conn, $sql_delete)) {

        $fk_estudiante = $id;
        $nombre1 = $estudiante['primernombre'];
        $nombre2 = $estudiante['segundonombre'];
        $apellido1 = $estudiante['primerapellido'];
        $apellido2 = $estudiante['segundoapellido'];
        $telEstudiante = $estudiante['telefono'];
        $telPadre = $estudiante['telefonopadres'];
        $jornada = $estudiante['jornada'];
        $grado = $estudiante['grado'];
        $carrera = $estudiante['carrera'];
        $fk_adminstracion = $_SESSION['usuario'];
        $accion = 'Eliminó un registro';

        $sql_insert = "INSERT INTO historial(primernombre, segundonombre, primerapellido, segundoapellido, telefono, telefonopadres, jornada, grado, carrera, fk_estudiante, fk_adminstracion, accion) VALUES('$nombre1', '$nombre2', '$apellido1', '$apellido2', '$telEstudiante', '$telPadre', '$jornada', '$grado', '$carrera', '$fk_estudiante', '$fk_adminstracion', '$accion')";

        if (mysqli_query($conn, $sql_insert)) {

            header("Location: ../Listado/listado.php");
            exit();
        } else {
            echo "Error al insertar en el historial: " . mysqli_error($conn);
        }
    } else {
        echo "Error al eliminar el estudiante: " . mysqli_error($conn);
    }
}

?>