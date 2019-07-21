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
        <h1 class="titulo">Administradores</h1>
        <a href="panel.php" class="btn btn-dark btn-lg">Volver al Panel de Control</a>
        <a href="../registro.php" class="btn btn-primary btn-lg">Registrar Nuevos Usuarios Administradores</a>
        <br>
        <br>

        <table class="table table-dark">
    <thead>
      <tr>
        <th scope="col">Número</th>
        <th scope="col">Usuario</th>
        <th scope="col">Cédula</th>
      </tr>

      <?php
      $sql = "SELECT * FROM usuarios";
      $result = mysqli_query($conexion, $sql);

      while ($mostrar=mysqli_fetch_array($result)) {
        ?>

    </thead>
    <tbody>
      <tr>
        <th scope="row"> <?php echo $mostrar['num'] ?> </th>
        <td> <?php echo $mostrar['usuario'] ?> </td>
        <td> <?php echo $mostrar['ced'] ?> </td>
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
    <label>Ingrese el Usuario que desea Actualizar</label>
    <input type="text" class="form-control" name="user" placeholder="Usuario">
  </div>
  <div class="form-group">
    <label>Numero</label>
    <input type="text" class="form-control" name="num" placeholder="Numero">
  </div>
  <button type="submit" class="btn btn-success btn-lg">Actualizar</button>
</form>
    </main>

    <?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST'){

    $usuario = $_POST['user'];
    $num = $_POST['num'];

    $actualizar = "UPDATE usuarios Set
    usuario = '$usuario',
    num = '$num'
    WHERE usuario = '$usuario'";

    mysqli_query($conexion, $actualizar);
    header("Location: administradores.php");
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
