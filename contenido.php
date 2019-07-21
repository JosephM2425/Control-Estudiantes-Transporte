<?php session_start();

// verificamos que tenga una sesion iniciada sino tiene una sesion iniciada lo redirijimos al login.php
if (isset($_SESSION['usuario'])) {
  require 'views/contenido.view.php';
}else {

  header('Location: login.php');

}
 ?>
