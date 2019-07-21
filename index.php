<?php session_start();

// Analizamos que el usuario tenga una sesion iniciada
if (isset($_SESSION['usuario'])) {
  header('Location: contenido.php');
}else {
  header('Location: Index/index.html');
}



 ?>
