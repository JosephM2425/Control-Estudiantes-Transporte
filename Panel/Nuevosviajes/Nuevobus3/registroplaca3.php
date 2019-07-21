<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombreEst = filter_var(strtolower($_POST['nombre']), FILTER_SANITIZE_STRING);
    $cedulaEst = $_POST['cedula'];
    $seccionEst = $_POST['seccion'];

    //echo "$nombreEst .  $cedulaEst . $becadoEst . $seccionEst";

    $fallo = '';

    if (empty($nombreEst) or empty($cedulaEst) or empty($seccionEst)) {
      $fallo .= '<li>Rellena los datos correctamente</li>';
    } else {
      try {
        $conexionEst = new PDO('mysql:host=localhost;
        dbname=ctpaserri_login',
        'root',
        '');
      } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
      }

      $consultaEst1 = $conexionEst->prepare('SELECT * FROM nuevoviaje3 WHERE nombre = :nombre LIMIT 1');
      $consultaEst1->execute(array(':nombre' => $nombreEst));
      $final = $consultaEst1->fetch();

      $consultaEst1 = $conexionEst->prepare('SELECT * FROM nuevoviaje3 WHERE cedula = :cedula LIMIT 1');
      $consultaEst1->execute(array(':cedula' => $cedulaEst));
      $final = $consultaEst1->fetch();

      //$consultaEst1 = $conexionEst->prepare('SELECT * FROM nuevoviaje WHERE placa = :placa LIMIT 1');
      //$consultaEst1->execute(array(':placa' => $placaBus));
      //$final = $consultaEst1->fetch();

    if ($final == false) {
      $fallo .= '<li>El estudiante ya fue ingresado</li>';
    }
  }

    if ($fallo == '') {
      $consultaEst1 = $conexionEst->prepare('INSERT INTO nuevoviaje3 (id, nombre, cedula, seccion) VALUES(NULL, :nombre, :cedula, :seccion)');
      $consultaEst1 ->execute(array(':nombre' => $nombreEst, ':cedula' => $cedulaEst, ':seccion' => $seccionEst));
      $fallo .= '<li>Estudiante ingresado con éxito</li>';
    }
}
require 'registroplaca3.view.php';
?>
