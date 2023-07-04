<?php 
    session_start();
    if(isset($_SESSION['id']) && isset($_SESSION['usuario'])){
    
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
    <link rel="stylesheet" href="../Registrar/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

</head>

<body class="yup">

    <?php
    $id = $_GET['id'];
    $nombre1 = $_GET['primernombre'];
    $nombre2 = $_GET['segundonombre'];
    $apellido1 = $_GET['primerapellido'];
    $apellido2 = $_GET['segundoapellido'];
    $telEstudiante = $_GET['telefono'];
    $telPadre = $_GET['telefonopadres'];
    $jornada = $_GET['jornada'];
    $grado = $_GET['grado'];
    $carrera = $_GET['carrera'];

    ?>

    <div class="principal">
        <div class="barralateral">
            <img src="" alt="">
            <div class="barraoculta">
                <i class="fa fa-times" aria-hidden="true"></i>
                <img src="https://pm1.aminoapps.com/8402/a81ad5903e36df22e838e3c27f17e95f09cd3cbar1-1070-1637v2_hq.jpg"
                    style="width: 50px;" alt=":(">
            </div>
            <ul>
                <li><a href="../index.php"><label for="inicio">Inicio</label></a></li>
                <li><a href="#"><label for="inicio">Registrar Estudiante</label></a></li>
                <li><a href="../Listado/listado.php"><label for="inicio">Visualizar Listado</label></a></li>
                <li><a href="../Historial/historial.php"><label for="inicio">Historial de Cambios</label></a></li>
            </ul>
        </div>

        <div class="header">
            <form action="edit.php" method="POST">

                <div class="mb-3">
                    <label for="ID" class="form-label">ID</label>
                    <input type="text" class="form-control" name="id" placeholder="id" value="<?php echo $id; ?>"
                        readonly>
                </div>
                <div class="mb-3">
                    <label for="1nombre" class="form-label">Primer Nombre</label>
                    <input type="text" class="form-control" name="1nombre" placeholder="" value="<?php echo $nombre1; ?>" required>
                </div>
                <div class="mb-3">
                    <label for="2nombre" class="form-label">Segundo Nombre</label>
                    <input type="text" class="form-control" name="2nombre" placeholder="" value="<?php echo $nombre2; ?>" required>
                </div>
                <div class="mb-3">
                    <label for="1apellido" class="form-label">Primer Apellido</label>
                    <input type="text" class="form-control" name="1apellido" placeholder="" value="<?php echo $apellido1; ?>" required>
                </div>
                <div class="mb-3">
                    <label for="2apellido" class="form-label">Segundo Apellido</label>
                    <input type="text" class="form-control" name="2apellido" placeholder="" value="<?php echo $apellido2; ?>" required>
                </div>
                <div class="mb-3">
                    <label for="telEstudiante" class="form-label">Telefono Estudiante</label>
                    <input type="number" class="form-control" name="telEstudiante" placeholder="" value="<?php echo $telEstudiante; ?>" required>
                </div>
                <div class="mb-3">
                    <label for="telPadre" class="form-label">Telefono Padres</label>
                    <input type="number" class="form-control" name="telPadre" placeholder="" value="<?php echo $telPadre; ?>" required>
                </div>
                <div class="mb-3">
                    <label for="jornada" class="form-label">Jornada</label>
                    <select name="jornada" class="form-control mt-2"
                        style="border: #bababa 1px solid; color:#000000;">
                        <option value="Matutina" <?php if ($jornada === 'Matutina') echo 'selected'; ?>>Matutina</option>
                        <option value="Vespertina" <?php if ($jornada === 'Vespertina') echo 'selected'; ?>>Vespertina</option>
                        <option value="Doble Jornada" <?php if ($jornada === 'Doble Jornada') echo 'selected'; ?>>Doble Jornada</option>
                        <option value="Fin de Semana" <?php if ($jornada === 'Fin de Semana') echo 'selected'; ?>>Fin de Semana</option>
                    </select required>
                </div>
                <div class="mb-3">
                    <label for="grado" class="form-label">Grado</label>
                    <select name="grado" class="form-control mt-2" 
                        style="border: #bababa 1px solid; color:#000000;">
                        <option value="Primero" <?php if ($grado === 'Primero') echo 'selected'; ?>>Primero</option>
                        <option value="Segundo" <?php if ($grado === 'Segundo') echo 'selected'; ?>>Segundo</option>
                        <option value="Tercero" <?php if ($grado === 'Tercero') echo 'selected'; ?>>Tercero</option>
                        <option value="Cuarto" <?php if ($grado === 'Cuarto') echo 'selected'; ?>>Cuarto</option>
                        <option value="Quinto" <?php if ($grado === 'Quinto') echo 'selected'; ?>>Quinto</option>
                        <option value="Sexto" <?php if ($grado === 'Sexto') echo 'selected'; ?>>Sexto</option>
                    </select required>
                </div>
                <div class="mb-3">
                    <label for="carrera" class="form-label">Carrera</label>
                    <select name="carrera" class="form-control mt-2"
                        style="border: #bababa 1px solid; color:#000000;">
                        <option value="Primaria" <?php if ($carrera === 'Primaria') echo 'selected'; ?>>Primaria</option>
                        <option value="Básico" <?php if ($carrera === 'Básico') echo 'selected'; ?>>Básico</option>
                        <option value="Computación" <?php if ($carrera === 'Computación') echo 'selected'; ?>>Computación</option>
                        <option value="Ciencias y Letras" <?php if ($carrera === 'Ciencias y Letras') echo 'selected'; ?>>Ciencias y Letras</option>
                        <option value="Jurídico" <?php if ($carrera === 'Jurídico') echo 'selected'; ?>>Jurídico</option>
                        <option value="Mecánica" <?php if ($carrera === 'Mecánica') echo 'selected'; ?>>Mecánica</option>
                        <option value="Electrónica" <?php if ($carrera === 'Electrónica') echo 'selected'; ?>>Electrónica</option>
                        <option value="PAE" <?php if ($carrera === 'PAE') echo 'selected'; ?>>PAE</option>
                        <option value="Perito Contador" <?php if ($carrera === 'Perito Contador') echo 'selected'; ?>>Perito Contador</option>
                        <option value="Medicina" <?php if ($carrera === 'Medicina') echo 'selected'; ?>>Medicina</option>
                    </select required>
                </div>
                <div class="footer">
                    <div class="col-auto">
                        <button type="submit" name="" class="btn btn-primary ">Actualizar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

</body>

</html>
    <?php }else{
        header('location: ../index.php');
    } ?>

