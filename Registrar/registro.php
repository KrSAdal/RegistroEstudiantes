<?php 
    session_start();
    if(isset($_SESSION['id']) && isset($_SESSION['usuario'])){
    
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

</head>

<body class="yup">
    <div class="principal">
        <div class="barralateral">
            <img src="" alt="">
            <div class="barraoculta">
                <i class="fa fa-times" aria-hidden="true"></i>
                <img src="https://pm1.aminoapps.com/8402/a81ad5903e36df22e838e3c27f17e95f09cd3cbar1-1070-1637v2_hq.jpg"
                    style="width: 90px;" alt=":(">
            </div>
            <ul>
                <li><a href="../index.php"><label for="inicio">Inicio</label></a></li>
                <li><a href="#"><label for="inicio">Registrar Estudiante</label></a></li>
                <li><a href="../Listado/listado.php"><label for="inicio">Visualizar Listado</label></a></li>
                <li><a href="../Historial/historial.php"><label for="inicio">Historial de Cambios</label></a></li>
            </ul>
        </div>

        <div class="header">
            <form action="registrar.php" method="POST">

                <div class="mb-3">
                    <label for="1nombre" class="form-label">Primer Nombre</label>
                    <input type="text" class="form-control" name="1nombre" placeholder="" required>
                </div>
                <div class="mb-3">
                    <label for="2nombre" class="form-label">Segundo Nombre</label>
                    <input type="text" class="form-control" name="2nombre" placeholder="">
                </div>
                <div class="mb-3">
                    <label for="1apellido" class="form-label">Primer Apellido</label>
                    <input type="text" class="form-control" name="1apellido" placeholder="" required>
                </div>
                <div class="mb-3">
                    <label for="2apellido" class="form-label">Segundo Apellido</label>
                    <input type="text" class="form-control" name="2apellido" placeholder="">
                </div>
                <div class="mb-3">
                    <label for="telEstudiante" class="form-label">Telefono Estudiante</label>
                    <input type="number" class="form-control" name="telEstudiante" placeholder="">
                </div>
                <div class="mb-3">
                    <label for="telPadre" class="form-label">Telefono Padres</label>
                    <input type="number" class="form-control" name="telPadre" placeholder="" required>
                </div>
                <div class="mb-3">
                    <label for="jornada" class="form-label">Jornada</label>
                    <select name="jornada" class="form-control mt-2"
                        style="border: #bababa 1px solid; color:#000000;">
                        <option value="Matutina">Matutina</option>
                        <option value="Vespertina">Vespertina</option>
                        <option value="Doble Jornada">Doble Jornada</option>
                        <option value="Fin de Semana">Fin de Semana</option>
                    </select required>
                </div>
                <div class="mb-3">
                    <label for="grado" class="form-label">Grado</label>
                    <select name="grado" class="form-control mt-2"
                        style="border: #bababa 1px solid; color:#000000;">
                        <option value="Primero">Primero</option>
                        <option value="Segundo">Segundo</option>
                        <option value="Tercero">Tercero</option>
                        <option value="Cuarto">Cuarto</option>
                        <option value="Quinto">Quinto</option>
                        <option value="Sexto">Sexto</option>
                    </select required>
                </div>
                <div class="mb-3">
                    <label for="carrera" class="form-label">Carrera</label>
                    <select name="carrera" class="form-control mt-2"
                        style="border: #bababa 1px solid; color:#000000;">
                        <option value="Primaria">Primaria</option>
                        <option value="Básico">Básico</option>
                        <option value="Computación">Computación</option>
                        <option value="Ciencias y Letras">Ciencias y Letras</option>
                        <option value="Jurídico">Jurídico</option>
                        <option value="Mecánica">Mecánica</option>
                        <option value="Electrónica">Electrónica</option>
                        <option value="PAE">PAE</option>
                        <option value="Perito Contador">Perito Contador</option>
                        <option value="Medicina">Medicina</option>
                    </select required>
                </div>
                <div class="footer">
                    <div class="col-auto">
                        <button type="submit" class="btn btn-primary ">Registrar</button>
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