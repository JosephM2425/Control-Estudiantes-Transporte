<?php session_start();

if (isset($_SESSION['usuario1'])) {
  header('Location: contenido.php');
}else {
  header('Location: login.php');
}


 ?>
