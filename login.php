<?php session_start();

// Con esto revisamos si el usuario tiene una sesion iniciada
if (isset($_SESSION['usuario'])) {
	header('Location: index.php');
	die();
}


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	// Con esto limpiamos la Contraseña de letras en mayuscula y etiquetas html
	// Y recibimos los datos del formulario de login.view.php
	$usuario = filter_var(strtolower($_POST['usuario']), FILTER_SANITIZE_STRING);
	$id = filter_var(strtolower($_POST['num']), FILTER_SANITIZE_STRING);
	$password = $_POST['password'];
	// Con esto "Hasheamos" la constraseña con un algoritmo de encriptacion, el algoritmos es "sha512"
	$password = hash('sha512', $password);



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
	$statement = $conexion->prepare('SELECT * FROM usuarios WHERE  usuario = :usuario AND pass = :password AND num = :num');
	$statement->execute(array(

			':usuario' => $usuario,
			':password' => $password,
			':num' => $id

		));


		// Comparamos si los datos ingresados son iguales a los que estan en la base de datos
	$resultado = $statement->fetch();
	if ($resultado !== false) {
		$_SESSION['usuario'] = $usuario;
		header('Location: index.php');
	} else {
		$errores = '<li>Usuario, Contraseña o ID incorrectoss</li>';
	}
}

// Hacemos una referencia con el archivo login.view.php
require 'views/login.view.php';

?>
