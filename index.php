<?php 
    session_start();
    if(isset($_SESSION['id']) && isset($_SESSION['usuario'])){
    
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="stylesInicio.css">

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
                <li><a href="#"><label for="inicio">Inicio</label></a></li>
                <li><a href="./Registrar/registro.php"><label for="inicio">Registrar Estudiante</label></a></li>
                <li><a href="./Listado/listado.php"><label for="inicio">Visualizar Listado</label></a></li>
                <li><a href="cerrar.php"><label for="inicio">Cerra Sesión</label></a></li>
            </ul>
        </div>
        
    </div>
</body>

</html>
<?php }else{
    header('location: ./IniciarSesion/login.php');
} ?>