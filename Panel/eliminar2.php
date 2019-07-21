<?php

session_start();

if (isset($_SESSION['usuario'])) {

}else {
  header('Location: ../login.php');
}

$conexion = mysqli_connect('localhost', 'root', '', 'ctpaserri_login');

 ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title></title>
  </head>
  <body>
    <main class="container">
      <form method="POST">
        <div class="form-group">
          <label class="titulo2">Ingrese la sección a eliminar</label>
          <br>
          <a href="panel.php" class="btn btn-primary btn-lg">Volver al Panel de Control</a>
          <br>
          <br>
          <input type="text" name="secc" class="form-control" placeholder="Ingrese la seccion">
          <br>
          <input type="submit" class="btn btn-danger btn-lg" value="Eliminar">
          <br>
          <label class="titulo2">Ingrese la cédula a eliminar</label>
          <input type="text" name="cedula" class="form-control" placeholder="Ingrese la cédula">
          <br>
          <input type="submit" class="btn btn-danger btn-lg" value="Eliminar">
        </div>
      </form>
    </main>

    <?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST'){

      $eliminarSecc = $_POST['secc'];
      $eliminarCed = $_POST['cedula'];

      $delete = mysqli_query($conexion, "DELETE FROM buseta2 WHERE seccion = '$eliminarSecc'");
      mysqli_query($conexion, $delete);

      $delete2 = mysqli_query($conexion, "DELETE FROM buseta2 WHERE cedula = '$eliminarCed'");
      mysqli_query($conexion, $delete2);

    }
     ?>



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
    font-size: 45px;
    }


  </style>
</html>
