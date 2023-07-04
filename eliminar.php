<?php
//CONEXION
$server = "localhost";
$user = "root";
$pass = "";
$db = "RegistroEstudiantes";
$conn = mysqli_connect($server, $user, $pass, $db);
if(!$conn){
    die("La conexión fallo: " . mysqli_connect_error());
}else{
    include_once('./Historial/delete.php');
    $id = $_GET['id'];
    $sql = "DELETE FROM estudiantes WHERE id = ". $id ."";
    
    if(mysqli_query($conn, $sql)){
        header("Location: ./Listado/listado.php");
    }else{
        echo "Error: " . mysqli_error($conn);
    }
    
}
?>