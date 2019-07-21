<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="../css/estilos.css">
	<title>Ingrese Estudiantes del nuevo viaje</title>
</head>
<body>
  <div class="contenedor">
    <h1 class="titulo">Nuevo viaje #2</h1>
    <hr class="border">

  <form class="formulario" name="login" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">

    <div class="form-group">
      <i class="icono izquierda fa fa-circle"></i><input class="usuario" type="text" name="placa6" placeholder="placa">
    </div>

    <i class="submit-btn fa fa-arrow-right" onclick="login.submit()"></i>

    <!--<div id="ingreso">
      <input maxlength="3" class="usuario" type="button" name="agregar" placeholder="Nuevo viaje"><i class="submit-btn fa fa-arrow-right" onclick=""></i>

    </div>-->


    <?php if(!empty($fallo)): ?>

      <div class="error">
        <ul>
          <?php echo $fallo; ?>
        </ul>
      </div>
    <?php endif; ?>
  </form>
</div>
</body>
</html>
