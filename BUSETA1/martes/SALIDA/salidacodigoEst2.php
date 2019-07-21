<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$codigoEstudiante = $_POST['codigo'];

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
	$statement = $conexion->prepare('SELECT * FROM buseta1 WHERE id = :codigo');
	$statement->execute(array(':codigo' => $codigoEstudiante));



		// Comparamos si los datos ingresados son iguales a los que estan en la base de datos
	$resultado = $statement->fetch();
	if ($resultado !== false) {
		$_SESSION['codigo'] = $codigoEstudiante;

		$conexion = mysqli_connect('localhost', 'root', '', 'ctpaserri_login');

		$consulta = "UPDATE buseta1 Set martes4 = NOW() WHERE id = '$codigoEstudiante' ";

		if (mysqli_query($conexion, $consulta)) {
			echo "<script> alert('Codigo Ingresado'); </script>";
		}



	} else {
		$errores = '<li>ID incorrecto o no perteneces a este grupo de la buseta</li>';
	}
}

// Hacemos una referencia con el archivo login.view.php
require 'salidacodigoEst2.view.php';

?>
