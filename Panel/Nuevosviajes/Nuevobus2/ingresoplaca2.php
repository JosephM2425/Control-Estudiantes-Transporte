<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $placaBus = $_POST['placa2'];
// Con esto hacemos la conexion a la base de datos
try {
	$conexion = new PDO('mysql:host=localhost;
	dbname=ctpaserri_login',
	'root',
	'');
} catch (PDOException $e) {
	echo "Error: " . $e->getMessage();
}

	// Aqui hacemos una consulta sql en la que comparamos
	// los datos ingresados en el formulario con los de la base de dato
	$statement = $conexion->prepare('SELECT * FROM placas WHERE placa2 = :placa2');
	$statement->execute(array(':placa2' => $placaBus));

		// Comparamos si los datos ingresados son iguales a los que estan en la base de datos
	$resultado = $statement->fetch();
	if ($resultado !== false) {
		$_SESSION['placa2'] = $placaBus;
		$conexion = mysqli_connect('localhost', 'root', '', 'ctpaserri_login');

	//	$consulta = "UPDATE nuevoviaje1 Set fecha_actual = NOW() WHERE placa = '$placaBus' ";
      $consulta = ("SELECT * FROM placas WHERE placa2 = '$placaBus'");

		if (mysqli_query($conexion, $consulta)){

			echo "<script> alert('Placa correcta'); </script>";
      header('Location: registroplaca2.php');
		}
	} else {
    echo "<script> alert('Placa incorrecta o ingresó con placa de otro bus'); </script>";
	}
}
// Hacemos una referencia con el archivo login.view.php
require 'ingresoplaca2.view.php';

?>
