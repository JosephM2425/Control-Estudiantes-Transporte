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
          <label class="titulo2">Ingrese el número de Cédula a buscar</label>
          <br>
          <a href="panel.php" class="btn btn-primary btn-lg">Volver al Panel de Control</a>
          <br>
          <br>
          <input type="text" name="ced" class="form-control" placeholder="Ingrese la cedula">
          <br>
          <input type="submit" class="btn btn-success btn-lg" value="Buscar">
        </div>
      </form>
    </main>

    <?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST'){

      $buscarCed = $_POST['ced'];

      $resultados = mysqli_query($conexion, "SELECT * FROM buseta1 WHERE cedula = '$buscarCed'");
      while ($consulta = mysqli_fetch_array($resultados)) {

     ?>



    <main class="container">
    <table class="table table-dark">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Nombre</th>
          <th scope="col">cédula</th>
          <th scope="col">becado</th>
          <th scope="col">sección</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row"> <?php  echo $consulta['id']; ?> </th>
          <td> <?php echo $consulta['nombre']; ?></td>
          <td> <?php echo $consulta['cedula']; ?></td>
          <td> <?php echo $consulta['becado']; ?></td>
          <td> <?php echo $consulta['seccion']; ?></td>
          <td></td>
        </tr>

<?php
  }
}

 ?>
      </tbody>
    </table>
  </main >


















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
