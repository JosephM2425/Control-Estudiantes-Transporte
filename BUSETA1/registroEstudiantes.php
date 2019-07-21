<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<title>Ingrese Estudiantes de la Buseta #1</title>
</head>
<body>
	<div class="container">
		<br>
			<a href="../Panel/panel.php" class="btn btn-primary btn-lg">Panel De Control</a>
		<h1>Ingrese Estudiantes de la Buseta #1</h1>
		<br>
		<form action="registroEst1.php" method="POST">
		<div class="form-group">
			<label>Nombre:</label>
			<input type="text" class="form-control" name="nombre" style="font-size: 19px;" placeholder="Ingrese el Nombre">
		</div>
		<div class="form-group">
			<label>Cédula:</label>
			<input type="text" class="form-control" name="cedula" style="font-size: 19px;" placeholder="Ingrese la cédula">
		</div>
		<div class="form-group">
			<label>Sección:</label>
			<input type="text" class="form-control" style="font-size: 19px;" name="seccion" placeholder="Ingrese la sección">
		</div>
		<div class="form-group">
			<label>Asignar Código:</label>
			<input type="text" class="form-control" style="font-size: 19px;" name="codigo" placeholder="Ingrese el nuevo código">
		</div>
		<div class="form-group">
    <label for="exampleFormControlSelect1">Becado:</label>
    <select class="form-control" name="becado" style="font-size: 19px;">
      <option>Becado</option>
			<option>No Becado</option>
    </select>
  </div>
	<br>
	<br>
		<input type="submit" value="Registrar Estudiante" class="btn btn-success btn-lg">
		</form>
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
