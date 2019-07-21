<?php
include 'cn.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
$nombreEst = $_POST["nombre"];
$cedulaEst = $_POST["cedula"];
$seccionEst = $_POST["seccion"];
$becadoEst = $_POST["becado"];
$codigoEst = $_POST["codigo"];

$insert = "INSERT INTO buseta1(id, nombre, cedula, seccion, becado) VALUES ('$codigoEst', '$nombreEst', '$cedulaEst' ,'$seccionEst', '$becadoEst')";

$verificar_cedula = mysqli_query($conexion, "SELECT * FROM buseta1 WHERE cedula = '$cedulaEst'");
if (mysqli_num_rows($verificar_cedula) > 0) {
  echo '<script> alert("Usuario ya registrado");
  window.history.go(-1);
   </script>';
  exit;
}
$verificar_codigo = mysqli_query($conexion, "SELECT * FROM buseta1 WHERE id = '$codigoEst'");
if (mysqli_num_rows($verificar_codigo) > 0) {
  echo '<script> alert("Codigo ya registrado");
  window.history.go(-1);
   </script>';
  exit;
}

$resultado = mysqli_query($conexion, $insert);
if (!$resultado) {
  echo "ERROR AL REGISTRARSE";
}else {
   header('Location: registroEstudiantes.php');
  exit;
}


mysqli_close($conexion);
}
 ?>
