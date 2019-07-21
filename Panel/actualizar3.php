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
    <main class="container">
        <h1 class="titulo">Actualizar datos Buseta3</h1>
        <a href="panel.php" class="btn btn-primary btn-lg">Volver al Panel de Control</a>
        <br>
        <br>

        <table class="table table-dark">
    <thead>
      <tr>
        <th scope="col">Código</th>
        <th scope="col">Nombre</th>
        <th scope="col">Becado</th>
        <th scope="col">Sección</th>
      </tr>

      <?php
      $sql = "SELECT * FROM buseta3";
      $result = mysqli_query($conexion, $sql);

      while ($mostrar=mysqli_fetch_array($result)) {
        ?>

    </thead>
    <tbody>
      <tr>
        <th scope="row"> <?php echo $mostrar['id'] ?> </th>
        <td> <?php echo $mostrar['nombre'] ?> </td>
        <td> <?php echo $mostrar['becado'] ?> </td>
        <td> <?php echo $mostrar['seccion'] ?> </td>
      </tr>

      <?php
    };
       ?>
    </tbody>
  </table>
    </main>


    <main class="container">
      <form method="POST">
  <div class="form-group">
    <label>Ingrese el Nombre del Estudiante que desea Actualizar</label>
    <input type="text" class="form-control" name="nombre" placeholder="Nombre">
  </div>
  <div class="form-group">
    <label>Nuevo Código</label>
    <input type="text" class="form-control" name="codigo" placeholder="Digite el nuevo Código" maxlength="3">
  </div>
  <div class="form-group">
    <label>Nueva Sección</label>
    <input type="text" class="form-control" name="seccion" placeholder="Sección">
  </div>
  <button type="submit" class="btn btn-primary btn-lg">Actualizar</button>
</form>
    </main>

    <?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST'){

    $codigo = $_POST['codigo'];
    $nombre = $_POST['nombre'];
    $seccion = $_POST['seccion'];

    $actualizar = "UPDATE buseta3 Set
    id = '$codigo',
    nombre = '$nombre',
    seccion = '$seccion'

    WHERE nombre = '$nombre'";

    mysqli_query($conexion, $actualizar);
    header("Location: actualizar3.php");
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
  }

  label{
    font-size: 30px;
    color:white;
  }


</style>


</html>
