<?php

session_start();

if (isset($_SESSION['usuario'])) {

}else {
  header('Location: ../login.php');
}

$conexion = mysqli_connect('localhost', 'root', '', 'ctpaserri_login');

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
    <main class="container-fluid">
        <h1 class="titulo">Panel de Control</h1>
        <h2 class="titulo2">Buseta #9</h2>
        <a href="panel.php" class="btn btn-primary btn-lg">Volver al Panel de Control</a> <a href="reporteEntrada9.php" class="btn btn-success btn-lg">Generar Reporte 7:00AM</a>
        <a href="reporteSalida9.php" class="btn btn-success btn-lg">Generar Reporte 4:20PM</a>
        <br>
        <br>
        <h2 class="titulo3">7:00 AM</h2>
        <div class="table-responsive-lg">


        <table class="table table-bordered table-dark">
    <thead>
      <tr>
        <th scope="col">Nombre</th>
        <th scope="col">Cédula</th>
        <th scope="col">Sección</th>
        <th scope="col">Lunes-Entrada</th>
        <th scope="col">Lunes-Salida</th>
        <th scope="col">Martes-Entrada</th>
        <th scope="col">Martes-Salida</th>
        <th scope="col">Miércoles-Entrada</th>
        <th scope="col">Miércoles-Salida</th>
        <th scope="col">Jueves-Entrada</th>
        <th scope="col">Jueves-Salida</th>
        <th scope="col">Viernes-Entrada</th>
        <th scope="col">Viernes-Salida</th>
      </tr>

      <?php
      $sql = "SELECT * FROM buseta9";
      $result = mysqli_query($conexion, $sql);

      while ($mostrar=mysqli_fetch_array($result)) {
        ?>

    </thead>
    <tbody>
      <tr>
        <th scope="row"> <?php echo $mostrar['nombre'] ?> </th>
        <td> <?php echo $mostrar['cedula'] ?> </td>
        <td> <?php echo $mostrar['seccion'] ?> </td>
        <td> <?php echo $mostrar['lunes_entrada']; ?> </td>
        <td> <?php echo $mostrar['lunes_salida'];  ?> </td>
        <td> <?php echo $mostrar['martes_entrada'];  ?> </td>
        <td> <?php echo $mostrar['martes_salida'];  ?> </td>
        <td> <?php echo $mostrar['miercoles_entrada'];  ?> </td>
        <td> <?php echo $mostrar['miercoles_salida'];  ?> </td>
        <td> <?php echo $mostrar['jueves_entrada'];  ?> </td>
        <td> <?php echo $mostrar['jueves_salida'];  ?> </td>
        <td> <?php echo $mostrar['viernes_entrada'];  ?> </td>
        <td> <?php echo $mostrar['viernes_salida'];  ?> </td>
      </tr>

      <?php
    };
       ?>
    </tbody>
  </table>
  </div>
    </main>

    <main class="container-fluid">

      <h2 class="titulo3">4:20 PM</h2>

      <div class="table-responsive-lg">

      <table class="table table-bordered table-dark">
  <thead>
    <tr>
      <th scope="col">Nombre</th>
      <th scope="col">Cédula</th>
      <th scope="col">Sección</th>
      <th scope="col">Lunes-Entrada</th>
      <th scope="col">Lunes-Salida</th>
      <th scope="col">Martes-Entrada</th>
      <th scope="col">Martes-Salida</th>
      <th scope="col">Miércoles-Entrada</th>
      <th scope="col">Miércoles-Salida</th>
      <th scope="col">Jueves-Entrada</th>
      <th scope="col">Jueves-Salida</th>
      <th scope="col">Viernes-Entrada</th>
      <th scope="col">Viernes-Salida</th>
    </tr>

    <?php
    $sql = "SELECT * FROM buseta9";
    $result = mysqli_query($conexion, $sql);

    while ($mostrar=mysqli_fetch_array($result)) {
      ?>

  </thead>
  <tbody>
    <tr>
      <th scope="row"> <?php echo $mostrar['nombre'] ?> </th>
      <td> <?php echo $mostrar['cedula'] ?> </td>
      <td> <?php echo $mostrar['seccion'] ?> </td>
      <td> <?php echo $mostrar['lunes7']; ?> </td>
      <td> <?php  echo $mostrar['lunes4']; ?> </td>
      <td> <?php echo $mostrar['martes7']; ?> </td>
      <td> <?php  echo $mostrar['martes4']; ?> </td>
      <td> <?php  echo $mostrar['miercoles7']; ?> </td>
      <td> <?php  echo $mostrar['miercoles4']; ?> </td>
      <td> <?php  echo $mostrar['jueves7']; ?> </td>
      <td> <?php  echo $mostrar['jueves4']; ?> </td>
      <td> <?php  echo $mostrar['viernes7']; ?> </td>
      <td> <?php  echo $mostrar['viernes4']; ?> </td>
    </tr>

    <?php
  };
     ?>
  </tbody>
</table>
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

  .titulo3{
    color: white;
  }


</style>


</html>
