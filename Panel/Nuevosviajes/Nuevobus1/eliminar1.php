<?php
$conexion = mysqli_connect('localhost', 'root', '', 'ctpaserri_login');

$sql = "TRUNCATE TABLE nuevoviaje1";



$query = mysqli_query($conexion,$sql);
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
 	<link href='https://fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
 	<link rel="stylesheet" href="../css/estilos.css">
 	<title>Eliminar Nuevos viajes</title>
 </head>
 <body>
   <div class="contenedor">
     <h1 class="titulo">Eliminar nuevos viajes</h1>
     <hr class="border">

   <form class="formulario" name="login" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
<center>
 			<input type="submit" id="btn_eliminar" class="btn btn-danger btn-lg" value="Eliminar Viajes">
    </center>
<style>
  #btn_eliminar
{
  font-size: 20px;
  width: 150px;
  height: 30px;
  background-color: green;
}
</style>
    </body>
  	</html>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
echo "<script> alert('Está seguro que desea eliminar el viaje');</script>";
if ($query) {
echo "<script> alert('El viaje ha sido eliminado'); </script>";
// code...
}else {
echo "Error al eliminar el viaje";
}
}
?>
