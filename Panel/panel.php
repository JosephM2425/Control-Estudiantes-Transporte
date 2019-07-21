<?php
session_start();

if (isset($_SESSION['usuario'])) {

}else {
  header('Location: ../login.php');
}
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>CTPATSE</title>
</head>
<body>
  <h1 class="titulo">Panel de Control</h1>
  <div class="text-center">
  <img src="logoCTPA.png" class="rounded" alt="...">
</div>
<br>
    <main class="container">
      <a href="../contenido.php" class="btn btn-primary btn-lg">Salir del Panel de Control</a>


      <!-- Example single danger button -->
<div class="btn-group">
  <button type="button" class="btn btn-success btn-lg  dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Mostrar Entradas y Salidas de los Estudiantes
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" style="font-size:22px" href="mostrarBuseta1.php">Buseta1</a>
    <a class="dropdown-item" style="font-size:22px" href="mostrarBuseta2.php">Buseta2</a>
    <a class="dropdown-item" style="font-size:22px" href="mostrarBuseta3.php">Buseta3</a>
    <a class="dropdown-item" style="font-size:22px" href="mostrarBuseta4.php">Buseta4</a>
    <a class="dropdown-item" style="font-size:22px" href="mostrarBuseta5.php">Buseta5</a>
    <a class="dropdown-item" style="font-size:22px" href="mostrarBuseta6.php">Buseta6</a>
    <a class="dropdown-item" style="font-size:22px" href="mostrarBuseta7.php">Buseta7</a>
    <a class="dropdown-item" style="font-size:22px" href="mostrarBuseta8.php">Buseta8</a>
    <a class="dropdown-item" style="font-size:22px" href="mostrarBuseta9.php">Buseta9</a>
  </div>
</div>

<div class="btn-group">
  <button type="button" class="btn btn-success btn-lg  dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Registrar estudiantes a las busetas
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" style="font-size:22px" href="../BUSETA1/registroEstudiantes.php">Buseta1</a>
    <a class="dropdown-item" style="font-size:22px" href="../BUSETA2/registroEstudiantes.php">Buseta2</a>
    <a class="dropdown-item" style="font-size:22px" href="../BUSETA3/registroEstudiantes.php">Buseta3</a>
    <a class="dropdown-item" style="font-size:22px" href="../BUSETA4/registroEstudiantes.php">Buseta4</a>
    <a class="dropdown-item" style="font-size:22px" href="../BUSETA5/registroEstudiantes.php">Buseta5</a>
    <a class="dropdown-item" style="font-size:22px" href="../BUSETA6/registroEstudiantes.php">Buseta6</a>
    <a class="dropdown-item" style="font-size:22px" href="../BUSETA7/registroEstudiantes.php">Buseta7</a>
    <a class="dropdown-item" style="font-size:22px" href="../BUSETA8/registroEstudiantes.php">Buseta8</a>
    <a class="dropdown-item" style="font-size:22px" href="../BUSETA9/registroEstudiantes.php">Buseta9</a>
  </div>
</div>
<br>
<br>
<div class="btn-group">
  <button type="button" class="btn btn-danger btn-lg  dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Eliminar
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" style="font-size:22px" href="eliminar1.php">Buseta1</a>
    <a class="dropdown-item" style="font-size:22px" href="eliminar2.php">Buseta2</a>
    <a class="dropdown-item" style="font-size:22px" href="eliminar3.php">Buseta3</a>
    <a class="dropdown-item" style="font-size:22px" href="eliminar4.php">Buseta4</a>
    <a class="dropdown-item" style="font-size:22px" href="eliminar5.php">Buseta5</a>
    <a class="dropdown-item" style="font-size:22px" href="eliminar6.php">Buseta6</a>
    <a class="dropdown-item" style="font-size:22px" href="eliminar7.php">Buseta7</a>
    <a class="dropdown-item" style="font-size:22px" href="eliminar8.php">Buseta8</a>
    <a class="dropdown-item" style="font-size:22px" href="eliminar9.php">Buseta9</a>
  </div>
</div>

