<?php
session_start();
if (isset($_SESSION['id']) && isset($_SESSION['usuario'])) {

    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Historial</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>

<body class="yup">
    <div class="principal">
        <div class="barralateral">
            <div class="barraoculta">
                <i class="fa fa-times" aria-hidden="true"></i>
                <img src="https://pm1.aminoapps.com/8402/a81ad5903e36df22e838e3c27f17e95f09cd3cbar1-1070-1637v2_hq.jpg"
                    style="width: 100px;" alt=":(">
            </div>
            <ul>
                <li><a href="../index.php"><label for="inicio">Inicio</label></a></li>
                <li><a href="../Registrar/registro.php"><label for="inicio">Registrar Estudiante</label></a></li>
                <li><a href="../Listado/listado.php"><label for="inicio">Visualizar Listado</label></a></li>
                <li><a href="#"><label for="inicio">Historial de Cambios</label></a></li>
            </ul>
        </div>
        <table class="table table-sm table-striped table-bordered">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Primer Nombre</th>
                    <th scope="col">Segundo Nombre</th>
                    <th scope="col">Primer Apellido</th>
                    <th scope="col">Segundo Apellido</th>
                    <th scope="col">Teléfono Estudiante</th>
                    <th scope="col">Teléfono Padre</th>
                    <th scope="col">Jornada</th>
                    <th scope="col">Grado</th>
                    <th scope="col">Carrera</th>
                    <th scope="col">ID Estudiante</th>
                    <th scope="col">Administrador</th>
                    <th scope="col">Acción</th>
                </tr>
            </thead>
            <?php

            $server = "localhost";
            $user = "root";
            $pass = "";
            $db = "RegistroEstudiantes";
            $conn = mysqli_connect($server, $user, $pass, $db);
            
            if (!$conn) {
                die("La conexion fallo: " . mysqli_connect_error());
            } else {
                $sql = "SELECT * FROM historial";
                
                $resultado = mysqli_query($conn, $sql);
                if ($resultado) {
                    while ($row = $resultado->fetch_array()) {
                        echo "<tr>";
                        echo "<td>" . $row['id'] . "</td>";
                        echo "<td>" . $row['primernombre'] . "</td>";
                        echo "<td>" . $row['segundonombre'] . "</td>";
                        echo "<td>" . $row['primerapellido'] . "</td>";
                        echo "<td>" . $row['segundoapellido'] . "</td>";
                        echo "<td>" . $row['telefono'] . "</td>";
                        echo "<td>" . $row['telefonopadres'] . "</td>";
                        echo "<td>" . $row['jornada'] . "</td>";
                        echo "<td>" . $row['grado'] . "</td>";
                        echo "<td>" . $row['carrera'] . "</td>";
                        echo "<td>" . $row['fk_estudiante'] . "</td>";
                        echo "<td>" . $row['fk_adminstracion'] . "</td>";
                        echo "<td>" . $row['accion'] . "</td>";
                        ?>
                        
                        <?php
                        echo "</tr>";
                    }
                }
            }
            ?>
        </table>
    </div>
</body>

</html>
<?php
} else {
    header('location: ../index.php');
} ?>