<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  	<link href='https://fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
  	<link rel="stylesheet" href="estilos.css">
    <title></title>
  </head>
  <body>
    <div class="contenedor">
      <h1 class="titulo">Ingreso/salida de estudiantes</h1>
      <hr class="border">

      <form class="formulario" name="login" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
    <h1>Ingrese el código respectivo</h1>
    <br>



    <div id="ingreso">
      <input maxlength="3" class="usuario" type="text" name="codigo" placeholder="Código">
      <i class="submit-btn fa fa-arrow-right" onclick="login.submit()"></i>

    </div>


    <?php if(!empty($errores)): ?>

      <div class="error">
        <ul>
          <?php echo $errores; ?>
        </ul>
      </div>
    <?php endif; ?>
  </form>
</div>
  </body>
</html>