<div class="btn-group">
  <button type="button" class="btn btn-secondary btn-lg  dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Actualizar
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" style="font-size:22px" href="actualizar1.php">Buseta1</a>
    <a class="dropdown-item" style="font-size:22px" href="actualizar2.php">Buseta2</a>
    <a class="dropdown-item" style="font-size:22px" href="actualizar3.php">Buseta3</a>
    <a class="dropdown-item" style="font-size:22px" href="actualizar4.php">Buseta4</a>
    <a class="dropdown-item" style="font-size:22px" href="actualizar5.php">Buseta5</a>
    <a class="dropdown-item" style="font-size:22px" href="actualizar6.php">Buseta6</a>
    <a class="dropdown-item" style="font-size:22px" href="actualizar7.php">Buseta7</a>
    <a class="dropdown-item" style="font-size:22px" href="actualizar8.php">Buseta8</a>
    <a class="dropdown-item" style="font-size:22px" href="actualizar9.php">Buseta9</a>
  </div>
</div>

<div class="btn-group">
  <button type="button" class="btn btn-success btn-lg  dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Nuevos Viajes
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" style="font-size:22px" href="Nuevosviajes/NuevoBus1/ingresoplaca1.php">Nuevo Viaje #1</a>
    <a class="dropdown-item" style="font-size:22px" href="Nuevosviajes/NuevoBus2/ingresoplaca2.php">Nuevo Viaje #2</a>
    <a class="dropdown-item" style="font-size:22px" href="mostrarBuseta3.php">Nuevo Viaje #3</a>
    <a class="dropdown-item" style="font-size:22px" href="mostrarBuseta4.php">Nuevo Viaje #4</a>
    <a class="dropdown-item" style="font-size:22px" href="mostrarBuseta5.php">Nuevo Viaje #5</a>
    <a class="dropdown-item" style="font-size:22px" href="mostrarBuseta6.php">Nuevo Viaje #6</a>
    <a class="dropdown-item" style="font-size:22px" href="mostrarBuseta7.php">Nuevo Viaje #7</a>
  </div>
</div>


<div class="btn-group">
  <button type="button" class="btn btn-secondary btn-lg  dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Consultar
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" style="font-size:22px" href="consulta1.php">Buseta1</a>
    <a class="dropdown-item" style="font-size:22px" href="consulta2.php">Buseta2</a>
    <a class="dropdown-item" style="font-size:22px" href="consulta3.php">Buseta3</a>
    <a class="dropdown-item" style="font-size:22px" href="consulta4.php">Buseta4</a>
    <a class="dropdown-item" style="font-size:22px" href="consulta5.php">Buseta5</a>
    <a class="dropdown-item" style="font-size:22px" href="consulta6.php">Buseta6</a>
    <a class="dropdown-item" style="font-size:22px" href="consulta7.php">Buseta7</a>
    <a class="dropdown-item" style="font-size:22px" href="consulta8.php">Buseta8</a>
    <a class="dropdown-item" style="font-size:22px" href="consulta9.php">Buseta9</a>
  </div>
</div>

<div class="btn-group">
  <button type="button" class="btn btn-success btn-lg  dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Editar Usuarios
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" style="font-size:22px" href="choferes.php">Conductores</a>
    <a class="dropdown-item" style="font-size:22px" href="administradores.php">Administradores</a>
  </div>
</div>















    </main>









    <script type="text/javascript" src="js/jquery-3.2.1.slim.min.js"></script>
    <script type="text/javascript" src="js/popper.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>




























<style>
  body{
    background: #1B1D35;
  }
  .titulo {
  	font-weight: 300;
  	color: #B8711B;
  	text-align: center;
  	margin: 60px 0 30px 0;
  }
  .boton_personalizado{
    text-decoration: none;
    padding: 10px;
    font-weight: 600;
    font-size: 20px;
    color: #ffffff;
    background-color: #1883ba;
    border-radius: 6px;
    border: 2px solid #0016b0;
  }
  .boton_personalizado:hover{
    color: #1883ba;
    background-color: #ffffff;
  }
  .titulo2{
  font-weight: 300;
	color: MediumSeaGreen;
	text-align: center;
	margin: 60px 0 30px 0;
  }

</style>


</html>
