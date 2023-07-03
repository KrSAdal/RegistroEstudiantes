<?php 
session_start();
if(isset($_SESSION['id']) && isset($_SESSION['usuario'])){
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="stylesListado.css">
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
                <li><a href="#"><label for="inicio">Visualizar Listado</label></a></li>
            </ul>
        </div>

        <form id="form2" name="form2" method="POST" action="listado.php">
            <div class="col-12 row">
                <table class="table" >
                    <thead>
                        <tr class="filters">
                            <th>
                                Grado
                                <select name="buscarGrado"
                                    class="form-control mt-2" style="border: #bababa 1px solid; color:#000000;">
                                    <?php if ($_POST["buscarGrado"] != '') { ?>
                                        <option value="<?php echo $_POST["buscarGrado"]; ?>"><?php echo $_POST["buscarGrado"]; ?>
                                        </option>
                                    <?php } ?>
                                    <option value="Todos">Todos</option>
                                    <option value="Primero">Primero</option>
                                    <option value="Segundo">Segundo</option>
                                    <option value="Tercero">Tercero</option>
                                    <option value="Cuarto">Cuarto</option>
                                    <option value="Quinto">Quinto</option>
                                    <option value="Sexto">Sexto</option>
                                </select>
                            </th>
                            <th>
                                Carrera
                                <select name="buscarCarrera"
                                    class="form-control mt-2" style="border: #bababa 1px solid; color:#000000;">
                                    <?php if ($_POST["buscarCarrera"] != '') { ?>
                                        <option value="<?php echo $_POST["buscarCarrera"]; ?>"><?php echo $_POST["buscarCarrera"]; ?>
                                        </option>
                                    <?php } ?>
                                    <option value="Todos">Todos</option>
                                    <option value="Primaria">Primaria</option>
                                    <option value="Basico">Básico</option>
                                    <option value="Computacion">Computación</option>
                                    <option value="CienciasyLetras">Ciencias y Letras</option>
                                    <option value="Juridico">Jurídico</option>
                                    <option value="Mecanica">Mecánica</option>
                                    <option value="Electronica">Electrónica</option>
                                    <option value="PAE">PAE</option>
                                    <option value="PeritoContador">Perito Contador</option>
                                    <option value="Medicina">Medicina</option>
                                </select>
                            </th>
                        </tr>
                    </thead>
                </table>
                <input type="submit" class="btn btn-success" value="Ver">;
            </div>

            <?php 
                if ($_POST["buscarGrado"] == 'Todos' AND $_POST["buscarCarrera"] == 'Todos'){$filtro = '';}else{
                if ($_POST["buscarGrado"] !== 'Todos' AND $_POST["buscarCarrera"] == 'Todos'){$filtro = "WHERE grado = '".$_POST["buscarGrado"]."'";}    
                if ($_POST["buscarGrado"] == 'Todos' AND $_POST["buscarCarrera"] !== 'Todos'){$filtro = "WHERE carrera = '".$_POST["buscarCarrera"]."'";}
                if ($_POST["buscarGrado"] !== 'Todos' AND $_POST["buscarCarrera"] !== 'Todos'){$filtro = "WHERE grado = '".$_POST["buscarGrado"]."' AND carrera = '".$_POST["buscarCarrera"]."'";}
                }
            ?>
        </form>



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
                    <th scope="col">Acciones</th>
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
                $sql = "SELECT * FROM estudiantes $filtro";
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
                        ?>
                        <td><a href="../Editar/editar.php?id=<?php echo $row['id']; ?>"><button type="button"
                                    name="btnEdit" class="btn btn-warning"><i class="bi bi-pencil"></i></button></a>
                            <a href="../eliminar.php?id=<?php echo $row['id']; ?>"><button type="button" class="btn btn-danger"><i
                                        class="bi bi-trash"></i></button></a>
                        </td>
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
}else{
    header('location: ../index.php');
} ?>