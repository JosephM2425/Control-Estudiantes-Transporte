<?php
session_start();

if (isset($_SESSION['usuario1'])) {

}else {
  header('Location: ../login.php');
}
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scaleble=no, inital-scale=1.0,
    maximum-scale=1.0, minimum-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400" rel="stylesheet">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/estilos.css">
    <title>Escoja el Horario</title>
  </head>
  <body>
    <div class="contenedor">
      <h1 class="titulo">Elija el día</h1>
      <br>
      <main class="container">
        <a href="../contenido.php">Menu Principal</a>
            <a href="ENTRADA/ingresarcodigoEst1.php" class="btn btn-lg btn-primary">7:00 AM</a>
            <a href="SALIDA/ingresarcodigoEst2.php" class="btn btn-lg btn-primary">4:20 PM</a>
      </main>
      </div>
  </body>

  <style>
  body{
  	background: #1B1D35;
  }
  label{
  	font-size: 30px;
  	color:white;
  }
  h1{
  	color:white;
  	text-align: center;
  }
  </style>





</html>
