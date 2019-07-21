<?php session_start();

if (isset($_SESSION['usuario1'])) {
  require 'views/contenido.view.php';
}else {
  header('Location: login.php');
}

 ?>
